<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Category;
use App\Models\Employer;
use App\Models\Internship;
use App\Models\InternshipStudent;
use App\Models\Perk;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InternshipController extends Controller
{
    
    public function showInternshipForm()
    {
        // $cat = Category::orderBy('name', 'asc')->get();
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();
        $cat = Category::where('status', '1')->get();
        return view('employer.postInternship', compact('emp', 'cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitInternshipForm(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'salary' => 'required|integer',
            'openings' => 'required|integer',
            'duration' => 'required',
            'last_date' => 'required'
        ]);

        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        $job = new Internship();

        $job->title = $request->title;
        $job->description = $request->description;
        $job->category = $request->category;
        $job->status = 1; // Set status to 0 (Active)
        $job->salary = $request->salary;
        $job->openings = $request->openings;
        $job->duration = $request->duration;
        $job->last_date = $request->last_date;

        $emp->internship()->save($job);

        $internship = Internship::orderBy('id', 'DESC')->first();

        $perk = new Perk();

        if($request->perk1 == '')
        {
            $perk->perk1 = 0;
        }
        else
        {
            $perk->perk1 = $request->perk1;
        }

        if($request->perk2 == '')
        {
            $perk->perk2 = 0;
        }
        else
        {
            $perk->perk2 = $request->perk2;
        }

        if($request->perk3 == '')
        {
            $perk->perk3 = 0;
        }
        else
        {
            $perk->perk3 = $request->perk3;
        }

        if($request->perk4 == '')
        {
            $perk->perk4 = 0;
        }
        else
        {
            $perk->perk4 = $request->perk4;
        }

        $a = $internship->perk()->save($perk);

        if($a)
        {
            return back()->with('success', 'Internship is Addedd Successfully, But It is in Pending Now!!');
        }
        else
        {
            return back()->with('fail', 'something went wrong!');
        }
    }


    public function internshipDetails($id)
    {
        $int = Internship::find($id);
        $applybtn = DB::table('internship_student')
                            ->where('internship_id', '=', $id)
                            ->where('student_id', '=', session('LoggedStu'))
                            ->exists();
        //recent jobs
           // Fetch recent internships excluding the current one
           $recentInternship = Internship::where('id', '!=', $id)
           ->orderBy('id', 'DESC')
           ->take(3)
           ->get();

        // return response()->json( $i);
        return view('pages.internshipDetails', compact('int', 'applybtn', 'recentInternship'));

    }
    
    

    public function internshipsApply($id)
    {
        $stu = Student::where('id', '=', session('LoggedStu'))->first();

        $apply = DB::table('internship_student')->insert([
            'internship_id' => $id,
            'student_id' => $stu->id,
        ]);

        return back()->with('success', 'Applied for this Internship');
    }


    public function editInternship($id)
    {
        $int = Internship::find($id);
        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();
        $cat = Category::where('status', '1')->get();
        return view('employer.editInternship', compact('int', 'emp','cat'));
    }

    public function updateInternship(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'salary' => 'required|integer',
            'openings' => 'required|integer',
            'duration' => 'required',
            'last_date' => 'required'
        ]);

        $emp = Employer::where('id', '=', session('LoggedEmp'))->first();

        $job = Internship::find($id);

        $job->title = $request->title;
        $job->description = $request->description;
        $job->category = $request->category;
        $job->salary = $request->salary;
        $job->openings = $request->openings;
        $job->duration = $request->duration;
        $job->last_date = $request->last_date;

        $internship = $emp->internship()->save($job);

        
        if($internship)
        {
            return back()->with('success', 'Internship is Updated Successfully!!');
        }
        else
        {
            return back()->with('fail', 'something went wrong!');
        }

    }

    public function internships()
    {
        $internship = Internship::paginate(2);
        $cities = Employer::select('city')
        ->whereNotNull('city')
        ->distinct()
        ->pluck('city');

        return view('pages.internships', compact('internship', 'cities'));
    }

    public function searchJobs(Request $request)
    {
        $query = $request->input('query'); // Capture search term
        $city = $request->input('city');   // Capture selected city if needed

        $cities = Employer::select('city')
        ->whereNotNull('city')
        ->distinct()
        ->pluck('city');
    
        $internship = Internship::where(function ($q) use ($query) {
                $q->where('title', 'LIKE', '%' . $query . '%')
                  ->orWhere('category', 'LIKE', '%' . $query . '%');
            })
            ->when($city, function ($q) use ($city) {
                $q->whereHas('employer', function ($q2) use ($city) {
                    $q2->where('city', $city);
                });
            })
            ->paginate(10);
    
        return view('pages.internships', compact('internship','cities'));
    }

    // public function index()
    // {
    //     // Fetch the first 3 internships to display initially
    //     $internships = Internship::with('perk', 'employer')
    //         ->take(3)
    //         ->get();

    //     // Return the welcome view with internships data
    //     return view('welcome', compact('internships'));
    // }

    /**
     * Load more internships via AJAX request.
     */
    public function loadMore(Request $request)
    {
        // Number of internships to skip
        $skip = $request->get('skip', 0);

        // Fetch internships in chunks of 3
        $internships = Internship::with( 'perk', 'employer')
            ->skip($skip)
            ->take(3)
            ->get();

        // Return internships as JSON response
        return response()->json($internships);
    }
}

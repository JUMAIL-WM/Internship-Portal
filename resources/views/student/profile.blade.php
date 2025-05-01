@extends('student.layout')

@section('student_name', $stu->first_name)

@section('menu_detail')
<span>
    <img src="/images/student/{{ $stu->image ?? 'mp1.jpg' }}" alt="" height="50px" />
    @yield('student_name')
    <i class="la la-bars"></i>
</span>
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="profile-form-edit">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="profile-title" id="mp">
                    <h3>My Profile</h3>
                    <div class="upload-img-bar">
                        <div class="circular-progress-container">
                            <div class="circular-progress" style="--progress: {{ $completionPercentage }};">
                                <div class="percentage">{{ $completionPercentage }}%</div>
                            </div>
                            <span class="progress-text">Complete your profile to boost chances</span>
                        </div>
                    </div>
                    <!-- Image Upload Section -->
                    <div class="upload-img-bar">
                        <span>
                            <img id="profileImagePreview" src="{{ asset('images/student/' . ($stu->image ?? 'mp1.jpg')) }}" alt="" height="150px" width="150px" style="object-fit: cover; border-radius: 50%;" />
                        </span>
                        <div class="upload-info">
                            <input type="file" id="imageUpload" name="image" accept="image/jpeg,image/png" style="display: none;">
                            <a href="#" onclick="event.preventDefault(); document.getElementById('imageUpload').click();">Browse</a>
                            <span>Max file size is 1MB, Minimum dimension: 270x210, Suitable files are .jpg & .png</span>
                        </div>
                    </div>
                </div>

                <style>
                 
                    .circular-progress {
                        position: relative;
                        height: 120px;
                        width: 120px;
                        border-radius: 50%;
                        background: conic-gradient(#1967d2 0deg, #e0e0e0 0deg);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                    .circular-progress::before,
                    .inner-circle {
                        content: "";
                        position: absolute;
                        height: 100px;
                        width: 100px;
                        border-radius: 50%;
                        background-color: white;
                    }
                    .percentage {
                        position: relative;
                        font-size: 24px;
                        font-weight: 600;
                        color: #1967d2;
                        z-index: 2;
                    }
                    .progress-text {
                        margin-top: 15px;
                        font-size: 14px;
                        color: #555;
                        text-align: center;
                        width: 200px;
                    }
                </style>

                <div class="row">
                    <div class="col-lg-6">
                        <span class="pf-title">First Name</span>
                        <div class="pf-field">
                            <input type="text" name="first_name" value="{{ $stu->first_name }}" />
                        </div>
                        @error('first_name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Last Name</span>
                        <div class="pf-field">
                            <input type="text" name="last_name" value="{{ $stu->last_name }}" />
                        </div>
                        @error('last_name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Email ID</span>
                        <div class="pf-field">
                            <input type="email" name="email" value="{{ $stu->email }}" />
                        </div>
                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Contact Number</span>
                        <div class="pf-field">
                            <input type="text" name="mobile" value="{{ $stu->mobile }}" />
                        </div>
                        @error('mobile') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Address</span>
                        <div class="pf-field">
                            <input type="text" name="address" value="{{ $stu->address }}" />
                        </div>
                        @error('address') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">LinkedIn</span>
                        <div class="pf-field">
                            <input type="url" name="linkedin" value="{{ $stu->linkedin }}" />
                            <i class="la la-linkedin"></i>
                        </div>
                        @error('linkedin') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">College Name</span>
                        <div class="pf-field">
                            <input type="text" name="college_name" value="{{ $stu->education->college_name ?? '' }}" />
                        </div>
                        @error('college_name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Degree</span>
                        <div class="pf-field">
                            <select name="degree" class="chosen">
                                <option>Select Your Degree</option>
                                <option value="Diploma" {{ optional($stu->education)->degree == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                                <option value="Bachelor's" {{ optional($stu->education)->degree == "Bachelor's" ? 'selected' : '' }}>Bachelor's</option>
                                <option value="Master's" {{ optional($stu->education)->degree == "Master's" ? 'selected' : '' }}>Master's</option>
                            </select>
                        </div>
                        @error('degree') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Branch</span>
                        <div class="pf-field">
                            <input type="text" name="branch" value="{{ $stu->education->branch ?? '' }}" />
                        </div>
                        @error('branch') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Pass Out</span>
                        <div class="pf-field">
                            <input type="date" name="pass_year" value="{{ $stu->education->pass_year ?? '' }}" />
                        </div>
                        @error('pass_year') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-lg-6">
                        <span class="pf-title">Resume</span>
                        <div class="pf-field">
                            <input type="file" name="resume" />
                        </div>
                        @error('resume')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <button type="submit" style="margin-bottom: 25px;">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@if(Session::has('success'))
    <script>
        toastr.options = {
            closeButton: false,
            progressBar: true
        };
        toastr.success("{{ session('success') }}");
    </script>
@endif

@if(Session::has('fail'))
    <script>
        toastr.options = {
            closeButton: false,
            progressBar: true
        };
        toastr.error("{{ session('fail') }}");
    </script>
@endif

<style>
    .upload-img-bar {
        position: relative;
        cursor: pointer;
    }
    .upload-img-bar img {
        border-radius: 50%;
        object-fit: fill;
        width: 150px;
        height: 150px;
        border: 3px solid #ddd;
    }
    .upload-info a {
        display: inline-block;
        padding: 8px 15px;
        background: #1967d2;
        color: white;
        border-radius: 4px;
        margin-top: 10px;
    }
    .upload-info a:hover {
        background: #185abc;
    }
</style>

<script>
    document.getElementById('imageUpload').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            if (!file.type.match('image/jpeg') && !file.type.match('image/png')) {
                alert('Only JPG and PNG images are allowed!');
                this.value = '';
                return;
            }
            if (file.size > 1024 * 1024) {
                alert('Image must be less than 1MB!');
                this.value = '';
                return;
            }
            const reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('profileImagePreview').src = event.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        function calculateProfileCompletion() {
            const requiredFields = [
                '{{ $stu->first_name }}',
                '{{ $stu->last_name }}',
                '{{ $stu->email }}',
                '{{ $stu->mobile }}',
                '{{ $stu->address }}',
                '{{ $stu->linkedin }}',
                '{{ $stu->image }}'
            ];
            let completedFields = requiredFields.filter(field => field.trim() !== '').length;
            const percentage = Math.round((completedFields / requiredFields.length) * 100);
            const circularProgress = document.querySelector(".circular-progress");
            const progressValue = document.querySelector(".percentage");
            circularProgress.style.background = `conic-gradient(#1967d2 ${percentage * 3.6}deg, #e0e0e0 0deg)`;
            progressValue.textContent = `${percentage}%`;
        }

        calculateProfileCompletion();
    });
</script>
@endsection

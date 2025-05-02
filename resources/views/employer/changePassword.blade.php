@extends('employer.layout')

@section('employer_name', $emp->name)

@section('menu_detail')

<span><img src="/images/employer/{{$emp->logo}}" width="50" height="50" alt="" /> @yield('employer_name') <i class="la la-angle-down"></i></span>
    
@endsection

@section('section')
<div class="col-lg-9 column">
    <div class="padding-left">
        <div class="manage-jobs-sec">
            <h3>Change Password</h3>
            <div class="change-password">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            @if (Session::has('success'))
                                <div class="alert alert-success mt-5">{{ session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger mt-5">{{ session::get('fail') }}</div>
                            @endif
            
                            <!-- Old Password -->
                            <span class="pf-title">Old Password</span>
                            <div class="pf-field input-password">
                                <input type="password" name="old_password" placeholder="**************" />
                                <span class="password-toggle-icon">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            @error('old_password')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
            
                            <!-- New Password -->
                            <span class="pf-title">New Password</span>
                            <div class="pf-field input-password">
                                <input type="password" name="password" placeholder="**************" />
                                <span class="password-toggle-icon">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            @error('password')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
            
                            <!-- Confirm Password -->
                            <span class="pf-title">Confirm Password</span>
                            <div class="pf-field input-password">
                                <input type="password" name="password_confirmation" placeholder="**************" />
                                <span class="password-toggle-icon">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            @error('password_confirmation')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
            
                            <button type="submit" style="margin-bottom: 25px;">Update</button>
                        </div>

                        <style>
                            /* General Input Field Styling */
.input-password {
    display: flex;
    align-items: center; /* Vertically center the elements */
    position: relative;
}

.input-password input {
    width: 100%;
    padding: 0.8rem 3rem 0.8rem 1rem; /* Add padding for the icon area */
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.password-toggle-icon {
    position: absolute;
    right: 1rem; /* Adjust as needed */
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #777; /* Icon color */
    transition: color 0.3s ease; /* Smooth hover effect */
}

.password-toggle-icon:hover {
    color: #1967d2; /* Hover color */
}

.password-toggle-icon .fa-eye-slash {
    color: #1967d2; /* Active color when password is visible */
}
                        </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select all password containers
        const passwordContainers = document.querySelectorAll(".input-password");

        // Iterate through each container
        passwordContainers.forEach(container => {
            const input = container.querySelector("input[type='password']"); // Get the password input
            const icon = container.querySelector(".password-toggle-icon i"); // Get the toggle icon

            if (!input || !icon) return; // Skip if elements are missing

            // Add click event listener to the toggle icon
            container.querySelector(".password-toggle-icon").addEventListener("click", function () {
                // Toggle the input type between 'password' and 'text'
                const type = input.getAttribute("type") === "password" ? "text" : "password";
                input.setAttribute("type", type);

                // Toggle the icon classes
                icon.classList.toggle("fa-eye");
                icon.classList.toggle("fa-eye-slash");
            });
        });
    });
</script>
            
                        <div class="col-lg-6">
                            <i class="la la-key big-icon"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    @if(Session::has('success'))
        <script>
            toastr.options =
            {
                "closeButton" : false,
                "progressBar" : true
            }
                    toastr.success("{{ session('success') }}");
        </script>
    @endif
@endsection
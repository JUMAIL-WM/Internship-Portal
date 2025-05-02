@extends('pages.layout')

@section('page_title', 'Register')
    

@section('section')

<section>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
                    <div class="col-lg-2"></div>
				 	<div class="col-lg-8 column">
				 		<div class="padding-left">
					 		<div class="profile-title">
					 			<h3>Register as an Employer/Compnay</h3>
					 		</div>
					 		<div class="profile-form-edit">
					 			<form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
					 				<div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Employer/Company Name</span>
                                            <div class="pf-field">
                                                <input type="text" name="name" placeholder="John Doe / XYZ Company" value="{{old('name')}}" />
                                            </div>
                                            @error('name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Description</span>
                                            <div class="pf-field">
                                                <textarea name="description" placeholder="Spent several years working on sheep on Wall Street." value="{{old('description')}}"></textarea>
                                            </div>
                                            @error('description')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Email ID</span>
					 						<div class="pf-field">
					 							<input type="email" name="email" placeholder="xyz@company.com" value="{{old('email')}}"/>
					 						</div>
                                            @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Contact Number</span>
					 						<div class="pf-field">
					 							<input type="text" name="contact_no" placeholder="9285471584" value="{{old('contact_no')}}"/>
					 						</div>
                                             @error('contact_no')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
					 					</div>
                                         <div class="col-lg-6">
                                            <span class="pf-title">Password</span>
                                            <div class="pf-field position-relative">
                                                <input type="password" id="password" name="password" placeholder="**************" />
                                                <span id="togglePassword" class="password-toggle-icon" style="cursor: pointer;">
                                                    <i id="passwordIcon" class="fas fa-eye"></i>
                                                </span>
                                            </div>
                                            @error('password')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <span class="pf-title">Confirm Password</span>
                                            <div class="pf-field position-relative">
                                                <input type="password" id="confirm_password" name="confirm_password" placeholder="**************" />
                                                <span id="toggleConfirmPassword" class="password-toggle-icon" style="cursor: pointer;">
                                                    <i id="confirmPasswordIcon" class="fas fa-eye"></i>
                                                </span>
                                            </div>
                                            @error('confirm_password')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <style>
                                        /* General Input Field Styling */
                                        .pf-field {
                                            display: flex;
                                            align-items: center; /* Vertically center the elements */
                                            position: relative;
                                        }

                                        .pf-field input {
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

                                        /* Responsive Design */
                                        @media (max-width: 768px) {
                                            .pf-field input {
                                                padding: 0.6rem 2rem 0.6rem 1rem; /* Adjust padding for smaller screens */
                                            }
                                        }
                                        </style>
                                        
                                        <script>
                                                                                // Toggle password visibility for "Password" field
                                        document.getElementById('togglePassword').addEventListener('click', function () {
                                            const passwordField = document.getElementById('password');
                                            const passwordIcon = document.getElementById('passwordIcon');
                                            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                                            passwordField.setAttribute('type', type);

                                            // Toggle icon
                                            passwordIcon.classList.toggle('fa-eye');
                                            passwordIcon.classList.toggle('fa-eye-slash');
                                        });

                                        // Toggle password visibility for "Confirm Password" field
                                        document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
                                            const confirmPasswordField = document.getElementById('confirm_password');
                                            const confirmPasswordIcon = document.getElementById('confirmPasswordIcon');
                                            const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
                                            confirmPasswordField.setAttribute('type', type);

                                            // Toggle icon
                                            confirmPasswordIcon.classList.toggle('fa-eye');
                                            confirmPasswordIcon.classList.toggle('fa-eye-slash');
                                        });
                                        </script>
                                        <!-- Include Font Awesome for Icons -->
                                        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
                                        <div class="col-lg-6">
                                            <span class="pf-title">Address</span>
                                            <div class="pf-field">
                                                <input type="text" name="address" placeholder="HIG-87, Collins Street West, Bhopal, MP, India" value="{{old('address')}}" />
                                            </div>
                                            @error('address')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">City</span>
                                            <div class="pf-field">
                                                <input type="text" name="city" placeholder="Eg. Bhopal" value="{{old('city')}}" />
                                            </div>
                                            @error('city')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">State</span>
                                            <div class="pf-field">
                                                <input type="text" name="state" placeholder="MP" value="{{old('state')}}" />
                                            </div>
                                            @error('state')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Zip Code</span>
                                            <div class="pf-field">
                                                <input type="text" name="zip_code" placeholder="462042" value="{{old('zip_code')}}" />
                                            </div>
                                            @error('zip_code')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Website</span>
                                            <div class="pf-field">
                                                <input type="url" name="website" placeholder="www.johndoe.com" value="{{old('website')}}" />
                                                <i class="la la-globe"></i>
                                            </div>
                                            @error('website')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">LinkedIn</span>
                                            <div class="pf-field">
                                                <input type="url" name="linkedin" placeholder="www.Linkedin.com/JohnDoe" value="{{old('linkedin')}}" />
                                                <i class="la la-linkedin"></i>
                                            </div>
                                            @error('linkedin')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="pf-title">Profile/Logo</span>
                                            <div class="pf-field">
                                                <input type="file" name="logo" value="{{old('logo')}}" />
                                            </div>
                                            @error('logo')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" style="margin-bottom: 25px;">Register</button>
                                        </div>
					 				</div>
					 			</form>
					 		</div>
					 	</div>
					</div>
                    <div class="col-lg-2"></div>
				 </div>
			</div>
		</div>
	</section>

@endsection
@extends('layouts.trilogy_home_master')
@section('content')
<main class="container">
			<div class="col-md-10 offset-md-1">
				<div class="register_form_conatiner row box_shadow">
					<div class="registation_form_header">
						<h2>Registation Form</h2>
					</div>
					<form method='POST' action="{{ route('register') }}" class="col-md-12 register_ff">
						@csrf
					
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="uploaded_name"
								>Name</label
							>
							<input
								name='first_name'
								type="text"
								class="form-control first_name_input_box form-control-lg col-md-4"
								id="uploaded_name"
								placeholder="First name"
							/>
							<div class="col-md-1"></div>
							<input
								type="text"
								class="form-control form-control-lg col-md-4"
								id="uploaded_name"
								placeholder="Last name"
								name="last_name"
							/>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="uploaded_name"
								>Country</label
							>
							<select
								class="form-control form-control-lg col-md-9"
								id="country"
								name="country"
							>
								<option>Select Country</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="India">India</option>
								<option value="Pakistan">Pakistan</option>
								<option value="USA">USA</option>
								<option value="UK">UK</option>
							</select>
							@error('country')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
              @enderror
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Occupation"
								>Occupation</label
							>
							<input
								name="occupation"
								type="text"
								class="form-control form-control-lg col-md-9"
								id="Occupation"
								placeholder="Occupation"
							/>
							@error('occupation')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
              @enderror
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Institute"
								>Institute</label
							>
							<input
								name="institute"
								type="text"
								class="form-control form-control-lg col-md-9"
								id="Institute"
								placeholder="Institute"
							/>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Email">Email</label>
							<input
								name="email"
								type="text"
								class="form-control form-control-lg col-md-9"
								id="Email"
								placeholder="Email"
							/>
						</div>

						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Phone">Phone</label>
							<input
								name="phone"
								type="text"
								class="form-control form-control-lg col-md-9"
								id="Phone"
								placeholder="Phone"
							/>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="password">Password</label>
							<input
								name="password"
								type="password"
								class="form-control form-control-lg col-md-9"
								id="password"
								placeholder="Password"
							/>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="password">Confirm Password</label>
							<input
								name="password_confirmation"
								type="password"
								class="form-control form-control-lg col-md-9"
								id="password"
								placeholder="Confirm Password"
								required autocomplete="new-password"
							/>
						</div>
						<div class="testi_submit_conatiner">
							<button type="submit" class="btn btn-primary rsgister_now_btn">
								Register Now
							</button>
						</div>
					</form>
				</div>
				<div class="enrollment_from box_shadow">
					<div class="enroll_form_header">
						<h2>Enrollment Form</h2>
						<h4>Covid-19 Research Group</h4>
					</div>

					<form class="enrollment_f" action="#">
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Phone">Name</label>
							<input
								type="text"
								class="form-control form-control-lg col-md-8"
								id="Phone"
								placeholder="Enter your name"
							/>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Institute"
								>Institute</label
							>
							<input
								type="text"
								class="form-control form-control-lg col-md-8"
								id="Phone"
								placeholder="Institute"
							/>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="Email">Email</label>
							<input
								type="text"
								class="form-control form-control-lg col-md-8"
								id="Email"
								placeholder="Email"
							/>
						</div>
						<div class="testi_submit_conatiner">
							<button type="submit" class="btn btn-primary enroll_now_btn">
								Enroll Me
							</button>
						</div>
					</form>
				</div>
				<div class="academicinfo py-3"></div>
			</div>
		</main>
@endsection
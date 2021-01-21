@extends('layouts.admin_dashboard')
@section('content')
<main class="container">
			<div class="col-md-10 offset-md-1 content-bottom-space">
				<div class="register_form_conatiner trilogy_group_add_form_container row box_shadow p-5">
					<div class="registation_form_header mt-4">
						<h2>Trilogo Group Create</h2>
					</div>
          
          @if(session('success'))
          <div class="alert alert-success custom_alert" role="alert">
             {{session('success')}}
          </div>
          @endif
					<form action="{{route('all.group')}}" method='POST' class="col-md-12 register_ff">
          @csrf
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="uploaded_name">Name</label>
							<input name="name" type="text" class="form-control first_name_input_box form-control-lg col-md-9 @error('name') is-invalid @enderror" id="uploaded_name"placeholder="Group name"/>
              <!-- <div class="invalid-feedback">
                  @error('name')
                    {{$message}}
                  @enderror
              </div> -->
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text">Privacy</label>
							<select name="privacy" class="form-control form-control-lg col-md-9" id="Privacy">
								<option value='1'>Public</option>
								<option value='2'>Private</option>
							</select>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" >Topic</label>
							<select name='topic' class="form-control form-control-lg col-md-9"id="Privacy">
								<option value='topic1'>Topic 1</option>
								<option value='topic2'>Topic 2</option>
							</select>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" for="uploaded_name">Category</label>
							<select name='category' class="form-control form-control-lg col-md-9" id="Privacy">
								<option value='Category 1'>Category 1</option>
								<option value='Category 2'>Category 2</option>
							</select>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" >Sub Topic</label>
							<select name='sub_topic' class="form-control form-control-lg col-md-9"id="Privacy">
								<option name='sub topic 1'>Sub Topic 1</option>
								<option name='sub topic 2'>Sub Topic 2</option>
							</select>
						</div>
						<div class="row from_control">
							<label class="col-md-3 lable_text" >Tag</label>
							<select name='tag' class="form-control form-control-lg col-md-9"id="Privacy">
								<option value='tag1'>Tag 1</option>
								<option value='tag2'>Tag 2</option>
							</select>
						</div>
						<div  class="row from_control">
							<label class="col-md-3 lable_text" >Details</label>
							<textarea class="form-control  form-control-lg col-md-9" name="description" placeholder="Write your message here" rows="4" data-form-field="Message"></textarea>
						</div>
						<div class="testi_submit_conatiner">
							<button type="submit" class="btn btn-primary rsgister_now_btn">
								Create Now
							</button>
						</div>
					</form>
				</div>
			</div>
    </main>
@endsection
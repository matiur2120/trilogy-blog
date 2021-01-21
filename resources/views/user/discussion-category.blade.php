@extends('layouts.user_master')

@section('content')
<div class="research_person_info box_shadow">
					<div class="bord_icon">
						<img src="{{asset('fontend')}}/img/dashboard.png" alt="" />
						<p class="color_text_25">Dashboard</p>
					</div>
					<p class="color_text_22">Moderator</p>
					<div class="bord_icon">
						<img src="{{asset('fontend')}}/img/Group1.png" alt="" />
						<p class="color_text_23">Member Controller</p>
					</div>
					<div class="avater_name">
						<div class="avater">
							<img src="{{asset('fontend')}}/img/Ellipse23w.png" alt="" />
						</div>
						<p class="color_text_24"><span>Welcome</span> Mike Dawson</p>
					</div>
				</div>
				<div
					class="midddle_content middle_contnet_member"
					id="middle_scrollbar"
				>
					<!-- Single box content start -->
					<div class="single_category_discussion_container box_shadow">
						<div class="single_category_discussion_header">
							<div class="single_category_discussion_header_text">
								<h2>Create Discussion Category</h2>
							</div>

							<div class="cross_icon">
								<a href="#"> <img src="{{asset('fontend')}}/img/Group1339.png" alt="" /></a>
							</div>
						</div>
						<div class="form_conatiner">
							<form method="POST"  action="{{route('add.discussion-category')}}">
                @csrf
								<div class="form-group">
									<label for="descusion_category"
										>Write Discussion Category Full Name</label
									>
									<input
                    name="full_name"
										required
										type="text"
										class="form-control"
										id="descusion_category"
										aria-describedby="emailHelp"
										placeholder="Write discussion category full name here"
									/>
								</div>
								<div class="form-group">
									<label for="descusion_abbr"
										>Write Discussion Category Short/abbreviation Name</label
									>
									<input
                    name="short_name"
										required
										type="text"
										class="form-control"
										id="descusion_abbr"
										aria-describedby="emailHelp"
										placeholder="Write discussion Category short/abbreviation name here"
									/>
								</div>
								<div class="form-group">
									<label for="select11">Select Group</label>
									<select name="group_id" class="form-control" id="select11">
										<option>Gropu</option>
										<option value="1">Gropu one</option>
										<option value="2">Gropu two</option>
									</select>
								</div>
								<div class="button_container">
									<button type="submit" class="btn btn-primary create_button">Create</button>
								</div>
							</form>
						</div>
					</div>
					<div class="single_category_discussion_container box_shadow">
						<div class="single_category_discussion_header">
							<div class="single_category_discussion_header_text">
								<h2>Create Discussion Subcategory</h2>
							</div>

							<div class="cross_icon">
								<a href="#"> <img src="{{asset('fontend')}}/img/Group1339.png" alt="" /></a>
							</div>
						</div>
						<div class="form_conatiner">
							<form method="POST" action="{{route('add.discussion-category')}}">
                @csrf
								<div class="form-group">
									<label for="descusion_category"
										>Write Discussion Subcategory Full Name</label
									>
									<input
                    name="full_name"
										required
										type="text"
										class="form-control"
										id="descusion_category"
										aria-describedby="emailHelp"
										placeholder="Write discussion subcategory full name here"
									/>
								</div>
								<div class="form-group">
									<label for="descusion_abbr"
										>Write Discussion subcategory Short/abbreviation Name</label
									>
									<input
                    name="short_name"
										required
										type="text"
										class="form-control"
										id="descusion_abbr"
										aria-describedby="emailHelp"
										placeholder="Write discussion subcategory short/abbreviation name here"
									/>
								</div>

								<div class="select_container row">
									<div class="form-group col-6">
										<label for="select11">Select Group</label>
										<select name="group_id" class="form-control" id="select11">
											<option>Gropu</option>
											<option value="1">Gropu one</option>
											<option value="2">Gropu two</option>
										</select>
									</div>
									<div class="form-group col-6">
										<label for="select11">Select Category</label>
										<select name="category_id" class="form-control" id="select11">
											<option>Category</option>
											<option value="1">Category one</option>
											<option value="2">Category two</option>
										</select>
									</div>
								</div>
								<div class="button_container">
									<button type="submit" class="btn btn-primary create_button">Create</button>
								</div>
							</form>
						</div>
					</div>
					<div class="single_category_discussion_container box_shadow">
						<div class="single_category_discussion_header">
							<div class="single_category_discussion_header_text">
								<h2>Create Discussion Subcategory Child</h2>
							</div>

							<div class="cross_icon">
								<a href="#"> <img src="{{asset('fontend')}}/img/Group1339.png" alt="" /></a>
							</div>
						</div>
						<div class="form_conatiner">
							<form method="POST" action="{{route('add.discussion-category')}}">
                @csrf
								<div class="form-group">
									<label for="descusion_category"
										>Write Discussion Subcategory Child Full Name</label
									>
									<input
                    name="full_name"
										required
										type="text"
										class="form-control"
										id="descusion_category"
										aria-describedby="emailHelp"
										placeholder="Write discussion subcategory child full name here"
									/>
								</div>
								<div class="form-group">
									<label for="descusion_abbr"
										>Write Discussion Subcategory Child Short/abbreviation
										Name</label
									>
									<input
                    name="short_name"
										required
										type="text"
										class="form-control"
										id="descusion_abbr"
										aria-describedby="emailHelp"
										placeholder="Write discussion subcategory child short/abbreviation name here"
									/>
								</div>

								<div class="select_container row">
									<div class="form-group col-6">
										<label for="select11">Select Group</label>
										<select name="group_id" class="form-control" id="select11">
											<option>Gropu</option>
											<option value="1">Gropu one</option>
											<option value="2">Gropu two</option>
										</select>
									</div>
									<div class="form-group col-6">
										<label for="select11">Select Category</label>
										<select name="category_id" class="form-control" id="select11">
											<option>Category</option>
											<option value="1">Category one</option>
											<option value="2">Category two</option>
										</select>
									</div>
								</div>
								<div class="subcategroy_child row">
									<div class="col-6"></div>
									<div class="form-group col-6">
										<label for="select11">Select Subcategory</label>
										<select name="sub_category_id" class="form-control" id="select11">
											<option>Subcategory</option>
											<option value="1">Subcategory one</option>
											<option value="2">Subcategory two</option>
										</select>
									</div>
								</div>
								<div class="button_container">
									<button type="submit" class="btn btn-primary create_button">Create</button>
								</div>
							</form>
						</div>
					</div>
					<div class="maging_200"></div>
					<!-- Single box content end -->
				</div>
@endsection
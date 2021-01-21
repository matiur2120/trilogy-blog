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
					<div class="card_container row">
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Last Viewed</h6>
									<img src="{{asset('fontend')}}/img/last_viewed.png" alt="" />
								</div>
								<div class="card_content">
									<p>31/November/2020</p>
									<p>11:56:43 p.m.</p>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Profile</h6>
									<img src="{{asset('fontend')}}/img/profile.png" alt="" />
								</div>
								<div class="card_content">
									<p>Created</p>
									<p>12-2021</p>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Admin</h6>
									<img src="{{asset('fontend')}}/img/admin.png" alt="" />
								</div>
								<div class="card_content">
									<p>Member Controller</p>
									<p>Post Controller</p>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Saved Group/s</h6>
									<img src="{{asset('fontend')}}/img/groups.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Group</p>
										<p>2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Enrolled Training</h6>
									<img src="{{asset('fontend')}}/img/groups.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Enrolled</p>
										<p>2</p>
									</div>
									<div class="card_sub_content">
										<p>Completed</p>
										<p>0</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Payment Card</h6>
									<img src="{{asset('fontend')}}/img/Group860.png" alt="" />
								</div>
								<div class="card_content visa_card_content">
									<div class="visa_card_sub_content">
										<p>VISA</p>
										<p>Exp: 12-2025</p>
									</div>
									<img src="{{asset('fontend')}}/img/visa_card.png" alt="" />
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Volunteer Work</h6>
									<img src="{{asset('fontend')}}/img/voluntree_works.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Work</p>
										<p>2</p>
									</div>
								</div>
							</div>
						</div>

						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Training</h6>
									<img src="{{asset('fontend')}}/img/Group657.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Training</p>
										<p>2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Test</h6>
									<img src="{{asset('fontend')}}/img/Group659.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Test</p>
										<p>2</p>
									</div>
									<div class="card_sub_content">
										<p>Total Attended</p>
										<p>13</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Taags</h6>
									<img src="{{asset('fontend')}}/img/Group526.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Tags</p>
										<p>2</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Research Papers</h6>
									<img src="{{asset('fontend')}}/img/research_paper.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Papers</p>
										<p>2</p>
									</div>
									<div class="card_sub_content">
										<p>Total Viewed</p>
										<p>13</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Upcoming Events</h6>
									<img src="{{asset('fontend')}}/img/upcomming_event.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Events</p>
										<p>2</p>
									</div>
									<div class="card_sub_content">
										<p>Registered</p>
										<p>13</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_left">
								<div class="card_header">
									<h6>Help</h6>
									<img src="{{asset('fontend')}}/img/help.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Help Requsted</p>
										<p>12</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single_card_container col-md-6">
							<div class="card_item_container card_item_right">
								<div class="card_header">
									<h6>Feedback</h6>
									<img src="{{asset('fontend')}}/img/feedback.png" alt="" />
								</div>
								<div class="card_content">
									<div class="card_sub_content">
										<p>Total Feedback</p>
										<p>12</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="maging_200"></div>
					<!-- Single box content end -->
				</div>
@endsection
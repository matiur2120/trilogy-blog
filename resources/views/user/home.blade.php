@extends('layouts.user_master')

@section('content')
<div class="research_person_info box_shadow">
					<div class="avater_name">
						<div class="avater">
							<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
						</div>
						<p>Mike Dawson</p>
					</div>
					<div class="research_person_designation">
						<img
							style="width: 15px; height: 15px"
							src="{{asset('fontend')}}/img/Group599.png"
							alt=""
						/>
						<p>Research Manger</p>
					</div>
					<p class="review">1040 <span>reviews</span></p>
					<p class="card_reating">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star default"></i>
						<span class="rating">4.8</span>
					</p>
				</div>
				<div class="midddle_content" id="middle_scrollbar">
					<div class="rsearch_content_container">
						<div class="research_content_head box_shadow">
							<h2>Patch-based Deep Learning</h2>
							<div class="suggest_post_f research_head">
								<p>
									<img src="{{asset('fontend')}}/img/discuss.png" alt="" />Discussion:
									<span>20</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/ask1.png" alt="" /> Asked:
									<span>40</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/share.png" alt="" />Share:
									<span>50</span>
								</p>
							</div>
						</div>
						<div class="research_content_rate_discussion box_shadow">
							<div class="discussion_left">
								<p>Rate Disscussion</p>
								<p class="card_reating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star default"></i>
									<span class="rating">4.8</span>
								</p>
							</div>
							<div class="discussion_right">
								<div class="suggest_post_f research_head">
									<p>
										<img src="{{asset('fontend')}}/img/Group527.png" alt="" />Agree:
										<span>10%</span>
									</p>
									<p>
										<img src="{{asset('fontend')}}/img/Group570.png" alt="" /> Disagree:
										<span>20%</span>
									</p>
								</div>
							</div>
						</div>
						<div class="research_content_wrapper">
							<div class="research_content box_shadow">
								<div class="research_content_img">
									<img src="{{asset('fontend')}}/img/MaskGroup40@2x.png" alt="" />
								</div>
								<p>
									A patch-based deep neural network model is proposed by the
									authors, which can be trained on a small or limited dataset
									but with high performance. The authors first investigated
									various imaging features of CXR, such as lung area intensity
									distribution and cardiothoracic ratio. The investigation
									demonstrates that there are significant differences among the
									patch wise intensity distribution. Therefore, based on these
									findings, a novel patch-based deep neural network is proposed,
									and final classification results are obtained through majority
									voting from inference results. Since the patch training is
									included
								</p>
							</div>
							<div class="content_footer box_shadow">
								<div class="content_footer_left">
									<div class="suggest_post_f research_head">
										<p class="content_footer_item">
											Agree:
											<a href="#"
												><img src="{{asset('fontend')}}/img/Group527.png" alt=""
											/></a>
										</p>
										<p class="content_footer_unlike">
											Disagree:
											<a href=""
												><img src="{{asset('fontend')}}/img/Group570.png" alt=""
											/></a>
										</p>
										<p class="vote"><a style="color: red" href="#">Vote</a></p>
									</div>
								</div>
								<div class="suggest_post_f research_head">
									<p>
										Ask Question
										<a href="#"><img src="{{asset('fontend')}}/img/ask1.png" alt="" /></a>
									</p>
									<p>
										Discuss it
										<a href="#"><img src="{{asset('fontend')}}/img/discuss.png" alt="" /></a>
									</p>

									<p>
										Share
										<a href="#"><img src="{{asset('fontend')}}/img/share.png" alt="" /></a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Single sub content item Start -->
					<div class="rsearch_content_container">
						<div class="research_content_head box_shadow">
							<h2 class="sub_content_head">CRX:</h2>
							<div class="suggest_post_f research_head">
								<p>
									<img src="{{asset('fontend')}}/img/discuss.png" alt="" />Discussion:
									<span>20</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/ask1.png" alt="" /> Asked:
									<span>40</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/share.png" alt="" />Share:
									<span>50</span>
								</p>
							</div>
						</div>
						<div class="research_person_info margin_top box_shadow">
							<div class="avater_name">
								<div class="avater">
									<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
								</div>
								<p>Mike Dawson</p>
							</div>
							<div class="research_person_designation">
								<img
									style="width: 15px; height: 15px"
									src="{{asset('fontend')}}/img/Group599.png"
									alt=""
								/>
								<p>Research Manger</p>
							</div>
							<p class="review">1040 <span>reviews</span></p>
							<p class="card_reating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star default"></i>
								<span class="rating">4.8</span>
							</p>
						</div>

						<div class="research_content_wrapper">
							<div class="research_content box_shadow">
								<div class="research_content_img">
									<img src="{{asset('fontend')}}/img/MaskGroup40@2x.png" alt="" />
								</div>
								<p>
									A patch-based deep neural network model is proposed by the
									authors, which can be trained on a small or limited dataset
									but with high performance. The authors first investigated
									various imaging features of CXR, such as lung area intensity
									distribution and cardiothoracic ratio. The investigation
									demonstrates that there are significant differences among the
									patch wise intensity distribution. Therefore, based on these
									findings, a novel patch-based deep neural network is proposed,
									and final classification results are obtained through majority
									voting from inference results. Since the patch training is
									included
								</p>
							</div>
							<div class="content_footer box_shadow">
								<div class="content_footer_left">
									<div class="suggest_post_f research_head">
										<p class="content_footer_item">
											Agree:
											<a href="#"
												><img src="{{asset('fontend')}}/img/Group527.png" alt=""
											/></a>
										</p>
										<p class="content_footer_unlike">
											Disagree:
											<a href=""
												><img src="{{asset('fontend')}}/img/Group570.png" alt=""
											/></a>
										</p>
										<p class="vote"><a style="color: red" href="#">Vote</a></p>
									</div>
								</div>
								<div class="suggest_post_f research_head">
									<p>
										Ask Question
										<a href="#"><img src="{{asset('fontend')}}/img/ask1.png" alt="" /></a>
									</p>
									<p>
										Discuss it
										<a href="#"><img src="{{asset('fontend')}}/img/discuss.png" alt="" /></a>
									</p>

									<p>
										Share
										<a href="#"><img src="{{asset('fontend')}}/img/share.png" alt="" /></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="rsearch_content_container">
						<div class="research_content_head box_shadow">
							<h2 class="sub_content_head">Neural Network:</h2>
							<div class="suggest_post_f research_head">
								<p>
									<img src="{{asset('fontend')}}/img/discuss.png" alt="" />Discussion:
									<span>20</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/ask1.png" alt="" /> Asked:
									<span>40</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/share.png" alt="" />Share:
									<span>50</span>
								</p>
							</div>
						</div>
						<div class="research_person_info margin_top box_shadow">
							<div class="avater_name">
								<div class="avater">
									<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
								</div>
								<p>Mike Dawson</p>
							</div>
							<div class="research_person_designation">
								<img
									style="width: 15px; height: 15px"
									src="{{asset('fontend')}}/img/Group599.png"
									alt=""
								/>
								<p>Research Manger</p>
							</div>
							<p class="review">1040 <span>reviews</span></p>
							<p class="card_reating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star default"></i>
								<span class="rating">4.8</span>
							</p>
						</div>

						<div class="research_content_wrapper">
							<div class="research_content box_shadow">
								<div class="research_content_img">
									<img src="{{asset('fontend')}}/img/MaskGroup40@2x.png" alt="" />
								</div>
								<p>
									A patch-based deep neural network model is proposed by the
									authors, which can be trained on a small or limited dataset
									but with high performance. The authors first investigated
									various imaging features of CXR, such as lung area intensity
									distribution and cardiothoracic ratio. The investigation
									demonstrates that there are significant differences among the
									patch wise intensity distribution. Therefore, based on these
									findings, a novel patch-based deep neural network is proposed,
									and final classification results are obtained through majority
									voting from inference results. Since the patch training is
									included
								</p>
							</div>
							<div class="content_footer box_shadow">
								<div class="content_footer_left">
									<div class="suggest_post_f research_head">
										<p class="content_footer_item">
											Agree:
											<a href="#"
												><img src="{{asset('fontend')}}/img/Group527.png" alt=""
											/></a>
										</p>
										<p class="content_footer_unlike">
											Disagree:
											<a href=""
												><img src="{{asset('fontend')}}/img/Group570.png" alt=""
											/></a>
										</p>
										<p class="vote"><a style="color: red" href="#">Vote</a></p>
									</div>
								</div>
								<div class="suggest_post_f research_head">
									<p>
										Ask Question
										<a href="#"><img src="{{asset('fontend')}}/img/ask1.png" alt="" /></a>
									</p>
									<p>
										Discuss it
										<a href="#"><img src="{{asset('fontend')}}/img/discuss.png" alt="" /></a>
									</p>

									<p>
										Share
										<a href="#"><img src="{{asset('fontend')}}/img/share.png" alt="" /></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="rsearch_content_container">
						<div class="research_content_head box_shadow">
							<h2 class="sub_content_head">Network Complexity:</h2>
							<div class="suggest_post_f research_head">
								<p>
									<img src="{{asset('fontend')}}/img/discuss.png" alt="" />Discussion:
									<span>20</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/ask1.png" alt="" /> Asked:
									<span>40</span>
								</p>
								<p>
									<img src="{{asset('fontend')}}/img/share.png" alt="" />Share:
									<span>50</span>
								</p>
							</div>
						</div>
						<div class="research_person_info margin_top box_shadow">
							<div class="avater_name">
								<div class="avater">
									<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
								</div>
								<p>Mike Dawson</p>
							</div>
							<div class="research_person_designation">
								<img
									style="width: 15px; height: 15px"
									src="{{asset('fontend')}}/img/Group599.png"
									alt=""
								/>
								<p>Research Manger</p>
							</div>
							<p class="review">1040 <span>reviews</span></p>
							<p class="card_reating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star default"></i>
								<span class="rating">4.8</span>
							</p>
						</div>

						<div class="research_content_wrapper">
							<div class="research_content box_shadow">
								<div class="research_content_img">
									<img src="{{asset('fontend')}}/img/MaskGroup40@2x.png" alt="" />
								</div>
								<p>
									A patch-based deep neural network model is proposed by the
									authors, which can be trained on a small or limited dataset
									but with high performance. The authors first investigated
									various imaging features of CXR, such as lung area intensity
									distribution and cardiothoracic ratio. The investigation
									demonstrates that there are significant differences among the
									patch wise intensity distribution. Therefore, based on these
									findings, a novel patch-based deep neural network is proposed,
									and final classification results are obtained through majority
									voting from inference results. Since the patch training is
									included
								</p>
							</div>
							<div class="content_footer box_shadow">
								<div class="content_footer_left">
									<div class="suggest_post_f research_head">
										<p class="content_footer_item">
											Agree:
											<a href="#"
												><img src="{{asset('fontend')}}/img/Group527.png" alt=""
											/></a>
										</p>
										<p class="content_footer_unlike">
											Disagree:
											<a href=""
												><img src="{{asset('fontend')}}/img/Group570.png" alt=""
											/></a>
										</p>
										<p class="vote"><a style="color: red" href="#">Vote</a></p>
									</div>
								</div>
								<div class="suggest_post_f research_head">
									<p>
										Ask Question
										<a href="#"><img src="{{asset('fontend')}}/img/ask1.png" alt="" /></a>
									</p>
									<p>
										Discuss it
										<a href="#"><img src="{{asset('fontend')}}/img/discuss.png" alt="" /></a>
									</p>

									<p>
										Share
										<a href="#"><img src="{{asset('fontend')}}/img/share.png" alt="" /></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection


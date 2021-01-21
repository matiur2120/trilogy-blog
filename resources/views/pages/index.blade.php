@extends('layouts.trilogy_home_master')
      <!--====== Header End   ======-->
      @section('content')
      <section class="section-padding content-top-space">
         <div class="container">
            <div class="section-heading text-center">
               <h2>
                  TRILOGY
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span> 
               </h2>
            </div>
         </div>
   <!-- @php($i = 1)
   @foreach($trilogyGroup as $group)
   <h2>This is me</h2>
   @endforeach -->
         <div class="trilogy-banner"> 
            <img src="{{asset('trilogy-home')}}/img/trilogy/trilogybanner.png" alt="">
         </div>
            
      </section>

      <!-- About trilogy -->
      <section class="section-padding" id="about-trilogy">
         <div class="container">
            <div class="section-heading text-center">
               <h2>
                  ABOUT TRILOGY
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span> 
               </h2>
            </div>
            <div class="row"> 
               <div class="col-md-10 offset-md-1"> 
                  <div class="about-trilogy"> 
                     <p>Tri is proud to deliver one of the most attractive pay and benefits packages in both the United Kingdom and Bangladesh. The company provides a wide variety of health and wellness programs to its staff, including medical, dental, vision, life insurance, disability insurance, and flexible expense plans for healthcare. Additional benefits include paid maternity leave, a retirement package, and paid holidays. The organisation also offers onsite and virtual training and continuing education and a full range of health benefits to achieve the perfect balance between success and satisfaction.</p>
                     <p class="py-4">A person based in Bangladesh and the UK will get the highest priority to apply for a position. Nonetheless, anyone from any part of the world can work as a work-based learner, trainee, and intern or full-time job. We provide the best career growth opportunity for any of our employees, whether they have a little or vast experience. We support our employees by giving industry-standard training and learning environments to make them work efficiently.</p>
                     <p>Our priority is to take care of those who have not yet finished their bachelor studies, especially those who are at the college or university level and need industry experience to get a dream job. Our paid (scholarship) and self-paid (paid by the candidate) intern, work-based learning facility will build your knowledge and boost confidence level. After completing your training, you will be able to work for any international standard company in Bangladesh and abroad. These courses are varied from three months to a year based on your knowledge and experience.</p>
                  </div>

               </div>   
            </div>
         </div>
      </section>
      <!-- About trilogy -->
      <section class="section-padding">   
         <div class="container"> 
            <div class="row"> 
               <div class="col-md-10 offset-md-1"> 
                  <div class="search-key text-center">
                     <div class="ui-group">
                        <h3><img src="{{asset('trilogy-home')}}/img/ballot.png" alt="" class="mr-2"> Select Your Category</h3>
                        <select class="mr-5">
                           <option value="">Select Your Profession</option>
                           <option value=".science">science</option>
                           <option value=".wide">wide</option>
                           <option value=".big">big</option>
                           <option value=".tall">tall</option>
                        </select>
                        <input type="search" id="gsearch" name="gsearch" placeholder="Keyword Search…"aa>
                        <a href="#" class="search-btn">Search</a>
                        <span> </span>
                     </div>
                     <!-- <div> 
                        <form >
                          <input type="search" id="gsearch" name="gsearch" placeholder="Keyword Search…">
                          <input type="submit">
                       </form>  
                    </div> -->
                     
                  </div>
               </div>    
               <div class="col-md-8 offset-md-2">
                  <div class="health">
                     <div>
                        <h4>'health' 4 results found</h4>
                     </div>
                     <ol class="custom-counter">
                        <li>
                           <a href="#">'health' in 'About Us'</a>
                           <p> We have started various research in behavioral computer sciences; technology,
                              <a href="#"> health</a>     
                              health informatics education and community research.....Currently, we are developing World 
                              <a href=" "> Health</a> AID
                           </p>        
                        </li>
                        <li>
                           <a href="#">'health' in 'Collaborators'</a>
                           <p> We have started various research in behavioral computer sciences; technology,
                              <a href="#"> health</a>     
                              health informatics education and community research.....Currently, we are developing World 
                              <a href=" "> Health</a> AID
                           </p>        
                        </li>
                        <li>
                           <a href="#">'health' in 'Services'</a>
                           <p> We have started various research in behavioral computer sciences; technology,
                              <a href="#"> health</a>     
                              health informatics education and community research.....Currently, we are developing World 
                              <a href=" "> Health</a> AID
                           </p>        
                        </li>
                        <li>
                           <a href="#">'health' in 'Research Works'</a>
                           <p> We have started various research in behavioral computer sciences; technology,
                              <a href="#"> health</a>     
                              health informatics education and community research.....Currently, we are developing World 
                              <a href=" "> Health</a> AID
                           </p>        
                        </li>
                        <li>
                           <a href="#">'health' in 'Research Works'</a>
                           <p> We have started various research in behavioral computer sciences; technology,
                              <a href="#"> health</a>     
                              health informatics education and community research.....Currently, we are developing World 
                              <a href=" "> Health</a> AID
                           </p>        
                        </li>

                     </ol>
                  </div>  
               </div>                 
            </div>
         </div>
      </section>
   

      <section class="section-padding">
         <div class="container">
            <div class="section-heading text-center">
               <h2>
                  OUR GROUPS
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span> 
               </h2>
            </div>
         </div>
      </section>
      <section class="container">
         <div class="filters" id="group">
            <div class="button-group filter-button-group">
              <button data-filter="*">All Job</button>
           </div>
            <div class="ui-group">
               
               <select class="filter-select" value-group="size">
                  <option value=".bd">Bangladesh</option>
                  <option value=".uk">Uk</option>
               </select>
            
            </div>
            <div class="button-group filter-button-group">
             <button data-filter=".department">Department</button>
          </div>
         </div>
         <div class="grid grid-item covid row text-center">
            @foreach($trilogyGroup as $group)
               <div class="col-md-4 color-shape bd department">
                  <div class="training--item box_shadow">
                     <img src="{{asset('trilogy-home')}}/img/trilogy/covid.png" alt="aboutslider" class="covid-img">
                     <div class="trainings-content">
                        <div class="trainings-title">
                           <h3>{{$group->name}}
                           </h3>
                           <div class="covid-details">
                              <img src="{{asset('trilogy-home')}}/img/trilogy/date.png" alt="aboutslider">
                              <h5>Open: 29 days</h5>
                           </div>
                           <div class="covid-details">
                              <img src="{{asset('trilogy-home')}}/img/trilogy/member.png" alt="aboutslider">
                              <h5>Members: 300</h5>
                           </div>
                           <div class="covid-details">
                              <img src="{{asset('trilogy-home')}}/img/trilogy/discus.png" alt="aboutslider">
                              <h5>Discussion: 1234</h5>
                           </div>
                           <div class="covid-details">
                              <img src="{{asset('trilogy-home')}}/img/trilogy/categories.png" alt="aboutslider">
                              <h5>Categories: 06</h5>
                           </div>
                              <a href="{{ route('register') }}" class="btn trainings-btn">Join In</a>
                        </div>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
      </section>

      <section id="trainings" class="section-padding content-bottom-space">
         <div class="container">
            <div class="section-heading text-center">
               <h2>
                  Trainings
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span> 
               </h2>
            </div>
            <div class="row justify-content-center" id="training-group">
               <div class="col-md-10">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="trainings-carousel owl-carousel owl-theme text-center">
                           <div class="trainings-item box_shadow">
                              <div class="circle-ball text-center">
                              </div>
                              <div class="instructor-img">
                                 <img src="{{asset('trilogy-home')}}/img/trilogy/cv.png" alt="aboutslider">
                              </div>

                              <div class="trainings-content">
                                 <div class="trainings-title">
                                    <h3>CV Clinic
                                    </h3>
                                    <div class="instructor-discribe">
                                       <div>
                                          <h4>Instructor :</h4>
                                       </div>
                                       <div class="text-center">
                                          <img src="{{asset('trilogy-home')}}/img/trilogy/mike2.png" alt="aboutslider"> 
                                          <h4>Lester Rhodes</h4>
                                       </div>
                                    </div>
                                    <div>
                                       <p>Starting Date: 2020-12-21</p>
                                       <p>Ending Date: 2020-12-21</p>
                                    </div>
                                    <a href="#" class="btn trainings-btn ">View Details</a>
                                 </div>
                              </div>
                           </div>
                           <div class="trainings-item box_shadow">
                              <div class="circle-ball text-center">
                              </div>
                              <div class="instructor-img">
                                 <img src="{{asset('trilogy-home')}}/img/trilogy/workbased.png" alt="aboutslider">
                              </div>

                              <div class="trainings-content">
                                 <div class="trainings-title">
                                    <h3>CV Clinic
                                    </h3>
                                    <div class="instructor-discribe">
                                       <div>
                                          <h4>Instructor :</h4>
                                       </div>
                                       <div class="text-center">
                                          <img src="{{asset('trilogy-home')}}/img/trilogy/mike2.png" alt="aboutslider"> 
                                          <h4>Lester Rhodes</h4>
                                       </div>
                                    </div>
                                    <div>
                                       <p>Starting Date: 2020-12-21</p>
                                       <p>Ending Date: 2020-12-21</p>
                                    </div>
                                    <a href="#" class="btn trainings-btn ">View Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>   

                     </div>
                     <div class="col-md-3 text-center men-img">
                        <img src="{{asset('trilogy-home')}}/img/trilogy/men.png" alt="aboutslider"> 
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>

      @endsection
      <!--====== Footer Start ======-->
   
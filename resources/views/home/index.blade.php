@extends('layouts.app')
@section('content')
    <section>
        <div class="lgx-banner lgx-banner12">
          <div class="lgx-banner-style">
            <div class="lgx-inner lgx-inner-fixed">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="lgx-banner-info lgx-banner-info-center">
                      <!--lgx-banner-info-center lgx-banner-info-black lgx-banner-info-big lgx-banner-info-bg-->
                      <h3 class="subtitle">INNOV8</h3>
                      <h2 class="title"><span id="lgx-typed-string">Bihar Startup Connect</span></h2>
                      <h3 class="location location-text"><i class="fa fa-map-marker"></i> Gyan Bhawan, Bihar, Patna</h3>
                      <h3 class="date date-text"><i class="fa fa-calendar"></i> To Be Announced</h3>
                      <div class="action-area">
                        <div class="lgx-video-area">
                          <a class="lgx-btn lgx-btn-red register-button" href="register.html">Register</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--//.ROW-->
              </div>
              <!-- //.CONTAINER -->
            </div>
            <!-- //.INNER -->
          </div>
        </div>
      </section>
      <!--BANNER END-->

      <!--countdown-->
      <section>
        <div id="lgx-countdowns" class="lgx-countdowns lgx-countdowns4">
          <!--lgx-countdowns3 lgx-countdowns4-->
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="circular-countdown-area">
                    <div id="circular-countdown" data-date="2024-11-01 00:00:00"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //.CONTAINER -->
          </div>
          <!-- //.INNER -->
        </div>
      </section>
      <!--countdown END-->

      <!--ABOUT-->
      <section>
        <div id="lgx-about" class="lgx-about lgx-about2">
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-md-offset-5 col-sm-12 col-md-7">
                  <div class="lgx-about-content-area">
                    <div class="lgx-heading">
                      <h2 class="heading">Bihar Startup Connect 2024</h2>
                      <!-- <h3 class="subheading">Why Happy New Year 2021 ?</h3> -->
                    </div>
                    <div class="lgx-about-content">
                      <p class="text">Bihar Startup Connect 2024 is a premier event that brings together the brightest minds, innovators, and entrepreneurs from across Bihar and beyond. This dynamic platform is designed to showcase the thriving startup ecosystem in Bihar, providing a space for entrepreneurs, investors, industry experts, and policymakers to connect, collaborate, and grow together.</p>
                      <div class="section-btn-area">
                        <a class="lgx-btn" href="#lgx-schedule">Schedule</a>
                        <a class="lgx-btn lgx-btn-red lgx-scroll" href="register.html">Register Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- //.CONTAINER -->
          </div>
          <!-- //.INNER -->
        </div>
      </section>
      <!--ABOUT END-->

      <!--SPEAKERS-->
      <section>
        <div id="lgx-speakers" class="lgx-speakers">
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-heading">
                    <h2 class="heading">Our Speaker</h2>
                    <h3 class="subheading">Welcome to the dedicated to building remarkable Speakers!</h3>
                  </div>
                </div>
              </div>
              <!--//.ROW-->
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="lgx-single-speaker lgx-single-speaker-circle">
                    <figure>
                      <a class="profile-img" href="speakers.html"><img src="{{asset('fe/assets/img/speakers/prakhar kuamr singh.jpg')}}" alt="speaker" /></a>
                      <figcaption>
                        <div class="social-group">
                          <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                          <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                          <h3 class="title"><a href="speaker.html">Prakhar Kumar Singh</a></h3>
                          <h4 class="subtitle">Main Speaker</h4>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="lgx-single-speaker lgx-single-speaker-circle">
                    <figure>
                      <a class="profile-img" href="speakers.html"><img src="{{asset('fe/assets/img/speakers/speaker2.jpg')}}" alt="speaker" /></a>
                      <figcaption>
                        <div class="social-group">
                          <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                          <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                          <h3 class="title"><a href="speaker.html">Jonathon Doe</a></h3>
                          <h4 class="subtitle">Ceo of LogicHunt</h4>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="lgx-single-speaker lgx-single-speaker-circle">
                    <figure>
                      <a class="profile-img" href="speakers.html"><img src="{{asset('fe/assets/img/speakers/speaker3.jpg')}}" alt="speaker" /></a>
                      <figcaption>
                        <div class="social-group">
                          <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                          <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                          <h3 class="title"><a href="speaker.html">Jonathon Doe</a></h3>
                          <h4 class="subtitle">Ceo of LogicHunt</h4>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="lgx-single-speaker lgx-single-speaker-circle">
                    <figure>
                      <a class="profile-img" href="speakers.html"><img src="{{asset('fe/assets/img/speakers/speaker4.jpg')}}" alt="speaker" /></a>
                      <figcaption>
                        <div class="social-group">
                          <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                          <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                          <h3 class="title"><a href="speaker.html">Jonathon Doe</a></h3>
                          <h4 class="subtitle">Ceo of LogicHunt</h4>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="lgx-single-speaker lgx-single-speaker-circle">
                    <figure>
                      <a class="profile-img" href="speakers.html"><img src="{{asset('fe/assets/img/speakers/speaker5.jpg')}}" alt="speaker" /></a>
                      <figcaption>
                        <div class="social-group">
                          <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                          <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                          <h3 class="title"><a href="speaker.html">Jonathon Doe</a></h3>
                          <h4 class="subtitle">Ceo of LogicHunt</h4>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="lgx-single-speaker lgx-single-speaker-circle">
                    <figure>
                      <a class="profile-img" href="speakers.html"><img src="{{asset('fe/assets/img/speakers/speaker6.jpg')}}" alt="speaker" /></a>
                      <figcaption>
                        <div class="social-group">
                          <a class="sp-tw" href="#"><i class="fa fa-twitter"></i></a>
                          <a class="sp-fb" href="#"><i class="fa fa-facebook"></i></a>
                          <a class="sp-insta" href="#"><i class="fa fa-instagram"></i></a>
                          <a class="sp-in" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="speaker-info">
                          <h3 class="title"><a href="speaker.html">Jonathon Doe</a></h3>
                          <h4 class="subtitle">Ceo of LogicHunt</h4>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <!--//.ROW-->
              <!-- <div class="section-btn-area">
                    <a class="lgx-btn lgx-btn-big" href="speakers.html">More Speakers</a>
                </div> -->
            </div>
            <!-- //.CONTAINER -->
          </div>
          <!-- //.INNER -->
        </div>
      </section>
      <!--SPEAKERS END-->

      <!--SCHEDULE-->
      <section>
        <div id="lgx-schedule" class="lgx-schedule">
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-heading lgx-heading-white">
                    <h2 class="heading">Event Schedule</h2>
                    <h3 class="subheading">Welcome to the dedicated to building remarkable Schedule!</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-tab">
                    <ul class="nav nav-pills lgx-nav">
                      <!--lgx-nav-nogap lgx-nav-colorful-->
                      <li class="active">
                        <a data-toggle="pill" href="#home"
                          ><h3>Day<span>1</span></h3>
                          <p><span>23 </span>Nov, 2024</p></a
                        >
                      </li>
                      <li>
                        <a data-toggle="pill" href="#menu1"
                          ><h3>Day <span>2</span></h3>
                          <p><span>24 </span>Nov, 2024</p></a
                        >
                      </li>
                      <!-- <li><a data-toggle="pill" href="#menu2"><h3>Third <span>Day</span></h3> <p><span>29 </span>Nov, 2021</p></a></li>
                                <li><a data-toggle="pill" href="#menu3"><h3>Fourth <span>Day</span></h3> <p><span>30 </span>Dec, 2021</p></a></li> -->
                    </ul>
                    <div class="tab-content lgx-tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default lgx-panel">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="{{asset('fe/assets/img/schedule/startup.jpg')}}" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">10:30 <span>Am</span> - 11.30 <span>Am</span></h4>
                                      <h3 class="title">Inauguration Ceremony</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                      <ul>
                                        <li>
                                          10:30 <span>Am</span> - 10:35 <span>Am</span>
                                          <p>Welcome Address and Opening Remarks</p>
                                        </li>
                                        <li>
                                          10:35 <span>Am</span> - 10:40 <span>Am</span>
                                          <p>5 mins Documentary on Startup Bihar</p>
                                        </li>
                                        <li>
                                          10:40 <span>Am</span> - 10:45 <span>Am</span>
                                          <p>Address By Director Handloom & Sericulture - Context of the Event</p>
                                        </li>
                                        <li>
                                          10:45 <span>Am</span> - 10:47 <span>Am</span>
                                          <p>Coffee Table Book Launch</p>
                                        </li>
                                        <li>
                                          10:47<span>Am</span> - 10:53 <span>Am</span>
                                          <p>Experience Sharing By 2 SuccessfulL Startups</p>
                                        </li>
                                        <li>
                                          10:53 <span>Am</span> - 11:00 <span>Am</span>
                                          <p>MoU Exchnage (BIRAC, ISBA, TiE, IIM-CIP, NASSCOM, Patna Women Collage )</p>
                                        </li>
                                        <li>
                                          11:00 <span>Am</span> - 11:05 <span>Am</span>
                                          <p>Launch Of Extension Centers of IC-IITP</p>
                                        </li>
                                        <li>
                                          11:05 <span>Am</span> - 11:10 <span>Am</span>
                                          <p>Address By Shri. Alok Ranjan Ghosh, Director Industries</p>
                                        </li>
                                        <li>
                                          11:10<span>Am</span> - 11:15 <span>Am</span>
                                          <p>Address By Smt. Bandana Preyashi IAS, Secretary, DoI</p>
                                        </li>
                                        <li>
                                          11:15<span>Am</span>
                                          <p>Address By Cheif Guest</p>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="{{asset('fe/assets/img/schedule/startup.jpg')}}" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">11:25 <span>Am</span> - 11:45 <span>Am</span></h4>
                                      <h3 class="title">Product Launch (by 7 to 8 Startups)</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="{{asset('fe/assets/img/schedule/startup.jpg')}}" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">11:45 <span>Am</span> - 12:00 <span>Pm</span></h4>
                                      <h3 class="title">Tea Networking and walthrough of Startup Exhibition</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="{{asset('fe/assets/img/schedule/startup.jpg')}}" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">12:00 <span> Pm</span> - 1:30 <span>Pm</span></h4>
                                      <h3 class="title">Ideathon Finals</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Session by SIDBI</p>
                                          <span> Session on ‘How to mobilize SIDBI FoF for scaling startups in Bihar?’ </span>
                                          <span>Announcement of names of funded Startup through SIDBI FoF. </span>
                                        </li>
                                      </ul>
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Fire-side Chat</p>
                                          <span> How venture funds help scaling the startups and what attitude should one must carry to raise the fund </span>
                                          <h4 class="author-info">Chaired by <span>P.Sec/Sec Finance Department</span></h4>
                                          <h4 class="author-info">Moderated by - <span>Panelists </span>Rep. from SIDBI, VC firm, Bank, Angel Investor</h4>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="schedule-info">
                                      <!-- <h4 class="time">12:00 <span> Pm</span> - 1:30 <span>Pm</span></h4>
                                                                <h3 class="title">Ideathon Finals</h3> -->
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                      <ul style="margin-top: 7rem">
                                        <li>
                                          <p style="font-weight: 800">Startup Safari - (Powered by D2D Youthstory)</p>
                                          <h4 class="author-info">
                                            Panel Discussion : "Funding Your Startup Journey"
                                            <span>perspectives on funding strategies, investment criteria, and the fundraising landscape in India </span>
                                          </h4>
                                          <h4 class="author-info">
                                            Chaired by – Apurva Chamaria
                                            <span>Head of Startups & Venture Capital, Google India </span>
                                          </h4>
                                          <h4 class="author-info">
                                            Panelist -Gautam Kumar
                                            <span>Co-Founder & COO, FarEye </span>
                                          </h4>
                                          <h4 class="author-info">
                                            Tej Kapoor
                                            <span>Director & Partner ICICI Venture </span>
                                          </h4>
                                          <h4 class="author-info">
                                            Panelist:
                                            <span>Tarun Bhargava Angel investor & Co- Founder </span>
                                            <span>Capinity Partners</span>
                                          </h4>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">1:30 <span>Am</span> - 2:15 <span>Pm</span></h4>
                                      <h3 class="title">Lunch and Networking</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">2:15 <span>Am</span> - 3:15 <span>Pm</span></h4>
                                      <h3 class="title">Workshop on Product-Market Fit.</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Startup Safari - (Powered by D2D Youthstory)</p>
                                          <h4 class="author-info">
                                            Founders’ Matchmaking - Activities to find the right co-founder
                                            <!-- <span>perspectives on funding strategies, investment criteria, and the fundraising landscape in India </span> -->
                                          </h4>
                                          <h4 class="author-info">
                                            Panel discussion
                                            <span>Sustainable Incubation Business Model for Incubation centers & Startup Cells - </span>
                                            Dr. K. Suresh
                                          </h4>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">3:15 <span>Am</span> - 4:00 <span>Pm</span></h4>
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Bootcamp</p>
                                          <h4 class="author-info">Best practices for Startups in terms of product-market fit, financial regulations and other legal compliance.</h4>
                                        </li>
                                        <li>
                                          <p style="font-weight: 800">Keynote Session</p>
                                          <h4 class="author-info">Success stories of successful Startup in Bihar.</h4>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">3:15 <span>Am</span> - 4:00 <span>Pm</span></h4>
                                      <!-- <h3 class="title">Workshop on Product-Market Fit. </h3> -->
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Theme - Opportunities beyond Borders</p>
                                          <h4 class="author-info">Panel discussion on export opportunities for Startups in Bihar</h4>
                                        </li>
                                        <li>
                                          <p style="font-weight: 800"></p>
                                          <h4 class="author-info"><span>Chaired by -</span>Secretary, IT Department</h4>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">4:00 <span>Pm</span> - 4:45 <span>Pm</span></h4>
                                      <h3 class="title">Keynote session by a Celebrity Founder</h3>
                                      <!-- <h4 class="author-info">By <span>Riaz Sagar</span> , Logichunt Inc.</h4> -->
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="menu1" class="tab-pane fade">
                        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default lgx-panel">
                            <div class="panel-heading" role="tab" id="headingOne2">
                              <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">10:35 <span>Am</span> - 11.15 <span>Am</span></h4>
                                      <h3 class="title">Fireside Chat</h3>
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Theme</p>
                                          <span> Rebranding Strategies: When and How to Reinvent Your Brand </span>
                                          Chaired by
                                          <span>ACS, Education Department </span>
                                        </li>
                                      </ul>
                                      <ul>
                                        <li>
                                          <p style="font-weight: 800">Chaired by</p>
                                          <span>ACS, Education Department </span>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">11:15 <span>Am</span> - 11:45 <span>Am</span></h4>
                                      <h3 class="title">Panel discussions</h3>
                                      <ul>
                                        <li>
                                          Women in Business: The nextgen torch bearers of Entrepreneurship. h
                                          <h4 class="author-info">Chaired by <span>Secretary, Industry Department</span></h4>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">11:45 <span>Am</span> - 12:00 <span>Pm</span></h4>
                                      <h3 class="title">Tea and Networking</h3>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">12:00 <span>Pm</span> - 12:45 <span>Pm</span></h4>
                                      <h3 class="title">CEO Rountable</h3>
                                      <ul>
                                        <li>Top 15 Startups</li>
                                        <li>Govt. Representatives</li>
                                        <li>Incubation Heads</li>
                                        <li>Investors</li>
                                      </ul>
                                    </div>
                                    <div class="schedule-info">
                                      <h3 class="title" style="margin-top: 3.5rem">Panel Discussion</h3>
                                      <h4 class="author-info">Incubation Center - Startups Matchmaking (for Startup cells and Incubation centers) <span>Chaired by</span>Secretary DST</h4>
                                    </div>
                                    <div class="schedule-info">
                                      <!-- <h3 class="title"></h3> -->
                                      <h4 class="author-info" style="margin-top: 9rem">Mentors Matchmaking/ Session on Team Building <span>Chaired by</span>Secretary, Labour Department</h4>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">12:45 <span> Pm</span> - 1:45 <span>Pm</span></h4>
                                      <h3 class="title">Standup Comedy (Theme - Startups)</h3>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">1:45 <span> Pm</span> - 2:15 <span>Pm</span></h4>
                                      <h3 class="title">Lunch</h3>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">2:15 <span> Pm</span> - 3:15 <span>Pm</span></h4>
                                      <h3 class="title">Keynote by a Celebrity Founder</h3>
                                    </div>
                                  </div>
                                  <div class="lgx-single-schedule">
                                    <div class="author">
                                      <img src="assets/img/schedule/startup.jpg" alt="Speaker" />
                                    </div>
                                    <div class="schedule-info">
                                      <h4 class="time">3:15 <span> Pm</span> - 4:00<span>Pm</span></h4>
                                      <h3 class="title">Valedictory Ceremony</h3>
                                      <ul>
                                        <li>Ideation challenge winners</li>
                                        <li>Sidbi commitments</li>
                                        <li>Awards to Incubation center and Startup Cells</li>
                                        <li>Cheque distribution to Startups</li>
                                      </ul>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingTwo2">
                                                <div class="panel-title">
                                                    <a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">11:15 <span>Am</span> - 11:45 <span>Am</span></h4>
                                                                <h3 class="title">Panel discussions </h3>
                                                                <ul>
                                                                    <li>
                                                                        Women in Business: The nextgen torch bearers of Entrepreneurship.
                                                                        h
                                                                        <h4 class="author-info">Chaired by <span>Secretary, Industry Department</span></h4>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <div class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">11:45 <span>Am</span> - 12:00 <span>Pm</span></h4>
                                                                <h3 class="title">Tea and Networking</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <div class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">12:00 <span>Pm</span> - 12:45 <span>Pm</span></h4>
                                                                <h3 class="title">CEO Rountable</h3>
                                                                <ul>
                                                                    <li>Top 15 Startups</li>
                                                                    <li>Govt. Representatives</li>
                                                                    <li>Incubation Heads</li>
                                                                    <li>Investors</li>
                                                                </ul>
                                                            </div>
                                                            <div class="schedule-info" style="margin-top: 3rem;">
                                                                <h3 class="title">Panel Discussion</h3>
                                                                <h4 class="author-info">Incubation Center - Startups Matchmaking
                                                                    (for Startup cells and Incubation centers)
                                                                     <span>Chaired by</span>Secretary DST </h4>
                                                            </div>
                                                            <div class="schedule-info" style="margin-top: 9rem;">
                                                                <h3 class="title"></h3>
                                                                <h4 class="author-info">Mentors Matchmaking/ Session on Team Building
                                                                     <span>Chaired by</span>Secretary, Labour Department </h4>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <div class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">12:45 <span> Pm</span> - 1:45 <span>Pm</span></h4>
                                                                <h3 class="title">Standup Comedy (Theme - Startups) </h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <div class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">1:45 <span> Pm</span> - 2:15 <span>Pm</span></h4>
                                                                <h3 class="title">Lunch</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <div class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">2:15 <span> Pm</span> - 3:15 <span>Pm</span></h4>
                                                                <h3 class="title">Keynote by a Celebrity Founder</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                          <!-- <div class="panel panel-default lgx-panel">
                                            <div class="panel-heading" role="tab" id="headingThree2">
                                                <div class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="true" aria-controls="collapseThree2">
                                                        <div class="lgx-single-schedule">
                                                            <div class="author">
                                                                <img src="assets/img/schedule/startup.jpg" alt="Speaker"/>
                                                            </div>
                                                            <div class="schedule-info">
                                                                <h4 class="time">3:15 <span> Pm</span> - 4:00<span>Pm</span></h4>
                                                                <h3 class="title">Valedictory Ceremony</h3>
                                                                <ul>
                                                                    <li>Ideation challenge winners</li>
                                                                    <li>Sidbi commitments
                                                                    </li>
                                                                    <li>Awards to Incubation center and Startup Cells</li>
                                                                    <li>Cheque distribution to Startups</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
          </div>
          <!-- //.INNER -->
        </div>
      </section>
      <!--SCHEDULE END-->

      <!--SPONSORED-->
      <section>
        <div id="lgx-sponsors" class="lgx-sponsors">
          <div class="lgx-inner-bg">
            <div class="lgx-inner">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="lgx-heading">
                      <h2 class="heading">Offcial Sponsonrs</h2>
                      <h3 class="subheading">Welcome to the dedicated to building remarkable Sponsores!</h3>
                    </div>
                  </div>
                </div>
                <!--//main row-->
                <div class="row">
                  <div class="col-xs-12">
                    <h3 class="sponsored-heading first-heading">Our Sponsors</h3>
                    <div class="sponsors-area">
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/flowwlogo.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor2.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor3.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor4.png" alt="sponsor" /></a>
                      </div>
                    </div>
                  </div>
                  <!--//col-->
                </div>
                <!--//row-->
                <div class="row">
                  <div class="col-xs-12">
                    <h3 class="sponsored-heading secound-heading">Our Partners</h3>
                    <div class="sponsors-area">
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/flowwlogo.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor2.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor1.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor5.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor1.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor3.png" alt="sponsor" /></a>
                      </div>
                      <div class="single">
                        <a class="" href="#"><img src="assets/img/sponsors/sponsor4.png" alt="sponsor" /></a>
                      </div>
                    </div>
                  </div>
                  <!--//col-->
                </div>
                <!-- <div class="row">
                        <div class="col-xs-12">
                            <h3 class="sponsored-heading third-heading">Platinum Sponsors</h3>
                            <div class="sponsors-area">
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sponsors/sponsor2.png" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sponsors/sponsor3.png" alt="sponsor"/></a>
                                </div>
                                <div class="single">
                                    <a class="" href="#"><img src="assets/img/sponsors/sponsor1.png" alt="sponsor"/></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!--//row-->
                <div class="section-btn-area">
                  <a class="lgx-btn" href="mailto:email@startup">Become A Sponsor</a>
                </div>
              </div>
              <!--//container-->
            </div>
          </div>
          <!--//lgx-inner-->
        </div>
      </section>
      <!--SPONSORED END-->

      <!--PHOTO GALLERY-->
      <section>
        <div id="lgx-photo-gallery" class="lgx-gallery-popup lgx-photo-gallery-normal lgx-photo-gallery-black">
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-heading lgx-heading-white">
                    <h2 class="heading">Photo Gallery</h2>
                    <h3 class="subheading">Welcome to the dedicated to building remarkable Sponsores!</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-gallery-area">
                    <div class="lgx-gallery-single">
                      <figure>
                        <img title="Memories One" src="assets/img/gallery/gallery4.jpg" alt="Memories one" />
                        <figcaption class="lgx-figcaption">
                          <div class="lgx-hover-link">
                            <div class="lgx-vertical">
                              <a title="Memories One" href="assets/img/gallery/gallery4.jpg">
                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                    <!--Single photo-->
                    <div class="lgx-gallery-single">
                      <figure>
                        <img src="assets/img/gallery/gallery2.jpg" alt="Memories Two" title="Memories Two" />
                        <figcaption class="lgx-figcaption">
                          <div class="lgx-hover-link">
                            <div class="lgx-vertical">
                              <a title="Memories Two" href="assets/img/gallery/gallery2.jpg">
                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                    <!--Single photo-->
                    <div class="lgx-gallery-single">
                      <figure>
                        <img src="assets/img/gallery/gallery3.jpg" alt="Memories Three" title="Memories Three" />
                        <figcaption class="lgx-figcaption">
                          <div class="lgx-hover-link">
                            <div class="lgx-vertical">
                              <a title="Memories Three" href="assets/img/gallery/gallery3.jpg">
                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                    <!--Single photo-->
                    <div class="lgx-gallery-single">
                      <figure>
                        <img src="assets/img/gallery/gallery4.jpg" alt="Memories Four" title="Memories Four" />
                        <figcaption class="lgx-figcaption">
                          <div class="lgx-hover-link">
                            <div class="lgx-vertical">
                              <a title="Memories Four" href="assets/img/gallery/gallery4.jpg">
                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                    <!--Single photo-->
                    <div class="lgx-gallery-single">
                      <figure>
                        <img src="assets/img/gallery/gallery5.jpg" alt="Memories Five" title="Memories Five" />
                        <figcaption class="lgx-figcaption">
                          <div class="lgx-hover-link">
                            <div class="lgx-vertical">
                              <a title="Memories Five" href="assets/img/gallery/gallery5.jpg">
                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                    <!--Single photo-->
                    <div class="lgx-gallery-single">
                      <figure>
                        <img src="assets/img/gallery/gallery6.jpg" alt="Memories Six" title="Memories Six" />
                        <figcaption class="lgx-figcaption">
                          <div class="lgx-hover-link">
                            <div class="lgx-vertical">
                              <a title="Memories Six" href="assets/img/gallery/gallery6.jpg">
                                <i class="fa fa-chain-broken" aria-hidden="true"></i>
                              </a>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                    <!--Single photo-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--PHOTO GALLERY END-->

      <!--News-->
      <section>
        <div id="lgx-news" class="lgx-news">
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-heading">
                    <h2 class="heading">News</h2>
                    <h3 class="subheading">Conferences dedicated to building remarkable events.</h3>
                  </div>
                </div>
              </div>
              <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="lgx-single-news">
                            <figure>
                                <a href="#">
                                    <img src="{{asset('storage/' . $blog->photo)}}" alt="" / height="200">
                                </a>
                            </figure>
                            <div class="single-news-info">
                                <div class="meta-wrapper">
                                    <span>{{$blog->created_at->translatedFormat('d F, Y')}}</span>
                                    <span>by <a href="#">{{$blog->writter}}</a></span>
                                    <span><a href="#">{{$blog->category->name ?? ''}}</a></span>
                                </div>
                                <h3 class="title">
                                    <a href="#">{{$blog->title ?? ''}}</a>
                                </h3>
                                <a class="lgx-btn lgx-btn-white lgx-btn-sm" href="#"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach


              </div>
              <div class="section-btn-area">
                <!-- <a class="lgx-btn" href="news.html">View More Blogs</a> -->
                <a class="lgx-btn" href="#">View More</a>
              </div>
            </div>
            <!-- //.CONTAINER -->
          </div>
          <!-- //.INNER -->
        </div>
      </section>
      <!--News END-->

      <!--TRAVEL INFO-->
      <section>
        <div id="lgx-travelinfo" class="lgx-travelinfo">
          <div class="lgx-inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-heading">
                    <h2 class="heading">Unlocking Opportunities</h2>
                    <h3 class="subheading">Empowering Startups Through Innovation, Growth, and Networking</h3>
                  </div>
                </div>
                <!--//main COL-->
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="lgx-travelinfo-content">
                    <div class="lgx-travelinfo-single">
                      <img src="assets/img/info-icon1.png" alt="location" />
                      <h3 class="title">Networking</h3>
                      <p class="info">Connecting visionaries for endless collaboration.</p>
                    </div>
                    <div class="lgx-travelinfo-single">
                      <img src="assets/img/info-icon2.png" alt="Transport" />
                      <h3 class="title">Growth</h3>
                      <p class="info">Empowering startups to scale and thrive</p>
                    </div>
                    <div class="lgx-travelinfo-single">
                      <img src="assets/img/info-icon3.png" alt="Hotel & Restaurant" />
                      <h3 class="title">Innovation</h3>
                      <p class="info">Fueling groundbreaking ideas for future success.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!--//.ROW-->
            </div>
            <!-- //.CONTAINER -->
          </div>
        </div>
      </section>

@endsection



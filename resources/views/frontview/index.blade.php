<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Educal – Online Learning and Education HTML5 Template </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/assets/img/favicon.png">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{url('public')}}/assets/css/preloader.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/meanmenu.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/animate.min.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/backToTop.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/fontAwesome5Pro.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/elegantFont.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/default.css">
      <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
      
      <!-- Add your site or application content here -->  

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two" style="left:20px;"></div>
               <div class="object" id="object_three" style="left:40px;"></div>
               <div class="object" id="object_four" style="left:60px;"></div>
               <div class="object" id="object_five" style="left:80px;"></div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div id="header-sticky" class="header__area header__transparent header__padding">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <a href="index.html">
                              <img src="{{url('public')}}/assets/img/logo/logo.png" alt="logo">
                           </a>
                        </div>
                      
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                              <li>
                                    <a href="{{url('index')}}">Home</a>
                                    
                                 </li>
                                
                                 <li class="has-dropdown">
                                    <a href="{{url('blog')}}">Laman Berita</a>
                                    <ul class="submenu">
                                       <li><a href="{{url('blog')}}">Sekilas Berita</a></li>
                                       <li><a href="{{url('blogdetail')}}">Berita Lengkap</a></li>
                                    </ul>
                                 </li>
                                
                                 
                              </ul>
                           </nav>
                        </div>
                        <div class="header__search p-relative ml-50 d-none d-md-block">
                           <form action="#">
                              <input type="text" placeholder="Search...">
                              <button type="submit"><i class="fad fa-search"></i></button>
                           </form>
                           
                        </div>
                        <div class="header__btn ml-20 d-none d-sm-block">
                           <a href="{{url('login')}}" class="e-btn">Login</a>
                        </div>
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                       
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

   

      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="{{url('public')}}/assets/img/logo/logo.png" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

               <div class="sidebar__search p-relative mt-40 ">
                  <form action="#">
                     <input type="text" placeholder="Search...">
                     <button type="submit"><i class="fad fa-search"></i></button>
                  </form>
               </div>
               <div class="sidebar__cart mt-30">
                  <a href="#">
                     <div class="header__cart-icon">
                        <svg viewBox="0 0 24 24">
                           <circle class="st0" cx="9" cy="21" r="1"/>
                           <circle class="st0" cx="20" cy="21" r="1"/>
                           <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                        </svg>
                     </div>
                     <span class="cart-item">2</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>

         <!-- hero area start -->
         <section class="hero__area hero__height d-flex align-items-center grey-bg-2 p-relative">
            <div class="hero__shape">
               <img class="hero-1-circle" src="{{url('public')}}/assets/img/shape/hero/hero-1-circle.png" alt="">
               <img class="hero-1-circle-2" src="{{url('public')}}/assets/img/shape/hero/hero-1-circle-2.png" alt="">
               <img class="hero-1-dot-2" src="{{url('public')}}/assets/img/shape/hero/hero-1-dot-2.png" alt="">
            </div>
            <div class="container">
               <div class="hero__content-wrapper mt-90">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__content p-relative z-index-1">
                           <h3 class="hero__title">
                              <span>Access 2700+</span>
                              <span class="yellow-shape">Online <img src="{{url('public')}}/assets/img/shape/yellow-bg.png" alt="yellow-shape"> </span> 
                              Tutorial From Top Instructor.</h3>
                              <p>Meet university,and cultural institutions, who'll share their experience.</p>
                              <a href="course-grid.html" class="e-btn">view all course</a>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb d-flex p-relative">
                           <div class="hero__thumb-shape">
                              <img class="hero-1-dot" src="{{url('public')}}/assets/img/shape/hero/hero-1-dot.png" alt="">
                              <img class="hero-1-circle-3" src="{{url('public')}}/assets/img/shape/hero/hero-1-circle-3.png" alt="">
                              <img class="hero-1-circle-4" src="{{url('public')}}/assets/img/shape/hero/hero-1-circle-4.png" alt="">
                           </div>
                           <div class="hero__thumb-big mr-30">
                              <img src="{{url('public')}}/assets/img/hero/hero-1.jpg" alt="">
                              <div class="hero__quote hero__quote-animation">
                                 <span>Tomorrow is our</span>
                                 <h4>“When I Grow Up” Spirit Day!</h4>
                              </div>
                           </div>
                           <div class="hero__thumb-sm mt-50 d-none d-lg-block">
                              <img src="{{url('public')}}/assets/img/hero/hero-sm-1.jpg" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- hero area end -->

        
         <!-- banner area start -->
         <section class="banner__area pb-110">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="banner__item p-relative mb-40" data-background="{{url('public')}}/assets/img/banner/banner-bg-1.jpg">
                        <div class="banner__content">
                           <span>Free</span>
                           <h3 class="banner__title">
                              <a href="course-details.html">Germany Foundation <br> Document</a>
                           </h3>
                           <a href="course-grid.html" class="e-btn e-btn-2">View Courses</a>
                        </div>
                        <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">
                           <img src="{{url('public')}}/assets/img/banner/banner-img-1.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="banner__item p-relative mb-40" data-background="{{url('public')}}/assets/img/banner/banner-bg-2.jpg">
                        <div class="banner__content">
                           <span class="orange">new</span>
                           <h3 class="banner__title">
                              <a href="course-details.html">Online Courses <br>From Eduka University</a>
                           </h3>
                           <a href="course-grid.html" class="e-btn e-btn-2">Find Out More</a>
                        </div>
                        <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">
                           <img src="{{url('public')}}/assets/img/banner/banner-img-2.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->

        


     
         <!-- footer area start -->
         <footer>
            <div class="footer__area footer-bg">
               <div class="footer__top pt-190 pb-40">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <div class="footer__logo">
                                    <a href="index.html">
                                       <img src="{{url('public')}}/assets/img/logo/logo-2.png" alt="">
                                    </a>
                                 </div>
                              </div>
                              <div class="footer__widget-body">
                                 <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lesson plans to best.</p>

                                 <div class="footer__social">
                                    <ul>
                                       <li><a href="#"><i class="social_facebook"></i></a></li>
                                       <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                       <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-3 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <h3 class="footer__widget-title">Company</h3>
                              </div>
                              <div class="footer__widget-body">
                                 <div class="footer__link">
                                    <ul>
                                       <li><a href="#">About</a></li>
                                       <li><a href="#">Courses</a></li>
                                       <li><a href="#">Events</a></li>
                                       <li><a href="#">Instructor</a></li>
                                       <li><a href="#">Career</a></li>
                                       <li><a href="#">Become a Teacher</a></li>
                                       <li><a href="#">Contact</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 offset-lg-0 col-md-3 offset-md-1 col-sm-6">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <h3 class="footer__widget-title">Platform</h3>
                              </div>
                              <div class="footer__widget-body">
                                 <div class="footer__link">
                                    <ul>
                                       <li><a href="#">Browse Library</a></li>
                                       <li><a href="#">Library</a></li>
                                       <li><a href="#">Partners</a></li>
                                       <li><a href="#">News & Blogs</a></li>
                                       <li><a href="#">FAQs</a></li>
                                       <li><a href="#">Tutorials</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                           <div class="footer__widget footer__pl-70 mb-50">
                              <div class="footer__widget-head mb-22">
                                 <h3 class="footer__widget-title">Subscribe</h3>
                              </div>
                              <div class="footer__widget-body">
                                 <div class="footer__subscribe">
                                    <form action="#">
                                       <div class="footer__subscribe-input mb-15">
                                          <input type="email" placeholder="Your email address">
                                          <button type="submit">
                                             <i class="far fa-arrow-right"></i>
                                             <i class="far fa-arrow-right"></i>
                                          </button>
                                       </div>
                                    </form>
                                    <p>Get the latest news and updates right at your inbox.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__bottom">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="footer__copyright text-center">
                              <p>© 2022 Educal, All Rights Reserved. Design By <a href="index.html">Theme Pure</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer area end -->
      <!-- JS here -->
      <script src="{{url('public')}}/assets/js/vendor/jquery-3.5.1.min.js"></script>
      <script src="{{url('public')}}/assets/js/vendor/waypoints.min.js"></script>
      <script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('public')}}/assets/js/jquery.meanmenu.js"></script>
      <script src="{{url('public')}}/assets/js/swiper-bundle.min.js"></script>
      <script src="{{url('public')}}/assets/js/owl.carousel.min.js"></script>
      <script src="{{url('public')}}/assets/js/jquery.fancybox.min.js"></script>
      <script src="{{url('public')}}/assets/js/isotope.pkgd.min.js"></script>
      <script src="{{url('public')}}/assets/js/parallax.min.js"></script>
      <script src="{{url('public')}}/assets/js/backToTop.js"></script>
      <script src="{{url('public')}}/assets/js/jquery.counterup.min.js"></script>
      <script src="{{url('public')}}/assets/js/ajax-form.js"></script>
      <script src="{{url('public')}}/assets/js/wow.min.js"></script>
      <script src="{{url('public')}}/assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="{{url('public')}}/assets/js/main.js"></script>
   </body>
</html>


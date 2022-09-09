<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Educal – Online Learning and Education HTML5 Template </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
         <div id="header-sticky" class="header__area header__transparent header__padding header__white">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <a href="index.html">
                              <img class="logo-white" src="{{url('public')}}/assets/img/logo/logo-2.png" alt="logo">
                              <img class="logo-black" src="{{url('public')}}/assets/img/logo/logo.png" alt="logo">
                           </a>
                        </div>
                       
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu-3">
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
                                
                                 <li><a href="{{url('login')}}">Login</a></li>
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

    

    

         <!-- page title area start -->
         <section class="page__title-area page__title-height-2 page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title-3.jpg">
            <div class="page__title-shape">
               <img class="page-title-shape-1" src="{{url('public')}}/assets/img/page-title/page-title-shape-1.png" alt="">
               <img class="page-title-shape-2" src="{{url('public')}}/assets/img/page-title/page-title-shape-2.png" alt="">
               <img class="page-title-shape-3" src="{{url('public')}}/assets/img/page-title/page-title-shape-3.png" alt="">
               <img class="page-title-shape-4" src="{{url('public')}}/assets/img/page-title/page-title-shape-4.png" alt="">
            </div>
           
         </section>
         <!-- page title area end -->

         <!-- blog area start -->
         <section class="blog__area pt-120 pb-120">
            <div class="container">
               <div class="row">
               @foreach($list_user as $user)
               @foreach($list_produk as $produk)
                  <div class="col-xxl-8 col-xl-8 col-lg-8">
                     <div class="blog__wrapper">
                        <div class="blog__text mb-40">
                           <p> {{$produk->deskripsi}}</p>
                        </div>
                        <div class="blog__quote grey-bg mb-45 p-relative fix">
                           <img class="quote" src="{{url('public')}}/assets/img/blog/quote-1.png" alt="">
                           <blockquote>
                              <p>{{$produk->harga}}</p>
                              <h4>{{$produk->nama}}</h4>
                           </blockquote>
                        </div>
                        
                        <div class="blog__line"></div>
                        <div class="blog__meta-3 d-sm-flex justify-content-between align-items-center mb-80">
                           
                           <div class="blog__social d-flex align-items-center">
                              <h4>Share:</h4>
                              <ul>
                                 <li><a href="#" class="fb" ><i class="social_facebook"></i></a></li>
                                 <li><a href="#" class="tw" ><i class="social_twitter"></i></a></li>
                                 <li><a href="#" class="pin" ><i class="social_pinterest"></i></a></li>
                              </ul>
                           </div>
                        </div>
                       
                        
                        <div class="latest-comments mb-95">
                           <h3>3 Comments</h3>
                           <ul>
                              <li>
                                 <div class="comments-box grey-bg">
                                    <div class="comments-info d-flex">
                                          <div class="comments-avatar mr-20">
                                                <img src="{{url('public')}}/assets/img/blog/comments/comment-1.jpg" alt="">
                                          </div>
                                          <div class="avatar-name">
                                             <h5>{{$user->nama}}</h5>
                                             <span class="post-meta"> July 14, 2022</span>
                                          </div>
                                    </div>
                                    <div class="comments-text ml-65">
                                       <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh David blatant have it, standard A bit of how's your father my lady absolutely.</p>
                                       <div class="comments-replay">
                                          <a href="#">Reply</a>
                                       </div>
                                    </div>
                                 </div>           
                              </li>
                           </ul>
                        </div>
                        <div class="blog__comment">
                           <h3>Write a Review</h3>
                           <form action="#">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="blog__comment-input">
                                       <input type="text" placeholder="Your Name">
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="blog__comment-input">
                                       <input type="email" placeholder="Your Email">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="blog__comment-input">
                                       <input type="text" placeholder="Website">
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="blog__comment-input">
                                       <textarea placeholder="Enter your comment ..."></textarea>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="blog__comment-agree d-flex align-items-center mb-20">
                                       <input class="e-check-input" type="checkbox" id="e-agree">
                                       <label class="e-check-label" for="e-agree">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                 </div>
                                 <div class="col-xxl-12">
                                    <div class="blog__comment-btn">
                                       <button type="submit" class="e-btn">Post Comment</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4">
                     <div class="blog__sidebar pl-70">
                        <div class="sidebar__widget mb-60">
                           <div class="sidebar__widget-content">
                              <div class="sidebar__search p-relative">
                                 <form action="#">
                                    <input type="text" placeholder="Search for courses...">
                                    <button type="submit">
                                       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 584.4 584.4" style="enable-background:new 0 0 584.4 584.4;" xml:space="preserve">
                                       <g>
                                          <g>
                                             <path class="st0" d="M565.7,474.9l-61.1-61.1c-3.8-3.8-8.8-5.9-13.9-5.9c-6.3,0-12.1,3-15.9,8.3c-16.3,22.4-36,42.1-58.4,58.4    c-4.8,3.5-7.8,8.8-8.3,14.5c-0.4,5.6,1.7,11.3,5.8,15.4l61.1,61.1c12.1,12.1,28.2,18.8,45.4,18.8c17.1,0,33.3-6.7,45.4-18.8    C590.7,540.6,590.7,499.9,565.7,474.9z"/>
                                             <path class="st1" d="M254.6,509.1c140.4,0,254.5-114.2,254.5-254.5C509.1,114.2,394.9,0,254.6,0C114.2,0,0,114.2,0,254.5    C0,394.9,114.2,509.1,254.6,509.1z M254.6,76.4c98.2,0,178.1,79.9,178.1,178.1s-79.9,178.1-178.1,178.1S76.4,352.8,76.4,254.5    S156.3,76.4,254.6,76.4z"/>
                                          </g>
                                       </g>
                                       </svg>
                                    </button>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="sidebar__widget mb-55">
                           <div class="sidebar__widget-head mb-35">
                              <h3 class="sidebar__widget-title">Recent posts</h3>
                           </div>
                           <div class="sidebar__widget-content">
                              <div class="rc__post-wrapper">
                                 <div class="rc__post d-flex align-items-center">
                                    <div class="rc__thumb mr-20">
                                       <a href="{{url('blogdetail')}}"><img src="{{url('public')}}/assets/img/blog/sm/blog-sm-1.jpg" alt=""></a>
                                    </div>
                                    <div class="rc__content">
                                       <div class="rc__meta">
                                          <span>October 15, 2021</span>
                                       </div>
                                       <h6 class="rc__title"><a href="{{url('blogdetail')}}">The Importance  Intrinsic Motivation.</a></h6>
                                    </div>
                                 </div>
                                
                              </div>
                           </div>
                        </div>
                       
                     </div>
                  </div>
                  @endforeach
                  @endforeach
               </div>
            </div>
         </section>
         <!-- blog area end -->

      </main>

         <!-- footer area start -->
         <footer>
            <div class="footer__area footer-bg">
               <div class="footer__top pt-90 pb-40">
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


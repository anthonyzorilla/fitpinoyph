@extends('Pages/Layouts/app')

@section('content')
<style>
          h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: white;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
span, a, a:hover {
    display: inline-block;
    text-decoration: none;
    color: inherit;
}

.news-section {
  padding:90px 0;
}

.news-content {
    padding: 40px 30px;
}

.news-item {
    box-shadow: 0 0 15px #ededed;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    margin-bottom: 40px;
}

.news-item:hover {
    -webkit-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    transform: translateY(-10px);
    -webkit-box-shadow: 0px 15px 15px 0px #edeaea;
    box-shadow: 0px 15px 15px 0px #edeaea;
}

.newsimg img {
    width: 100%;
}

.news_postdate {
    color: #FF3A46;
}

.news-content h3 {
    color: white;
    font-size: 22px;
    margin-bottom: 25px;
}

.news_authorinfo {
    border: transparent;
    padding: 14px 0px 0px 0px;
    background: transparent;
    font-size: 14px;
}

.news_authorinfo i {
    margin-right: 6px;
}

.news_authorinfo span:last-child {
    float: right;
}

.news_authorinfo a {
    color: #666;
}

.center .news-content {
    background: linear-gradient(-120deg, #8758ff 0, #614ef9 100%);
}

.center .news-content h3,
.center .news-content p {
    color: #fff;
}

.center .news_authorinfo a,
.center .news_authorinfo i {
    color: #fff;
}

.news-slide.owl-carousel .col-lg-4 {
    max-width: 100%;
    padding: 0;
}

.news-section .owl-theme .owl-nav [class*="owl-"] {
    color: white;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: #fff;
    display: inline-block;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ddd;
}

.small-title {
  font-size: 20px;
  text-transform: capitalize;
  color: #FF3A46;
  margin-bottom: 10px;
  margin-top: 0px;
  font-weight: 600;
}
.big-title {
    letter-spacing: 0px;
    padding-bottom: 13px;
    position: relative;
    color: #233D63;
    line-height: 50px;
    font-size: 36px;
    text-transform: capitalize;
    font-weight: 600;
}
.main-title-box {
    margin-bottom: 60px;
}
</style>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Build Up Your</span>
                                <h3 style="color:dodgerblue !important;">Body Shape</h3>
                                <p>Fit Pinoy is a collaborative service-oriented, multimedia platform that features health and fitness-related events, establishments, organizations, advocacies, projects, personalities, and institutions.</p>
                                <a href="#" class="boxed-btn3">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Build Up Your</span>
                                <h3 style="color:dodgerblue !important;">Strength</h3>
                                <p>Fit Pinoy is a collaborative service-oriented, multimedia platform that features health and fitness-related events, establishments, organizations, advocacies, projects, personalities, and institutions.</p>
                                <a href="#" class="boxed-btn3">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay" style="background-image: url(../img/banner/3.jpeg); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Build Up Your</span>
                                <h3 style="color:dodgerblue !important;">MIND</h3>
                                <p>Fit Pinoy is a collaborative service-oriented, multimedia platform that features health and fitness-related events, establishments, organizations, advocacies, projects, personalities, and institutions.</p>
                                <a href="#" class="boxed-btn3">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay" style="background-image: url(../img/banner/4.jpeg); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <span>Build Up Your</span>
                                <h3 style="color:dodgerblue !important;">Heart</h3>
                                <p>Fit Pinoy is a collaborative service-oriented, multimedia platform that features health and fitness-related events, establishments, organizations, advocacies, projects, personalities, and institutions.</p>
                                <a href="#" class="boxed-btn3">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!--About Fit Pinoy-->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Latest News</h3>
                    </div>
                </div>
            </div>
            <section class="news-section">
                <div class="container">
                           <div class="row">
                               <!--Single Blog Start-->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms">
                                   <div class="news-item">
                                       <div class="news_box">
                                           <div class="newsimg"><img class="img-responsive" src="https://i.ibb.co/CKNmhMX/blog1.jpg.jpg" alt=""></div>
                                           <div class="news-content">
                                               <div class="news_postdate">
                                                   <span>Jan 03, 2019</span>
                                               </div>
                                               <a href="#">
                                                   <h3>The Future of Digital Marketing</h3>
                                               </a>
                                               <p>Lorem ipsum dolor sit amet, cons ectet a ur elit. Vestibulum necod ios suspe age a to ndisse cursus mal.</p>
                                               <div class="news_authorinfo">
                                                   <span><i class="fa fa-user"></i>  <a href="">Robert Tylor </a></span>
                                                   <span><i class="fa fa-comment"></i> <a href="">Comments: (2)</a></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!--Single Blog End-->
                               <!--Single Blog Start-->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                   <div class="news-item active">
                                       <div class="news_box">
                                           <div class="newsimg"><img class="img-responsive" src="https://i.ibb.co/m5yGbdR/blog2.jpg" alt=""></div>
                                           <div class="news-content">
                                               <div class="news_postdate">
                                                   <span>Nov 05, 2018</span>
                                               </div>
                                               <a href="#">
                                                   <h3>Successful content marketing plan </h3>
                                               </a>
                                               <p>Lorem ipsum dolor sit amet, cons ectet a ur elit. Vestibulum necod ios suspe age a to ndisse cursus mal.</p>
                                               <div class="news_authorinfo">
                                                   <span><i class="fa fa-user"></i>  <a href="">Jessica keri</a></span>
                                                   <span><i class="fa fa-comment"></i> <a href="">Comments: (1)</a></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!--Single Blog End-->
                               <!--Single Blog Start-->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                                   <div class="news-item">
                                       <div class="news_box">
                                           <div class="newsimg"><img class="img-responsive" src="https://i.ibb.co/YXV3zmh/blog3.jpg" alt=""></div>
                                           <div class="news-content">
                                               <div class="news_postdate">
                                                   <span>Dec 22, 2018</span>
                                               </div>
                                               <a href="#">
                                                   <h3>Our agency helps to grow creativity</h3>
                                               </a>
                                               <p>Lorem ipsum dolor sit amet, cons ectet a ur elit. Vestibulum necod ios suspe age a to ndisse cursus mal.</p>
                                               <div class="news_authorinfo">
                                                   <span><i class="fa fa-user"></i>  <a href="">Brandon Auger</a></span>
                                                   <span><i class="fa fa-comment"></i> <a href="">Comments: (2)</a></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <!--Single Blog End-->
                            
                           </div>
                       </div>
                   </div>
           </section>
        </div>
    </div>
    <!--End About Fit Pinoy-->
    <!-- catagory_area  -->
    <div class="catagory_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3">
                    <div class="single_catagory text-center overlay2 cat_bg_1" style="background-image: url(../img/catagory/3.jpg); background-position:center;">
                        <h3>Cardio Training</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_catagory text-center overlay2 cat_bg_3" style="background-image: url(../img/catagory/4.jpg); background-position:center;">
                        <h3>Crossfit Training</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_catagory text-center overlay2 cat_bg_1" style="background-image: url(../img/catagory/5.jpg); background-position:center;">
                        <h3>Functional Training</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="single_catagory text-center overlay2 cat_bg_2" style="background-image: url(../img/catagory/6.jpg); background-position:center;">
                        <h3>Personal Training</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ catagory_area  -->

    <!-- features_area_start  -->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-73">
                        <h3>Our Features</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center mb-73">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h4>Weightlifting</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h4>Specific Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h4>Flex Your Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <img src="img/svg_icon/4.svg" alt="">
                        </div>
                        <h4>Cardio Exercises</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end  -->

    <div class="offer_area offer_bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="offer_text">
                        <h4>A Big Offer for <br>
                                This Summer</h4>
                        <h3 style="color:dodgerblue !important;">50% Off</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.</p>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="priscing_area">
            <div class="container">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title text-center mb-73">
                                    <h3>Our <a href="https://www.youtube.com/channel/UCq_XvKjVCpdzLnvuwmih0pA" target="_blank"><img  class="img-fluid" src="../img/icon/youtube.png" width="50" height="50" alt=""></a> Videos</h3>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/av-rT4MUH3M" allowfullscreen></iframe>
                          </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vP-YLalvQY8" allowfullscreen></iframe>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q5llDumt__M" allowfullscreen></iframe>
                          </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KjQURDWSWlc" allowfullscreen></iframe>
                          </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="single_gallery big_img">
            <div class="hover_pop">
                    <a class="popup-image" href="img/gallery/fpost.jpg">
                        <i class="ti-plus"></i>
                    </a>
            </div>
            <img src="img/gallery/fpost.jpg" alt="">
        </div>
        <div class="single_gallery big_img">
                <div class="hover_pop">
                        <a class="popup-image" href="img/gallery/spost.jpg">
                            <i class="ti-plus"></i>
                        </a>
                </div>
            <img src="img/gallery/spost.jpg" alt="">
        </div>
        <div class="single_gallery small_img">
                <div class="hover_pop">
                        <a class="popup-image" href="img/gallery/tpost.jpg">
                            <i class="ti-plus"></i>
                        </a>
                </div>
            <img src="img/gallery/tpost.jpg" alt="">
        </div>
        <div class="single_gallery small_img">
                <div class="hover_pop">
                        <a class="popup-image" href="img/gallery/fivepost.jpg">
                            <i class="ti-plus"></i>
                        </a>
                </div>
                <img src="img/gallery/fivepost.jpg" alt="">
            </div>
        <div class="single_gallery big_img">
                <div class="hover_pop">
                        <a class="popup-image" href="img/gallery/sixpost.jpg">
                            <i class="ti-plus"></i>
                        </a>
                </div>
            <img src="img/gallery/sixpost.jpg" alt="">
        </div>
        <div class="single_gallery big_img">
                <div class="hover_pop">
                        <a class="popup-image" href="img/gallery/sevenpost.jpg">
                            <i class="ti-plus"></i>
                        </a>
                </div>
            <img src="img/gallery/sevenpost.jpg" alt="">
        </div>

    </div>
    <!-- gallery_area_end  -->
    <a href="#" class="view_pore boxed-btn3">View More</a>
    <!-- team_area_start  -->
    <div class="team_area team_bg_1 overlay2">
            <div class="container">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title text-center mb-73">
                                    <h3>Our Trainers</h3>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="img/team/1.png" alt="">
                                <div class="team_hover">
                                    <div class="hover_inner text-center">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team_title text-center">
                                <h3>Jessica Mino</h3>
                                <p>Woman Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="img/team/2.png" alt="">
                                <div class="team_hover">
                                    <div class="hover_inner text-center">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team_title text-center">
                                <h3>Amit Khan</h3>
                                <p>Men Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="img/team/3.png" alt="">
                                <div class="team_hover">
                                    <div class="hover_inner text-center">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team_title text-center">
                                <h3>Paulo Rolac</h3>
                                <p>Men Trainer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- team_area_end  -->
    
    <!-- big_offer_area start  -->
    <div class="big_offer_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="offter_text text-center">
                        <h3>A Big Offer for <br>
                                This Summer</h3>
                        <a href="#" class="boxed-btn3">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big_offer_area end  -->
@endsection
@extends('frontend.layouts.app')
@section('content')
 <!--================= Back Wrapper Start Here =================-->
 <div class="back-wrapper">
            <!--================= Back Breadcrumbs Section Start Here =================-->
            <div class="back-breadcrumbs">
                <div class="breadcrumbs-wrap">
                    <div class="breadcrumbs-inner">
                        <div class="container">
                            <div class="breadcrumbs-text">
                                <h1 class="breadcrumbs-title">{{ config('app.name', 'Laravel') }}</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Back Breadcrumbs Section End Here =================-->

            <!--================= Blog Section Start Here =================-->
            <div class="back__blog__area back-blog-page pt-70 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-grid">

                @foreach ($post as $p)
                  <div class="single-blog">
                      <div class="inner-blog">
                          <div class="blog-img">
                              <img src="{{$p->photo}}" alt="Blog Image">
                          </div>
                          <div class="blog-content">
                              <ul class="top-part">
                                  <li>
                                      <img src="{{asset('frontend/images/author/1.jpg')}}" alt="image"> admin
                                  </li>
                                  <li class="date-part">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> {{ $p->updated_at }}
                                  </li>
                                  <li>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg> 2 Comment
                                  </li>
                              </ul>
                              <h3 class="blog-title"><a href="single-blog/{{$p->id}}">{{ $p->title }}</a></h3>
                              <p class="blog-desc">{{$p->meta_description}}</p>
                              <a href="single-blog/{{$p->id}}" class="back-btn-border">Read More <i class="arrow_right"></i></a>
                          </div>
                      </div>
                  </div>
                  @endforeach


                            </div>
                            <!--================= Pagination Section End Here =================-->
                            <ul class="back-pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="back-next"><a href="#">Next<i class="arrow_carrot-right"></i></a></li>
                            </ul>
                            <!--================= Pagination Section End Here =================-->
                        </div>
                        <div class="col-lg-4">
                            <div class="back-sidebar pl-30 md-pl-0 back-hero-area back-latest-posts back-whats-posts">

                                <form class="mb-44">
                                    <input type="text" name="input" placeholder="Search...">
                                    <button> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> </button>
                                </form>

                                <div class="back-title back-small-title">
                                    <h2>Get in Touch</h2>
                                </div>

                                <ul class="social-area">
                                    <li><div><a href="#"><i class="fa-brands fa-facebook-f"></i></a> <span>Followers <em>750</em></span></div></li>
                                    <li><div><a href="#"><i class="fa-brands fa-twitter"></i></a> <span>Fans <em>1236</em></span></div></li>
                                    <li><div><a href="#"><i class="fa-brands fa-instagram"></i></a> <span>Likes <em>523</em></span></div></li>
                                    <li><div><a href="#"><i class="fa-brands fa-vimeo-v"></i></a> <span>Comments <em>790</em></span></div></li>
                                    <li><div><a href="#"><i class="fa-brands fa-linkedin-in"></i></a> <span>Followers <em>1025</em></span></div></li>
                                    <li><div><a href="#"><i class="fa-brands fa-youtube"></i></a> <span>Subscribers <em>590M</em></span></div></li>
                                </ul>
                                <div class="back-title back-small-title pt-30">
                                    <h2>Latest News</h2>
                                </div>
                                <ul class="back-hero-bottom">
                                    <li>
                                        <div class="image-areas">
                                            <a href="#"><img src="{{asset('frontend/images/dont/1.jpg')}}" alt="image"></a>
                                        </div>
                                        <div class="back-btm-content">
                                            <a href="#" class="back-cates">Politics</a>
                                            <h3><a href="#">Time can never stop for anyone</a></h3>
                                            <ul>
                                                <li class="back-date">by <a href="#">Jon Deo </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image-areas">
                                            <a href="#"><img src="{{asset('frontend/images/dont/2.jpg')}}" alt="image"></a>
                                        </div>
                                        <div class="back-btm-content">
                                            <a href="#" class="back-cates">Music</a>
                                            <h3><a href="#">Everyone loves to listen to music</a></h3>
                                            <ul>
                                                <li class="back-date">by <a href="#">Jon Deo </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image-areas">
                                            <a href="#"><img src="{{asset('frontend/images/dont/3.jpg')}}" alt="image"></a>
                                        </div>
                                        <div class="back-btm-content">
                                            <a href="#" class="back-cates">Lifestyle</a>
                                            <h3><a href="#">10 easy habits to make your life</a></h3>
                                            <ul>
                                                <li class="back-date">by <a href="#">Jon Deo </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image-areas">
                                            <a href="#"><img src="{{asset('frontend/images/dont/4.jpg')}}" alt="image"></a>
                                        </div>
                                        <div class="back-btm-content">
                                            <a href="#" class="back-cates">Travel</a>
                                            <h3><a href="#">World tranding best 10 website</a></h3>
                                            <ul>
                                                <li class="back-date">by <a href="#">Jon Deo </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="back-add pt-15"> <img src="{{asset('frontend/images/whats/add.jpg')}}" alt="add-image"> </div>

                                <div class="back-title back-small-title pt-50">
                                    <h2>Follow Us</h2>
                                </div>
                                <ul class="back-instragram">
                                    <li><a href="#"> <img src="{{asset('frontend/images/instragram/1.jpg')}}" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"> <img src="{{asset('frontend/images/instragram/2.jpg')}}" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"> <img src="{{asset('frontend/images/instragram/3.jpg')}}" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"> <img src="{{asset('frontend/images/instragram/4.jpg')}}" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"> <img src="{{asset('frontend/images/instragram/5.jpg')}}" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"> <img src="{{asset('frontend/images/instragram/6.jpg')}}" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                                </ul>



                                <div class="back-title back-small-title pt-50">
                                    <h2>Tags</h2>
                                </div>
                                <div class="widget widget-tags">
                                    <ul class="tags">
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">SEO Marketing</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Solutions</a></li>
                                        <li><a href="#">UX</a></li>
                                        <li><a href="#">Case Study</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Insights</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Blog Section End Here =================-->

        </div>
        <!--================= Back Wrapper End Here =================-->

@endsection

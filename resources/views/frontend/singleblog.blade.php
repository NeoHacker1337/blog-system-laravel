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
           <div class="back__blog__area back-blog-page back-blog-page-single pt-70 pb-60">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8">
                           <div class="blog-single-inner">
                               <div class="blog-content">
                                   <div class="blog-image">
                                       <img src="../{{$post->photo}}" alt="Blog Image">
                                   </div>

                                   <p>{{$post->meta_description}}</p>

                                   <div class="back-order-list">
                                       <h3>{{$post->title}}</h3>
                                       <p>{{$post->body}}</p>

                                   </div>


                                   <div class="blog-tags">
                                       <div class="row align-items-center">
                                           <div class="col-md-8">
                                               <ul class="mata-tags">

                                                   <li class="tags">Tags:</li>
                                                   @foreach ($tag as $t)
                                                   <li><a href="#">{{ $t->name }}</a></li>
                                                   @endforeach
                                               </ul>
                                           </div>
                                           <div class="col-md-4">
                                               <ul class="social-links text-right">
                                                   <li class="shares">Share:</li>
                                                   <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                   <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                   <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="single-nav">
                                       <div class="back-prev"> <a href="#"><i class="fa-solid fa-arrow-right"></i> Preovious Post <em>Social media strategies</em></a> </div>

                                       <div class="back-next"><a href="#">Next Post <i class="fa-solid fa-arrow-right"></i> <em> Amazing theme performance</em></a></div>
                                   </div>


                                   <div class="author-comment">
                                       <div class="back-title back-small-title">
                                           <h2>Comments</h2>
                                         
                                       </div>
                                       <ul>

                                         @foreach ($comments as $c)
                                           <li>
                                               <div class="row">
                                                   <div class="col-lg-1">
                                                       <div class="image-comments"><img src="{{asset('frontend/images/user/user2.jpg')}}" alt=""> </div>
                                                   </div>
                                                   <div class="col-lg-11">
                                                       <div class="dsc-comments">
                                                           <h6>{{$c->user_name}}</h6>
                                                           <span class="reply"> <span class="date">{{$c->created_at}}</span></span>
                                                           <p>{{$c->comments}}</p>
                                                           <a href="#">Reply</a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </li>
                                           @endforeach

                                       </ul>
                                   </div>

                                   <div class="back-blog-form">
                                       <div id="blog-form" class="blog-form">
                                           <div class="back-title back-small-title">
                                               <h2>Leave a Reply</h2>
                                           </div>
                                           <form method="POST" action="{{route('commentSave')}}" enctype="multipart/form-data">
                           @csrf
                           <input type="hidden" name="post_id" value="{{$post->id}}">
                                               <div class="row">
                                                   <div class="col-lg-12">
                                                       <div class="back-textarea">
                                                         <textarea name="comments" class="form-control" placeholder="Write Your Comment..." rows="4"></textarea>
                                                           @if ($errors->has('comments'))
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $errors->first('comments') }}</strong>
                                                               </span>
                                                           @endif

                                                       </div>
                                                   </div>
                                                   <div class="col-lg-6">
                                                       <div class="back-input">

                                                           <input type="text" name="user_name" class="form-control border-input" placeholder="Full Name" required>
                                                              @if ($errors->has('user_name'))
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $errors->first('user_name') }}</strong>
                                                                  </span>
                                                              @endif
                                                       </div>
                                                   </div>

                                                   <div class="col-lg-6">
                                                       <div class="back-input">
                                                         <input type="text" name="email" class="form-control border-input" placeholder="email" value="{{ old('email') }}" required>
                                                              @if ($errors->has('email'))
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $errors->first('email') }}</strong>
                                                                  </span>
                                                              @endif
                                                       </div>
                                                   </div>

                                                   <div class="col-lg-12">
                                                       <div class="back-input">
                                                           <input type="text" name="website" placeholder="Website">
                                                           @if ($errors->has('website'))
                                                               <span class="invalid-feedback" role="alert">
                                                                   <strong>{{ $errors->first('email') }}</strong>
                                                               </span>
                                                           @endif
                                                       </div>
                                                   </div>

                                                   <div class="col-lg-12">
                                                       <div class="back-check-box">
                                                           <input type="checkbox" id="box-1"> Save my name, email, and website in this browser for the next time I comment.
                                                       </div>
                                                       <button type="submit" class="back-btn">Submit Comment</button>
                                                   </div>
                                               </div>
                                           </form>

                                       </div>
                                   </div>
                               </div>
                           </div>
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
                                     @foreach ($tag as $t)

                                        <li><a href="#">{{ $t->name }}</a></li>
                                     @endforeach

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

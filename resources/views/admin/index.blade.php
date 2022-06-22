@extends('admin.layouts.app')
@include('admin.layouts.css')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
<div class="row match-height">
  <!-- Medal Card -->
   <div class="col-xl-4 col-md-6 col-12">
    <div class="card card-congratulation-medal">
      <div class="card-body">
        <h5>Hi, 🎉 {{ Auth::user()->name }}!</h5>
        <p class="card-text font-small-3">Welcome to the Blog System</p>
        <h3 class="mb-75 mt-2 pt-50">
          <a href="javascript:void(0);"> </a>
        </h3>

        <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic" />
      </div>
    </div>
  </div>
  <!--/ Medal Card -->
  <!-- Statistics Card -->
  <div class="col-xl-8 col-md-6 col-12">
    <div class="card card-statistics">
      <div class="card-header">
        <h4 class="card-title">Statistics</h4>
        <div class="d-flex align-items-center">
          <p class="card-text font-small-2 mr-25 mb-0"> {{-- Updated 1 month ago--}} </p>
        </div>
      </div>
      <div class="card-body statistics-body">
        <div class="row">
          <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
            <div class="media">
              <div class="avatar bg-light-primary mr-2">
                <div class="avatar-content">
                  <i data-feather="trending-up" class="avatar-icon"></i>
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0">{{$post}}</h4>
                <p class="card-text font-small-3 mb-0">Total POST</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
            <div class="media">
              <div class="avatar bg-light-info mr-2">
                <div class="avatar-content">
                  <i data-feather="user" class="avatar-icon"></i>
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0">{{$category}}</h4>
                <p class="card-text font-small-3 mb-0">Total Categorys</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
            <div class="media">
              <div class="avatar bg-light-danger mr-2">
                <div class="avatar-content">
                  <i data-feather="box" class="avatar-icon"></i>
                </div>
              </div>
              <div class="media-body my-auto">
                <h4 class="font-weight-bolder mb-0">{{$tag}}</h4>
                <p class="card-text font-small-3 mb-0">Total Tags</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Statistics Card -->
</div>


</section>
<!-- Dashboard Ecommerce ends -->

      </div>
    </div>
  </div>
  <!-- END: Content-->

@include('admin.layouts.js')


@endsection

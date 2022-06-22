
@include('admin.layouts.css')
@include('admin.layouts.bar')
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
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Profile
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">

          <!-- Validation -->
<section class="bs-validation">
  <div class="card-body">
       <div class="row">
           <div class="col-md-4">
               <div class="card">
                   <div class="image">
                       <img class="card-img-top img-fluid roundend-circle mt-4"  src="{{asset('profile.png')}}" alt="profile picture">
                   </div>
                   <div class="card-body mt-4 ml-2">
                     <h5 class="card-title text-left"><small><i class="fas fa-user"></i>  </small></h5>
                     <p class="card-text text-left"><small><i class="fas fa-envelope"></i> </small></p>
                     <p class="card-text text-left"><small class="text-muted"><i class="fas fa-hammer"></i>  </small></p>
                   </div>
                 </div>
           </div>
           <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 layout-spacing">
               <form class="border px-4 pt-2 pb-3" method="POST" action=" " enctype="multipart/form-data">
                   @csrf
                   <div class="form-group">
                     <label class="form-label" for="basic-addon-name">Full Name</label>
                     <input type="text" id="basic-addon-name" class="form-control" placeholder="Name" name="name" value="{{$users->name}}" aria-label="Name" aria-describedby="basic-addon-name" disabled/>
                     @error('name')
                     <span class="text-danger">{{$message}}</span>
                     @enderror
                   </div>
                     <div class="form-group">
                         <label for="inputEmail" class="col-form-label">Email</label>
                       <input id="inputEmail" disabled type="email" name="email" placeholder="Enter email"  value="{{$users->email}}" class="form-control">
                       @error('email')
                       <span class="text-danger">{{$message}}</span>
                       @enderror
                     </div>
               </form>
           </div>
       </div>
  </div>
  </div>
</section>
        </div>
      </div>
    </div>
@include('admin.layouts.js')

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
   <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
         <div class="col-12">
          <center>  <h2 class="content-header-title float-left mb-0">Category</h2>
          </center>
         </div>
      </div>
   </div>
</div>
<div class="content-body">
<div class="row"></div>
<section id="basic-datatable">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
               <div class="card-header border-bottom p-1">
                  <div class="head-label">

                  </div>

               </div>
               <div class="d-flex justify-content-between align-items-center mx-0 row">

                 <div class="card-body">

                        <form method="POST" action="{{route('admin.createcategory')}}" enctype="multipart/form-data">
                         @csrf

                         <div class="col-md-12 col-12">
                            <div class="form-group">
                               <input type="text" id="basic-addon-name" class="form-control" value="" placeholder="Please Enter Category name" name="name" aria-label="name" aria-describedby="basic-addon-name" />
                               <span>@if ($errors->has('name'))
                                  <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif</span>
                            </div>
                         </div>


                        <div class="form-group">
                        <div class="custom-control custom-checkbox">
                         <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" required />
                         <label class="custom-control-label" for="validationCheckBootstrap"
                            >Agree to our terms and conditions</label
                            >
                         <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                         <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                        </form>


                     </div>

               </div>


            </div>
         </div>
      </div>
   </div>
</section>

<section id="basic-datatable">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              
               <table id="myTable" class="datatables-basic table dataTable no-footer dtr-column">
                  <thead>
                     <tr>
                        <th class="control" rowspan="1" colspan="1" style="width: 58px; display: none;" aria-label=""></th>
                        <th></th>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Date Of Create</th>
                        <th>Delete</th>
                     </tr>
                  </thead>
                  @foreach ($category as $c)
                  <tbody>
                    <td></td>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->created_at}}</td>
                    <td>Delete</td>
                  </tbody>
                  @endforeach
               </table>

            </div>
         </div>{{$category->links()}}
      </div>
   </div>
</section>
       </div>
     </div>
   </div>
   <!-- END: Content-->


@include('admin.layouts.js')
@endsection

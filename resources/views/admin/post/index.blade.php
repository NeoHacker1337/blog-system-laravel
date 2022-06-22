@extends('admin.layouts.app')
@include('admin.layouts.css')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
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
          <center>  <h2 class="content-header-title float-left mb-0">Tags Or Keywords</h2>
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

                        <form method="POST" id="framework_form" action="{{route('admin.createpost')}}" enctype="multipart/form-data">
                         @csrf

                         <div class="col-md-12 col-12">
                            <div class="form-group">
                               <input type="text" id="basic-addon-title" class="form-control" value="" placeholder="Please Enter title" name="title" aria-label="title" aria-describedby="basic-addon-title" />
                               <span>@if ($errors->has('title'))
                                  <span class="text-danger">{{ $errors->first('title') }}</span>
                              @endif</span>
                            </div>
                                 <div class="form-group">
                                    <label for="select-category_id">Select Category<span style="color:red">*</span></label>
                                    <select class="form-control" id="select-category_id" name="category_id" >
                                       <option value="">Select Category</option>
                                       @foreach ($category as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                 <span>@if ($errors->has('category_id'))
                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                @endif</span>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description (Max: 300)</label>
                                    <textarea name="meta_description" class="form-control" placeholder="Meta description..." rows="4">{{ old('meta_description') }}</textarea>
                                    @if ($errors->has('meta_description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('meta_description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            <div class="form-group">
                               <label name="body">Body</label>
                               <textarea id="body" name="body" class="form-control" placeholder="Here can be your nice text" rows="20" required>{{ old('body') }}</textarea>
                               @if ($errors->has('body'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('body') }}</strong>
                                   </span>
                               @endif
                           </div>
                         </div>
                         <div class="form-group">
                       <label for="customFile1">File Upload (Optional)</label>
                       <div class="custom-file">
                         <input type="file" name="photo" class="custom-file-input" id="customFile1" />
                         <label class="custom-file-label" for="customFile1">Choose thumbnail</label>
                         @if ($errors->has('photo'))
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('photo') }}</strong>
                             </span>
                         @endif
                       </div>
                       <div class="form-group">
                          <!-- <label for="select-tags">Select tags<span style="color:red">*</span></label>
                          <select class="form-control" id="select-category_id" name="tags[]" multiselect>
                             <option value="" >Select tags</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                             <option value="4">Four</option>
                             <option value="5">Five</option>
                             <option value="6">Six</option>
                             <option value="7">Seven</option>
                             <option value="8">Eight</option>
                          </select> -->

                         <label for="select-tags">Select tags<span style="color:red">*</span></label>
                         <select id="framework" name="tags[]" multiple class="form-control" >
                           @foreach ($tag as $t)
                          <option value="{{$t->name}}">{{$t->name}}</option>
                          @endforeach
                         </select>



                       </div>
                       <span>@if ($errors->has('tags'))
                          <span class="text-danger">{{ $errors->first('tags') }}</span>
                      @endif</span>



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
                        <th>Thumbnail</th>
                        <th>Description</th>
                        <th>Tags</th>

                        <th>Date</th>
                        <th>Delete POST</th>
                     </tr>
                  </thead>
                  @foreach ($post as $p)
                  <tbody>
                    <td></td>
                    <td>{{$p->id}}</td>
                    <td>{{$p->category_id}}</td>
                    <td><img src="{{$p->photo}}" width="100px" height="70px"></td>
                    <td>{{$p->meta_description}}</td>
                    <td>{{$p->tags}}</td>
                  <td>{{$p->created_at}}</td>
                    <td>Delete</td>
                  </tbody>
                  @endforeach

               </table>
            </div>
         </div>$category->links()
      </div>
   </div>
</section>
       </div>
     </div>
   </div>
   <!-- END: Content-->

@include('admin.layouts.js')
@endsection

@extends('base')
@section('content')
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
               <div class="col-12">
                  <h5 class="content-header-title float-left pr-1 mb-0">Edit  Category</h5>
                  <div class="breadcrumb-wrapper col-12">
                     <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin_cat_list">Category</a>
                        </li>
                        <li class="breadcrumb-item active">Edit  Category
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="content-body">
        
         <section class="simple-validation">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Edit  Category</h4>
                     </div>
                     <div class="card-content">
                         @if(session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('message') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        <div class="card-body">
                           <form class="form-horizontal"  method="POST" action="/edit_cat" 
                          enctype="multipart/form-data" novalidate >
                             @csrf
                             <input type="hidden" name="id" value="{{$data->id}}">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="parent">Parent Category</label>
                                       <select name="parent_id" id="parent_id" class="form-control select2">
                                         <option value="" >None </option>
                                         {{--
                                          @foreach($data as $data)
                                          <option value="{{ $data->id  }}" >{{ $data->name  }}  
                                          </option>
                                          @endforeach  --}}
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <div class="controls">
                                          <label for="catname">Cat Name</label>
                                          <input id="catname" type="text" name="name"
                                           value="{{$data->name}}" class="form-control" placeholder="Cat Name" required data-validation-required-message="This Cat Name field is required">
                                       </div>
                                        @error('name')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                       <div class="controls">
                                          <label for="catname">Full Description</label>
                                          <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description"
                                          value="{{$data->description}}" >{{$data->description}}</textarea>
                                       </div>
                                       @error('description')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>
                                <div class="col-sm-6">

                                     @if(isset($data->cover))
                                        <div class="form-group">
                                            <img src="/images/cat_img/{{$data->cover}}" alt="" width="50px"> <br/>
                                        </div>
                                        @endif
                                    </div>
                                      <div class="col-sm-6">   
                                    <div class="form-group">
                                        <div class="controls">
                                             <label for="cover">Image</label>
                                            <input id="catname" type="file"   name="cover" class="form-control" 
                                             required data-validation-required-message="cover image required">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="status">Status</label>
                                       <select name="status" id="status" class="form-control controls">
                                           <option>Select Status</option>
                                            <option value="1" @if($data->status == 1) selected="selected" @endif>Active</option>
                                             <option value="0" @if($data->status == 0) selected="selected" @endif>Deactive</option>
                                       </select>
                                       @error('status')
                                             <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
       
      </div>
   </div>
</div>
@endsection
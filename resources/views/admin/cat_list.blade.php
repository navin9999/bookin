@extends('base')
@section('content')
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-12 mb-2 mt-1">
            <div class="row breadcrumbs-top">
               <div class="col-12">
                  <h5 class="content-header-title float-left pr-1 mb-0">Category Tables</h5>
                  <div class="breadcrumb-wrapper col-12">
                     <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">Category
                        </li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="content-body">
         <!-- Basic Tables start -->
         <section id="basic-datatable">
            <div class="row">
               <div class="col-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Category List</h4>
                        <a href="/admin_cat_add" class="float-right btn btn-primary btn-xs"> + Add New Cat</a>
                     </div>
                     <div class="card-content">
                        <div class="card-body card-dashboard">
                           <div class="table-responsive table-bordered">
                              <table class="table zero-configuration1">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                    
                                       <th>  Category Name</th>
                                       <th>  Description</th>
                                      
                                       <th>  Cover</th>
                                       <th>   Status</th>
                                      
                                       <th>  Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                               @if (is_null($categories))
                                    <h6>Record not found</h6>
                                @else
                                   
                                       @php $i=1; @endphp
                                       @foreach($categories as $category)
                                    <tr>
                                       <td>  @php echo $i++ @endphp </td>
                                       <td> {{ $category->name }} 
                                          @foreach($categories as $c)
                                          @if( $category->parent_id == $c->id)
                                          (  {{ $c->name }}  )
                                          @endif
                                          @endforeach
                                       </td>
                                       <td> <?php echo "$category->description"; ?>   </td>
                                       
                                       <td>
                                         <img src="images/cat_img/{{$category->cover}}" alt="" width="50px">

                                          <!-- <img src="store/app/{{ $category->cover }}" width="50" height="50"> -->
                                       </td>
                                       
                                       <td>
                                          @if( $category->status == 1)
                                          <button class="btn btn-success btn-sm" >Active</button>
                                       
                                       @else
                                       <button class="btn btn-danger btn-sm" >Deactive</button>
                                       @endif
                                      </td>
                                       <td><a target="_blank" href="{{'edit/'.$category->id}}" class="btn btn-warning btn-sm ">Edit</a>
                                          <a href="{{'delete/'.$category->id}}" class="btn btn-sm btn-danger">Delete</a>
                                       </td>
                                    </tr>
                                    @endforeach  
                                    @endif     
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>#</th>
                                    
                                       <th>  Category Name</th>
                                       <th>  Description</th>
                                      
                                       <th>  Cover</th>
                                       <th>   Status</th>
                                      
                                       <th>  Actions</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
<!-- END: Content-->
@endsection
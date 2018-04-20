@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
{{--  
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
--}}
<link href="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
<style>
   .img-wrap {
   position: relative;
   display: inline-block;
   /* border: 1px #00000017 solid; */
   font-size: 0;
   /* margin: 5px; */
   }
   .img-wrap .close {
   position: absolute;
   right: 0px;
   z-index: 100;
   /* background-color: #FFF; */
   padding: 0px 8px 0px;
   color: red;
   font-weight: bold;
   cursor: pointer;
   opacity: .2;
   text-align: center;
   /* font-size: 22px; */
   line-height: 10px;
   border-radius: 50%;
   }
   .img-wrap:hover .close {
   opacity: 1;
   }
</style>
@endsection
@section('content')
<div class="container-fluid">
   <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
         <h4 class="page-title">Gallery</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
         <ol class="breadcrumb">
            <li><a href="">Gallery</a></li>
            <li class="active">Image Gallery</li>
         </ol>
      </div>
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-md-12">
         <div class="white-box">
            <div id="gallery">
               <div class="col-md-6">
                  <h4>Upload Images Here</h4>
               </div>
               <div class="col-md-6 button-box">
                  <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Images +</button>
               </div>
               <div id="">
                  <div id="gallery-header-center-left">
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title" id="exampleModalLabel1">Upload Images</h4>
                              </div>
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="white-box">
                                          <p class="text-muted m-b-30"> Multiple files  can be uploaded </p>
                                          <form action='{{url("college/image_gallery")}}' method="post" class="dropzone" id="my-dropzone" enctype="multipart/form-data">
                                             @csrf
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery-content ">
                <div class="popup-gallery m-t-30">
                @foreach($user as $users)
                <div class="img-wrap col-md-3">
                    <span onClick=delFiles("{{ url('college/deleteimagegallery/'.$users->id) }}") class="close"><i class="fa fa-times-circle-o"></i></span>  
                    <a href="{{ asset($users->file_url) }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here" >
                    <img src="{{ asset($users->file_url) }}" class="all landscape img-responsive img-thumbnail" alt="gallery" width="100%" height="100%"/>
                    </a>
                </div>
               @endforeach
                </div>
            </div>
         
         <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('college/plugins/bower_components/gallery/js/animated-masonry-gallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('college/plugins/bower_components/gallery/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
{{--  <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>  --}}
<script src="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>
<script>
   function delFiles(url){
      var r = confirm("Are sure want to delete!");
      if (r == true) {
          window.location=url;
      } else {
          txt = "You pressed Cancel!";
      }
   }     
   
   $("#exampleModal").on("hidden.bs.modal", function () {
      location.reload();
   });
</script>
<script>
   Dropzone.options.myDropzone = {
       autoProcessQueue: false,
       paramName: 'file',
       maxFilesize: 1, // MB
       maxFiles: 10,
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       init: function() {
       
       }
   };
</script>
@endsection

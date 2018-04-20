@extends('college.layouts.app')
@section('css')
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
{{-- 
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
--}}
<style type="text/css">
   .v{
   border:2px solid #8e8e8e;
   width:300px;
   height:240px;
   }
   .img-wrap {
   position: relative;
   display: inline-block;
   border: 1px black solid;
   font-size: 0;
   }
   .img-wrap .close {
   position: absolute;
   right: 0px;
   z-index: 100;
   background-color: #FFF;
   /* padding: 5px 2px 2px; */
   color: red;
   font-weight: bold;
   cursor: pointer;
   opacity: .2;
   text-align: center;
   font-size: 22px;
   line-height: 10px;
   border-radius: 50%;
   }
   .img-wrap:hover .close {
   opacity: 1;
   }
   video {
   max-width: 100%;
   height: auto;
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
            <li class="active">Video Gallery</li>
         </ol>
      </div>
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-md-12">
         <div class="white-box">
            <div id="gallery">
               <div class="col-md-6">
                  <h4>Upload videos Here</h4>
               </div>
               <div class="col-md-6 button-box">
                  <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add videos +</button>
               </div>
               <div id="gallery-header">
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="exampleModalLabel1">Upload videos</h4>
                           </div>
                           <div class="modal-body">
                              <form action='{{url("college/video_gallery")}}' method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                                 @csrf
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="gallery-content ">
                  <div id="gallery-content-center">
                     <div class="popup-gallery m-t-30">
                        @foreach($user as $user)
                        <div class="col-md-4 m-b-10 nopadding">
                           <div class="img-wrap">
                              <span onClick=delFiles("{{ url('college/deletevideogallery/'.$user->id) }}") class="close"><i class="fa fa-times-circle-o"></i></span>
                              <a href="{{ asset($user->file_url) }}" class="popup-youtube" >
                                 <video class="v" controls>
                                    <source src="{{ asset($user->file_url) }}" type="video/mp4" class="all landscape" />
                              </a>
                              </video>
                              </a>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
@endsection   
<!-- /#wrapper -->
@section('js')
<!-- jQuery -->
<script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
<script src="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>
{{-- <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script> --}}
<script>
   function delFiles(url){
       var r = confirm("Are sure want to delete!");
       if (r == true) {
           window.location=url;
       } else {
           txt = "You pressed Cancel!";
       }
   }   
   
   Dropzone.options.myDropzone = {
           paramName: 'file',
           maxFilesize: 10, // MB
           maxFiles: 10,
           acceptedFiles: ".mp4,.3gp",
           init: function() {
               this.on("success", function(file, response) {
                   
               });
           }
       };
   
   
   $("#exampleModal").on("hidden.bs.modal", function () {
           location.reload();
   });    
</script>
@endsection
</body>
</html>
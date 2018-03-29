@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">

<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet"> 

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
                             <h4>Upload Images Here</h4>
                            <div id="gallery-header">
                                        <div id="gallery-header-center-left">

                            <div class="button-box">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Images +</button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel1">Upload Images</h4>
                                        </div>
                                        <div class="modal-body">

                                         <form action='{{url("college/image_gallery")}}' method="post" enctype="multipart/form-data">
                                            @csrf
                                             <div class="row">
                                              <div class="col-sm-12 ol-md-12 col-xs-12">
                                                  <div class="white-box">
                                                      <h3 class="box-title">File Upload</h3>

                                                      <input type="file" id="input-file-now" class="dropify" name="image[]" multiple/>
                                                  </div>
                                              </div>

                                              </div>


                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Upload</button>
                                              </div>

                                          </form> 
                                    </div>
                                </div>
                              </div>
                            </div>


                        </div>
                              </div>

                        </div>
                              </div>


                                <div id="gallery-content ">
                                  <div id="gallery-content-center">
                                    <div class="popup-gallery m-t-30">

                                      @foreach($user as $user)

                                      <a href="{{ asset($user->file_url) }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here" >
                                      <img src="{{ asset($user->file_url) }}" class="all landscape" alt="gallery" /> </a>

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
@section('js')
    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/gallery/js/animated-masonry-gallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/gallery/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>

     <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script> 
    
     <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>

     <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script> 


@endsection

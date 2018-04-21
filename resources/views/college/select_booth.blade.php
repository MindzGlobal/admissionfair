@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

          <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h4 class="page-title">Select Booth</h4>
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


                         <section>
                                <div class="sttabs tabs-style-bar">
                                    <nav>
                                        <ul>
                                            <li><a href="#section-bar-1" class="sticon ti-home"><span>Select Booth</span></a></li>
                                            <li><a href="#section-bar-2" class="sticon ti-trash"><span>Customized Booth</span></a></li>
                                           
                                        </ul>
                                    </nav>
                              <div class="content-wrap">
                                <section id="section-bar-1">
                                  
                                    <div id="gallery">
                                  <div id="gallery-content ">
                                    <form id="" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('college/insertBooth') }}">
                                    @csrf

                                    <div class="form-group">
                                      <div id="gallery-content-center">
                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/01.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/001.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/02.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/002.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/03.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/003.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/04.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/004.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/05.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/005.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/06.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/006.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/07.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/007.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/08.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/008.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/09.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/009.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/10.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/010.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/11.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/011.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                          <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here">
                                            <img src="{{ asset('college/images/12.jpg') }}" class="all landscape img-check" alt="gallery" />
                                            <input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/012.png') }}" class="hidden" autocomplete="off">
                                          </a>

                                      </div>
                                    </div>
                                    <div class="clearfix"></div>
                                <center><input type="submit" value="SUBMIT" name="submit" class="btn btn-success"></center>
                                </form>
                              </div>
                          </div>
                       </section>
                        <section id="section-bar-2">
                            <h3>You Can Customize Your Booth Here</h3>
                            <p>You can upload multiple images and create your customized booth        
                            </p>

                             <div class="row">
                              <div class="col-md-3 "></div>
                              <div class="col-md-6 media">
                                <img src="{{ asset('college/images/011.png') }}" class="img-responsive" width="500px" height="300px">
                              </div>
                                    <div class="col-md-12">
                                      <form id="" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('college/insertcustombooth') }}">
                                          @csrf
                                      <h3>Select Images To Create Custom Booth</h3>

                                       <div class="white-box">
                                        <h3 class="box-title">File Upload</h3>

                                        <div class="col-md-4">
                                        <input type="file" id="input-file-now" class="dropify" name="custombooth[]" multiple/>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="file" id="input-file-now" class="dropify" name="custombooth[]" multiple/>
                                        </div>

                                        <div class="col-md-4">
                                        <input type="file" id="input-file-now" class="dropify" name="custombooth[]" multiple/>
                                        </div>

                                       </div>
                                       <center><input type="submit" value="SUBMIT" name="submit" class="btn btn-success"></center>
                                      </form>
                                    </div>
                                </div>

                                 

                          </section>
                                        
                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs -->
                          </section>
                        
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

    <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>

    <script src="{{ asset('college/plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>

    <script src="{{ asset('college/js/formValidation.js') }}"></script>

    <script src="{{ asset('college/js/cbpFWTabs.js') }}"></script>

    <script type="text/javascript">
    (function() {

        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });

    })();
    </script>

    <script>  
    $(document).ready(function(e){

      $('.img-check').click(function(e) {
        $('.img-check').not(this).removeClass('btn btn-block btn-success')
        .siblings('input').prop('checked',false);
      $(this).addClass('btn btn-block btn-success')
            .siblings('input').prop('checked',true);
    });

    });
    </script>

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

@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
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
                              <div id="gallery-content ">
                                  <div id="gallery-content-center">

                                    <div class="popup-gallery m-t-30">

                                      <a href="{{ asset('college/plugins/images/assets/landscape1.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape1.jpg') }}" class="all landscape" alt="gallery" /> </a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape2.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape2.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape3.jpg') }}" class="all landscape" alt="gallery" /> </a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape4.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape4.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape5.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape5.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape6.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape6.jpg') }}" class="all landscape" alt="gallery" /> </a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape7.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape7.jpg') }}" class="all landscape" alt="gallery" /> </a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape8.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape8.jpg') }}" class="all landscape" alt="gallery" /> </a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape9.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape9.jpg') }}" class="all landscape" alt="gallery" /> </a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape10.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape10.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape11.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape11.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape12.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape12.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape13.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape13.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape14.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape14.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape15.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape15.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape16.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape16.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape17.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape17.jpg') }}" class="all landscape" alt="gallery" /></a>

                                      <a href="{{ asset('college/plugins/images/assets/landscape18.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/plugins/images/assets/landscape18.jpg') }}" class="all landscape" alt="gallery" /></a>

                                  </div>
college/
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
@endsection

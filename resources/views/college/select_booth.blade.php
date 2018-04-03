@extends('college.layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/gallery/css/animated-masonry-gallery.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
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
                          <div id="gallery">
                              <div id="gallery-content ">
                                <form id="" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('college/insertBooth') }}">
                                @csrf
                                <div class="form-group">
                                  <div id="gallery-content-center">
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/01.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/01.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/02.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/02.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/03.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/03.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/04.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/04.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/05.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/05.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/06.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/06.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/07.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/07.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/08.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/08.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/09.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/09.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/10.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/10.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/11.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/11.jpg') }}" class="hidden" autocomplete="off"></a>
                                      <a  data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('college/images/12.jpg') }}" class="all landscape img-check" alt="gallery" /><input type="radio" name="college_booth" id="item4" value="{{ asset('college/images/12.jpg') }}" class="hidden" autocomplete="off"></a>
                                  </div>
                                </div>
                                <div class="clearfix"></div>
                                <center><input type="submit" value="SUBMIT" name="submit" class="btn btn-success"></center>
                                </form>
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
@endsection

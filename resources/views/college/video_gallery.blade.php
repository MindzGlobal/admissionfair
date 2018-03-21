
@extends('college.layouts.app')
@section('css')
    <link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">

    <style type="text/css">
      .v{
        border:2px solid #8e8e8e;
        width:300px;
        height:240px;
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
                              <div id="gallery-content ">
                                  <div id="gallery-content-center">

                                    <a class="popup-youtube" href="{{ asset('college/plugins/images/assets/video3.mp4') }}">
                                      <video class="v" controls>
                                      <source src="{{ asset('college/plugins/images/assets/video3.mp4') }}" type="video/mp4" class="all landscape popup-youtube btn btn-danger"></video>
                                      </a>
                                    </a>

                                      <a class="popup-youtube" href="{{ asset('college/plugins/images/assets/video3.mp4') }}">
                                      <video class="v" controls>
                                      <source src="{{ asset('college/plugins/images/assets/video3.mp4') }}" type="video/mp4" class="all landscape"></video></a>

                                      <a class="popup-youtube" href="{{ asset('college/plugins/images/assets/video3.mp4') }}">
                                      <video class="v" controls>
                                      <source src="{{ asset('college/plugins/images/assets/video3.mp4') }}" type="video/mp4" class="all landscape"></video></a>

                                      <a class="popup-youtube" href="https://www.youtube.com/embed/tgbNymZ7vqY">
                                      <iframe class="m-t-30" width="300" height="240" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe></a>

                                      <a class="popup-youtube" href="https://www.youtube.com/embed/tgbNymZ7vqY">
                                      <iframe class="m-t-30" width="300" height="240" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe></a>

                                      <a class="popup-youtube" href="https://www.youtube.com/embed/tgbNymZ7vqY">
                                      <iframe class="m-t-30" width="300" height="240" src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe></a>

                                      <a class="popup-youtube" href="{{ asset('college/plugins/images/assets/video3.mp4') }}">
                                      <video class="v" controls >
                                      <source src="{{ asset('college/plugins/images/assets/video3.mp4') }}" type="video/mp4" class="all landscape"></video></a>

                                      <a class="popup-youtube" href="{{ asset('college/plugins/images/assets/video3.mp4') }}">
                                      <video class="v" controls>
                                      <source src="{{ asset('college/plugins/images/assets/video3.mp4') }}" type="video/mp4" class="all landscape"></video></a>

                                      <a class="popup-youtube" href="{{ asset('college/plugins/images/assets/video3.mp4') }}">
                                      <video class="v" controls>
                                      <source src="{{ asset('college/plugins/images/assets/video3.mp4') }}" type="video/mp4" class="all landscape"></video></a>

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

    @endsection
  
</body>

</html>

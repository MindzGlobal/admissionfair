@extends('college.layouts.app')
@section('css')
    <style type="text/css">
    .tabs-style-underline nav li a::after {
    background: #03a9f3;
    }
    .sttabs nav li.tab-current a {
    color: #03a9f3;
      }
    </style>
@endsection

@section('content')
          <div class="container-fluid">
              <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                      <h4 class="page-title">Student Profile</h4> </div>
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                      <ol class="breadcrumb">
                          <li><a href="#">Dashboard</a></li>
                          <li class="active">My Profile</li>
                      </ol>
                  </div>
              </div>
              <!-- /.row -->
              <!-- .row -->
              <div class="row">
                  <div class="col-md-4 col-xs-12">

                        <div class="white-box">
                            <div class="user-bg"> <img src="{{ asset('college/plugins/images/large/img1.jpg') }}" alt="user" style="100%">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href=""><img alt="img" class="thumb-lg img-circle" src="{{ asset('college/plugins/images/users/genu.jpg') }}"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@vaf.com</h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 text-center">
                                      <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"><i class="fa fa-facebook"></i> </button>
                                      <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fa fa-twitter"></i> </button>
                                      <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fa fa-google-plus"></i> </button>
                                    </div>
                                    <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                        <div class="stat-item">
                                            <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                  </div>
                  <div class="col-md-8 col-xs-12">
                     <div class="white-box">
                          <h4 class="m-t-30">Basic Details</h4>
                            <hr>
                            <ul>
                                <li><b>Name</b> - asdf</li>
                                <li><b>Date Of Birth</b> - 07/08/1994</li>
                                <li><b>Gender</b> - Female</li>
                                <li><b>E-mail ID</b> - asdf@g.com</li>
                                <li><b>Contact Number</b> - 7894656281</li>
                                <li><b>Country</b> - India</li>
                                <li><b>State</b> - Karnatka</li>
                                <li><b>City</b> - Bangalore</li>
                                <li><b>Pincode</b> - 782002</li>
                                <li><b>Address</b> - Shivaji Nagar</li>
                            </ul>

                            <h4 class="m-t-30">SSLC Details</h4>
                            <hr>
                            <ul>
                                <li><b>Board</b> - MP Board</li>
                                <li><b>Passout Year</b> - 2010</li>
                                <li><b>Marks</b> - 78%</li>
                                <li><b>Medium</b> - English</li>
                            </ul>

                            <h4 class="m-t-30">PUC Details</h4>
                            <hr>
                            <ul>
                                <li><b>Board</b> - MP Board</li>
                                <li><b>Passout Year</b> - 2012</li>
                                <li><b>Marks</b> - 70%</li>
                                <li><b>Medium</b> - English</li>
                            </ul>

                            <h4 class="m-t-30">Graduation Details</h4>
                            <hr>
                            <ul>
                                <li><b>University</b> - RGPV</li>
                                <li><b>Course</b> - B. Tech</li>
                                <li><b>Graduation Type</b> - Full Time</li>
                                <li><b>Marks</b> - 72%</li>
                            </ul>

                        </div>
                  </div>
              </div>
          </div>
@endsection
@section('js')

@endsection

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

@section('js')
    <!--Style Switcher -->
    <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script type="text/javascript">
        (function() {
        
            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });
        
        })();
    </script>
@endsection
@section('content')
<!-- Page Content -->
<div class="container-fluid">
        <div class="row bg-title">
           <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">My Profile</h4>
           </div>
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
                 <div class="user-bg">
                    <img width="100%" alt="user" src="{{ asset('college/plugins/images/big/img1.jpg') }}">
                 </div>
                 <div class="fileupload btn btn-info btn-rounded waves-effect waves-light pull-right"><span><i class="ion-upload m-r-5 fa fa-pencil-square-o "></i>Upload</span>
                    <input type="file" class="upload">
                 </div>
                 <div class="user-btm-box">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                       <div class="col-md-12">
                          <strong>College Name</strong>
                          <p>E104, Dharti-2, Chandlodia Ahmedabad</p>
                       </div>
                    </div>
                    <hr>
                    <div class="row text-center m-t-10">
                       <div class="col-md-12">
                          <strong>College Location</strong>
                          <p>Chandlodia Ahmedabad Gujarat, India.</p>
                       </div>
                    </div>
                    <hr>
                    <div class="row text-center m-t-10">
                       <div class="col-md-12">
                          <strong>College Address</strong>
                          <p>E104, Dharti-2, Chandlodia Ahmedabad
                             <br> Gujarat, India.
                          </p>
                       </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <div class="col-md-12 col-sm-12 text-center">
                       <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fa fa-facebook"></i> </button>
                       <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fa fa-google-plus"></i> </button>
                       <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fa fa-twitter"></i> </button>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-md-8 col-xs-12">
              <div class="white-box">
                 <!-- Tabstyle start -->
                 <section class="m-t-20">
                    <div class="sttabs tabs-style-underline">
                       <nav>
                          <ul>
                             <li class=""><a href="#section-underline-1" class="sticon fa fa-university"><span>College Details</span></a></li>
                             <li class=""><a href="#section-underline-4" class="sticon fa fa-graduation-cap"><span>Courses Details</span></a></li>
                          </ul>
                       </nav>
                       <br>
                       <div class="content-wrap">
                          <section id="section-underline-1" class="">
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Official Email ID</label>
                                <div class="col-md-12">
                                   asdf@gmail.com
                                </div>
                             </fieldset>
                             <hr>
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Mobile Number</label>
                                <div class="col-md-12">
                                   9988665588
                                </div>
                             </fieldset>
                             <hr>
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Landline Number</label>
                                <div class="col-md-12">
                                   022678998
                                </div>
                             </fieldset>
                             <hr>
                             <fieldset disabled="">
                                <label for="" class="col-md-12">College Website URL</label>
                                <div class="col-md-12">
                                   asdf@gmail.com
                                </div>
                             </fieldset>
                             <hr>
                          </section>
                          <section id="section-underline-2" class="" style="padding:0px;">
                             <div class="white-box">
                                <div class="table-responsive">
                                   <table class="table table-bordered">
                                      <thead>
                                         <tr>
                                            <th>Courses Offered</th>
                                            <th>Course duration</th>
                                            <th>Fee Structure:</th>
                                            <th>Fee Structure (PDF Format)</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                         <tr>
                                            <td>Bacholar of Enginering</td>
                                            <td>4 Years </td>
                                            <td>4,00,000 </td>
                                            <td>----</td>
                                         </tr>
                                         <tr>
                                            <td>Master of Computer Science</td>
                                            <td>4 Years </td>
                                            <td>4,00,000 </td>
                                            <td>----</td>
                                         </tr>
                                         <tr>
                                            <td>Bacholar of Fine Arts</td>
                                            <td>4 Years </td>
                                            <td>4,00,000 </td>
                                            <td>----</td>
                                         </tr>
                                         <tr>
                                            <td>Master of Commerce</td>
                                            <td>4 Years </td>
                                            <td>4,00,000 </td>
                                            <td>----</td>
                                         </tr>
                                         <tr>
                                            <td>Bacholar of Science </td>
                                            <td>4 Years </td>
                                            <td>4,00,000 </td>
                                            <td>----</td>
                                         </tr>
                                         <tr>
                                            <td>Master of Science</td>
                                            <td>4 Years </td>
                                            <td>4,00,000 </td>
                                            <td>----</td>
                                         </tr>
                                      </tbody>
                                   </table>
                                </div>
                             </div>
                          </section>
                       </div>
                       <!-- /content -->
                    </div>
                    <!-- /tabs -->
                 </section>
                 <!-- Tabstyle start -->
              </div>
           </div>
        </div>
        <!-- /.row -->
     </div>
<!-- /#page-wrapper -->
@endsection

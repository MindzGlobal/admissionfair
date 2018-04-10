@extends('college.layouts.app')
@section('css')
    <style type="text/css">
    .tabs-style-underline nav li a::after {
    background: #03a9f3;
    }
    .sttabs nav li.tab-current a {
    color: #03a9f3;
      }
    .table tr{padding: 0px 0px;}
    .just{
        text-align:justify;
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
                            <div class="user-bg"> <img src="{{asset('college/plugins/images/large/img1.jpg')}}" alt="user" style="100%">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="{{ asset($students->profile_image) }}"></a>
                                        <h4 class="text-white">{{ $students->first_name. ". " .$students->last_name }}</h4>
                                        <h5 class="text-white">{{ $students->email }}</h5>
                                        <b><p class="text-white"><i class="ti-mobile"></i> {{ $students->mobile }}</p></b></div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="row">
                                   <div class="col-md-12 col-sm-12 text-center">
                                   <h5 class="text-info"><dt>APPLIED DETAILS</dt></h5>
                                   <ul class="list-icons m-l-30 just">   
                                        <li><i class="fa fa fa-check text-info"></i><span><i class="fa fa-graduation-cap"></i><b> Course Applied:</b> {{ $student_applied->course }}</span></li>
                                        <li><i class="fa fa fa-check text-info"></i><span><i class="ti-user"></i><b> Department :</b> {{ $student_applied->department }}</span></li>
                                        <li><i class="fa fa fa-check text-info"></i><span><i class="fa fa-money"></i><b> Payment status:</b>
                                        @if ($student_applied->pay_status == "Not Paid")
                                        <span class="label label-rouded label-danger">Not Paid</span>
                                        @else<span class="label label-rouded label-success">Paid</span>
                                        @endif</span></li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>

                  </div>
                  <div class="col-md-8 col-xs-12">
                     <div class="white-box">
                          <div class="table-responsive">
                                <table class="table ">

                                    <tbody>
                                        <div class="panel panel-info">
                                        <div class="panel-heading"> Basic Details
                                            <div class="pull-right"></div>
                                        </div></div>
                                        <tr>
                                            <td><b>Name</b></td>
                                            <td>{{ $students->first_name. ". " .$students->last_name }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Date Of Birth</b></td>
                                            <td>{{ $students->date_of_birth }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Gender</b></td>
                                            <td>{{ $students->gender }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>E-mail ID</b></td>
                                            <td>{{ $students->email }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Contact Number</b></td>
                                            <td>{{ $students->mobile }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Country</b></td>
                                            <td>{{ $students->country }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>State</b></td>
                                            <td>{{ $students->state }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>City</b></td>
                                            <td>{{ $students->city }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Address</b></td>
                                            <td>{{ $students->address }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Pincode</b></td>
                                            <td>{{ $students->pincode }}</td>

                                        </tr>                                       
                                        </tbody>
                                    </table>
                                    

                                    
                                     <table class="table ">

                                        <tbody>
                                        <div class="panel panel-info m-t-30">
                                        <div class="panel-heading"> SSLC Details
                                            <div class="pull-right"></div>
                                        </div></div>
                                        <tr>
                                            <td><b>Board</b></td>
                                            <td>{{ $student_educations->ssc_board }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Passout Year</b></td>
                                            <td>{{ $student_educations->ssc_yop }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Marks</b></td>
                                            <td>{{ $student_educations->ssc_perc }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Medium</b></td>
                                            <td>{{ $student_educations->ssc_medium }}</td>

                                        </tr>
                                    </tbody>

                                </table>
                               

                                     <table class="table">

                                        <tbody>
                                        <div class="panel panel-info m-t-30">
                                        <div class="panel-heading"> PUC Details
                                            <div class="pull-right"></div>
                                        </div></div>
                                        <tr>
                                            <td><b>Board</b></td>
                                            <td>{{ $student_educations->hsc_board }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Passout Year</b></td>
                                            <td>{{ $student_educations->hsc_yop }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Marks</b></td>
                                            <td>{{ $student_educations->hsc_perc }}%</td>

                                        </tr>
                                        <tr>
                                            <td><b>Medium</b></td>
                                            <td>{{ $student_educations->hsc_medium }}</td>

                                        </tr>
                                    </tbody>

                                </table>
                                
                                @if (!is_null($student_graduations))
                                 <table class="table">
                                        <tbody>
                                        <div class="panel panel-info m-t-30">
                                        <div class="panel-heading"> Graduation Details
                                            <div class="pull-right"></div>
                                        </div></div>
                                        <tr>
                                            <td><b>University</b></td>
                                            <td>{{ $student_graduations->university_name }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Course</b></td>
                                            <td>{{ $student_graduations->course }}</td>

                                        </tr>
                                        <tr>
                                            <td><b>Marks</b></td>
                                            <td>{{ $student_graduations->marks }}%</td>

                                        </tr>
                                        <tr>
                                            <td><b>Graduation Type</b></td>
                                            <td>{{ $student_graduations->graduation_type }}</td>

                                        </tr>
                                    </tbody>                             
                                </table>
                                @endif 
                            </div>

                        </div>
                  </div>
              </div>
             
              <!-- /.row -->
          </div>
@endsection
    <!-- jQuery -->
    @section('js')
   
    <script type="text/javascript">
    (function() {

        [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
            new CBPFWTabs(el);
        });

    })();
    </script>
    <!--Style Switcher -->
   
    @endsection
</body>

</html>

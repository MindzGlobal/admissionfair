@extends('student.layouts.student_general')
@section('title', "Single Booth")

@section('css')
    <style type="text/css">

      .btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
    width: 113%!important;
    height: 100px!important;
    margin-left: -86%;
}
.col-md-3 {
    width: 36%;
    margin-top: -4%;
    margin-left: 14%;
}
.page-title-box {
    position: relative;
    top: 95px;
    color: #fff;
    background: rgba(0, 0, 0, 0.7)!important;
    padding: 5px 66px;
    display: inline-block;
    float: left;
    margin-left: -11%;
}
.btn.focus, .btn:focus, .btn:hover {
    color: #fff!important;
    text-decoration: none;
}
.panel-group {
    margin-bottom: 20px;
    max-height: 300px;
    overflow-y: auto;
}
.null{
background: #15030394;
    padding: 38px;
    margin-left: -5px;
    margin-top: -1%;
}
.bg
{
    height:620px!important;
}

.pos
{
    position:absolute;
    top:8% 
}
.test {
    word-wrap: break-word;
    width: 80%;
}
   </style>

    @endsection



@section('content')
       <!-- Strat Banner Section -->
       <div class=" padding-bt-150 banner-height bg" style="background:url({{ asset('student/booth/images/booth.jpg')}});">
            <div class="container">
            
                        <!-- Strat Banner Section -->
                        <div class=" padding-bt-150 pos">
                         <div class="container">
                      <div class="page-title-box">
                      <h3 class=" text-center test">Single Booth-College sfgfdfd <h3p>
                      </div>
                      </div>
                           <!-- particles.js container -->
                           <div class="col-md-6">
                              <img src="{{ asset('student/booth/images/0010.png')}}" alt="" style="margin-left:-15%">
                                          <div class="col-md-3">
                              <button class="btn-default dg">Video Gallery</button>
                              </div>
                              <div class="col-md-3">
                                  <button class=" btn-default">Image Gallery</button>
                          </div>
                           </div>
                     
                  <div class="col-md-6 null">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                       <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingOne">
                                             <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Engineering Courses 
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                             <div class="panel-body">
                                                <ul class="disc">
                                                   <li>computer science Engineering</li>
                                                   <li>Civil Engineering</li>
                                                   <li>Mechanical Engineering</li>
                                                   <li>Civil Engineering</li>
                                                   <li>Mechanical Engineering</li>
                                                </ul>
                                                <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingTwo">
                                             <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Undergraduate Education
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                             <div class="panel-body">
                                                <ul class="disc">
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                </ul>
                                                <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingThree">
                                             <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Graduate Education 
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                             <div class="panel-body">
                                                <ul class="disc">
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                </ul>
                                                <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingFour">
                                             <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Law Courses
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                             <div class="panel-body">
                                                <ul class="disc">
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                </ul>
                                                <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingFive">
                                             <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Management Courses
                                                </a>
                                             </h4>
                                          </div>
                                          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                             <div class="panel-body">
                                                <ul class="disc">
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                   <li>computer science </li>
                                                </ul>
                                                <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button>	  
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
            </div>
          
        
    {{----------------------------------------------End of modal section of image upload------------------------------------------------------}}
@endsection



      

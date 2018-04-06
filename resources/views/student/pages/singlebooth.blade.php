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
}
.col-md-3 {
    width: 36%;
    margin-top: 0%;
    margin-left: 9%;
}
.page-title-box {
    position: relative;
    top: 95px;
    color: #fff;
    background: rgba(0, 0, 0, 0.7)!important;
    padding: 5px 66px;
    display: inline-block;
    float: left;
}
.panel-group {
    margin-bottom: 20px;
    height: 300px;
    overflow: scroll;
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
                      <h3>Single Booth-College</h3>
                      </div>
                      </div>
                           <!-- particles.js container -->
                           <div class="col-md-6">
                              <img src="{{ asset('student/booth/images/0010.png')}}" alt="">
                                          <div class="col-md-3">
                              <button class="btn-default dg">Video Gallery</button>
                              </div>
                              <div class="col-md-3">
                                  <button class=" btn-default">Image Gallery</button>
                          </div>
                           </div>
                        <br>
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
            <!-- particles.js container -->
            {{-- <div id="particles-js"></div> --}}
         
    {{----------------------------------------------End of modal section of image upload------------------------------------------------------}}
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('student/js/dropify.js')}}"></script>
        <!-- Import Particles Js -->
<script type="text/javascript">

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
    });// end of document ready function
         
    function myFunction() {
        var x = document.getElementById("View-Degree");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        if (this.value=="view more") this.value = "view less";
        else this.value = "view more";
    }
 
    $(".button").click(function() {
    $(".button span").html($(".button span").html() == 'View More' ? 'View Less' : 'View More');

        var x = document.getElementById("View-Degree");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
    });
    
   
    </script>
@endsection
      

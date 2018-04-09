@extends('student.layouts.student_general')
@section('title', "Single Booth")
@section('css')
<style type="text/css">
   .btn-default {
   color: #fff;
   background-color: #4a92c31c;
   border-color: #ccc;
   width: 113%!important;
   height: 80px!important;
   border-radius: 50px;
    border: 2px solid #3c17179c;
	font-size: 18px;
   }

   .page-title-box {
   position: relative;
   top: 95px;
   color: #fff;
   background: #15030394;
   padding: 5px 66px;
   margin: 27px 3px 7% 4px;

   }
   .btn.focus, .btn:focus, .btn:hover {
   color: #fff!important;
   text-decoration: none;
   }
   .panel-group {
   margin-bottom: 20px;
   max-height: 300px;
   overflow-y: auto;
   margin-top: 10%;
   background: #15030394;
    padding: 20px;
   }

   .acc>li:hover
      {
        padding: 7px 7px;
        color: #333333;
        font-weight: bold;
        text-transform: uppercase;
        border-left: 5px solid transparent;
        border-top: 1px solid #eeeeee;
        border-left-color: #2980b9;
        background: #eee;
      }
.v_gallery
{
	position: relative;
    left: 12%;
}
@media only screen and (max-width: 600px) {
.singlebooth
	{
height:850px!important;
	}
	.overlay
	{
	height:850px!important;	
	}
}
</style>
@endsection
@section('content')
<!-- Strat Banner Section -->
<div class="singlebooth" style="background: url(http://localhost/admissionfair/public/student/booth/images/booth.jpg);
    height: 600px;">
	<div class="overlay" style="background: #3384803b;
    height: 600px;">
   <div class="container">
      <!-- Strat Banner Section -->
      <div class=" padding-bt-150">
 
     
         <!-- particles.js container -->
		 <div class="row container">
		         <div class="col-md-12">
            <div class="page-title-box">
               <h3 class=" text-center test">{{$college->college_name}}<h3>
            </div>
			</div>
         <div class="col-md-6 col-sm-12">
            <img src="{{ asset('student/booth/images/0010.png')}}" alt="">
			<center class="v_gallery">
            <div class="col-md-4">
               <button class="btn-default dg">Video Gallery</button>
            </div>
            <div class="col-md-4">
               <button class=" btn-default">Image Gallery</button>
            </div>
			</center>
         </div>
         <div class="col-md-6 col-sm-12">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($courseDetail as $data)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{ $loop->iteration }}">
                        <h4 class="panel-title">
                        <a class="{{$loop->iteration ==1 ?'collapse' :'collapsed'}}" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->iteration }}" aria-expanded="false" aria-controls="collapse{{ $loop->iteration }}">
                            {{ $data['course']}} 
                        </a>
                        </h4>
                    </div>
                    <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $loop->iteration }}">
                        <div class="panel-body">
                        <ul class="acc">
                            @foreach($data['departments'] as $d_data)
                        <li><a href="{{ url('student/'.$college->reg_id.'/'.$d_data->id.'')}}"><i class=" fa fa-hand-o-right"></i> {{ $d_data->Dept}}</a></li>
                            @endforeach
                        </ul>
                        {{-- <button class="btn more-link pull-right next-step" id="send" onclick="ViewCourse();">Read More</button> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
         </div>
		 </div>
      </div>
   </div>
</div>
</div>
{{----------------------------------------------End of modal section of image upload------------------------------------------------------}}
@endsection
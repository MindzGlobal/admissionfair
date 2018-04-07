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
   background: #15030394;
  
   display: inline-block;
   float: left;
   width:30%;
   }
   .page-title-box h3
{
    font-size:12px!important;
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
   width:99%;
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

      #clg-logo{
        width: 238px;
        position: absolute;
        margin: 51px 66px;
        height: 73px;
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
               <h3 class=" text-center test">{{$college->college_name}}<h3>
            </div>
         </div>
         <!-- particles.js container -->
         <div class="col-md-6">
            <img src="{{ asset($college->college_img)}}" alt="{{ $college->college_name }}" id="clg-logo">
            <img src="{{ asset($college->college_booth)}}" alt="" style="margin-left:-15%">
            <div class="col-md-3">
               <button class="btn-default dg" onclick="location.href='{{ url('student/video/'.$college->reg_id.'/gallery')}}';">Video Gallery</button>
            </div>
            <div class="col-md-3">
               <button class=" btn-default" onclick="location.href='{{ url('student/image/'.$college->reg_id.'/gallery')}}';">Image Gallery</button>
            </div>
         </div>
         <div class="col-md-6 null">
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
{{----------------------------------------------End of modal section of image upload------------------------------------------------------}}
@endsection
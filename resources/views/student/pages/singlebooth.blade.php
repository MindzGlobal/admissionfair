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
   font-family: poppins!important;
   }
   .page-title-box {
   position: relative;
   top: 95px;
   color: #fff;
   background: #15030394;
   padding: 3px 66px;
   margin: 27px 3px 7% 4px;
   display: inline-block!important;
   text-align: justify!important;
   }
   .btn.focus, .btn:focus, .btn:hover {
   color: #fff!important;
   text-decoration: none;
   }
   .panel-group {
   margin-bottom: 20px;
   min-height: 300px;
   overflow-y: auto;
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
   left: -4%;
   margin-top: -12%;
   }
   #clg-logo
   {
   width: 238px;
   position: absolute;
   margin: 42px 52px;
   height: 111px;
   border-radius: 15px;
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
   select {
   appearance: none;
   -webkit-appearance: menulist;
   }
   .outer-col {
   position: fixed;
   right: 5px;
   bottom: -399px;
   width: 400px;
   background: #ccc;
   z-index: 99;
   }
   .heading {
   float: left;
   width: 100%;
   background:#2980b9;
   color: #fff;
   font-size: 18px;
   font-weight: bold;
   padding: 10px;
   font-family: arial;
   border-radius: 5px 5px 0 0;
   cursor: pointer;
   }
   .form-col {
   float: left;
   width: 100%;
   height:400px;
   padding: 10px;
   border: 1px solid #999;
   }
   .form-col input {
   float: left;
   width: 100%;
   height: 40px;
   margin-bottom:8px;
   padding: 10px;
   background:#fff;
   }
   .form-col button {
   float: left;
   border-radius: 5px;
   background: #258790;
   color: #fff;
   font-size: 16px;
   font-family: arial;
   border: 0;
   padding: 10px;
   margin-bottom:0px;
   }
   .clickable {
   cursor: pointer;
   }
   .para {
   text-align: justify!important;
   }
   h4 {
   color: #2fadb9!important;
   font-weight: 600;
   }
   .panel-heading span {
   margin-top: -20px;
   font-size: 15px;
   }
   .footer-info {
   padding-top: 4%;
   }
   a,
   a:visited {
   color: #000;
   text-decoration: none!important;
   outline: 0;
   font-weight: normal;
   }
   textarea
   {
   margin-top: -3%;
   height:88px;
   }
   @media only screen and (max-width: 560px) 
   {
   .outer-col
   {
   width: 316px!important;
   }
   .vc_row-fluid
   {
   margin-top:-41%!important;
   }
   }
   blockquote
   {
   text-align: justify;
   background: #f8f8f8;
   border-color: #5bbc2e;
   font-size: 16px;
   position: relative;
   overflow: hidden;
   font-family: popins;
   padding: left;
   margin-left: 14px;
   }
   .main-section{
   width: 300px;
   position: fixed;
   right:50px;
   bottom:-350px;
   }
   .first-section:hover{
   cursor: pointer;
   }
   .open-more{
   bottom:0px;
   transition:2s;
   }
   .border-chat{
   border:1px solid #2980b9;
   margin: 0px;
   }
   .first-section{
   background-color:#FD8468;
   }
   .first-section p{
   color:#fff;
   margin:0px;
   padding: 10px 0px;
   }
   .first-section p:hover{
   color:#fff;
   cursor: pointer;
   }
   .right-first-section{
   text-align: right;
   }
   .right-first-section i{
   color:#fff;
   font-size: 15px;
   padding: 12px 3px;
   }
   .right-first-section i:hover{
   color:#fff;
   }
   .chat-section ul li{
   list-style: none;
   margin-top:10px;
   position: relative;
   }
   .chat-section{
   overflow-y:scroll;
   height:300px;
   }
   .chat-section ul{
   padding: 0px;
   }
   .left-chat img,.right-chat img{
   width:50px;
   height:50px;
   float:left;
   margin:0px 10px;
   }
   .right-chat img{
   float:right;
   }
   .second-section{
   padding: 0px;
   margin: 0px;
   background-color: #F3F3F3;
   height: 300px;
   }
   .left-chat,.right-chat{
   overflow: hidden;
   }
   .left-chat p,.right-chat p{
   background-color:#2980b9;
   padding: 10px;
   color:#fff;
   border-radius: 5px; 
   float:left;
   width:60%;
   margin-bottom:20px;
   }
   .left-chat span,.right-chat span{
   position: absolute;
   left:70px;
   top:60px;
   color:#B7BCC5;
   }
   .right-chat span{
   left:45px;
   }
   .right-chat p{
   float:right;
   background-color: #FFFFFF;
   color:#2980b9;
   }
   .third-section{
   border-top: 1px solid #EEEEEE;
   }
   .text-bar input{
   width:108%;
   margin-left:-15px;
   padding:10px 10px;
   border:1px solid #fff;
   }
   .text-bar a i{
   background-color:#2980b9;
   color:#fff;
   width:30px;
   height:30px;
   padding:7px 0px;
   border-radius: 50%;
   text-align: center;
   float: right;
   margin-top: -9%!important;
   position: relative!important;
   }
   .left-chat:before{
   content: " ";
   position:absolute;
   top:0px;
   left:55px;
   bottom:150px;
   border:15px solid transparent;
   border-top-color:#2980b9; 
   }
   .right-chat:before{
   content: " ";
   position:absolute;
   top:0px;
   right:55px;
   bottom:150px;
   border:15px solid transparent;
   border-top-color:#fff; 
   }
   .course_style{
   font-style: italic;
   color: #d6c3c3;
   }
   p {
    margin: 0 0 0px!important;
}
</style>
@endsection
@section('content')
<!-- Strat Banner Section -->
<div class="singlebooth" style="background:url('{{ asset('student/images/admition.jpg') }}');
   height:780px;background-size: cover;
   background-repeat: no-repeat;">
   <div class="overlay" style="background: #3384803b;
      height:100vh;    background-size: cover;
      background-repeat: no-repeat;">
      <div class="container">
         <!-- Strat Banner Section -->
         <div class=" padding-bt-150">
            <!-- particles.js container -->
            <div class="row container">
               <div class="col-md-12">
                  <div class="page-title-box">
                     <div id="qr" style="display: inline-block;
                     max-width:165px;
                     max-height: 100px;
                     align: center;
                     /* vertical-align: middle; */
                     margin-left: -11%;">
                        <img src="{{ asset('student/images/blog/logo.png') }}" alt="">
                     </div>
                     <div style="display:inline-block;vertical-align: middle;margin-top: 0%;position:  relative;">
                        <p style="font-size:16px">{{$college->college_name}}</p>
                        <p class="course_style">{{ $college->college_state}},{{ $college->college_city}}</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-12">
               <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"></iframe>
               </div>
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
         <br>
         <div class="row">
            <div class="col-md-6">
               <div class="post-content">
                  <blockquote>
                     <h3 class="text-center" style="color:#ff9600"> <i class="fa fa-quote-left"></i> welcome message <i class="fa fa-quote-right"></i></h3>
                     {!!$college->About_college!!}
                  </blockquote>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<section class="container">
   <div class="col-sm-6">
      <div class="outer-col" style="bottom:-346px;">
         <div class="heading">Get In Touch<i class="fa fa-clone pull-right"></i></div>
         <div class="row border-chat">
            <div class="col-md-12 col-sm-12 col-xs-12 second-section">
               <div class="chat-section">
                  <ul>
                     <li>
                        <div class="left-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.
                           </p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="right-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.Lorem ipsum dolor sit ameeserunt.Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="left-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="right-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="left-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="right-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="left-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                     <li>
                        <div class="right-chat">
                           <img src="{{ asset('student/images/blog/2.jpg') }}" alt="">
                           <p>Lorem ipsum dolor sit ameeserunt.</p>
                           <span>2 min</span>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row border-chat">
            <div class="col-md-12 col-sm-12 col-xs-12 third-section">
               <div class="text-bar">
                  <input type="text" placeholder="Write messege"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
{{----------------------------------------------End of modal section of image upload------------------------------------------------------}}
@endsection
@section('js')
<script type="text/javascript">
   $(function() {
   var hidden = true;
   $(".heading").click(function() {
    if (hidden) {
     $(this).parent('.outer-col').animate({
      bottom: "0"
     }, 1200);
    } else {
     $(this).parent('.outer-col').animate({
      bottom: "-346px"
     }, 1200);
    }
    hidden = !hidden;
   });
   });
   $(document).ready(function(){
   $(".left-first-section").click(function(){
      $('.main-section').toggleClass("open-more");
   });
   });
   $(document).ready(function(){
   $(".fa-minus").click(function(){
      $('.main-section').toggleClass("open-more");
   });
   });
   
</script>
@endsection
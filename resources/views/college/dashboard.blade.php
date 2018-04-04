@extends('college.layouts.app')
@section('css')
    <style type="text/css">
   
        .font15{
            font-size:15px;
        }
    .pagination>.active>a {
    background-color: #03a9f3;
    border-color: #03a9f3;
    </style>
@endsection

@section('js')
    <!--Style Switcher -->
    <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    
@endsection
@section('content')
<!-- Page Content -->
<div class="container-fluid">
                <div class="row bg-title">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                        <ol class="breadcrumb">
                                            <li><a href="#">Dashboard</a></li>
                                            <li class="active">Widgets</li>
                                        </ol>
                                    </div>
                                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">

                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <!-- <h4>Icon widget <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="" data-toggle="tooltip" data-original-title="Get Code"></i></a></h4> -->
                        <!-- <div class="collapse m-t-15" id="pgr1" aria-expanded="true"> <pre class="line-numbers language-javascript m-t-0"><code><b>Use below code &amp; put in column</b><br>
                          &lt;div class="white-box"&gt;
                              &lt;h3 class="box-title"&gt;Applied Student&lt;/h3&gt;
                              &lt;ul class="list-inline two-part"&gt;
                              &lt;li&gt;&lt;i class="icon-people text-info"&gt;&lt;/i&gt;&lt;/li&gt;
                              &lt;li class="text-right"&gt;&lt;span class="counter"&gt;23&lt;/span&gt;&lt;/li&gt;
                              &lt;/ul&gt;
                          &lt;/div&gt;</code></pre> </div> -->
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">Applied Student</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-people text-info"></i></li>
                                        <li class="text-right"><span class="counter">23</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">Courses</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-book-open text-purple"></i></li>
                                        <li class="text-right"><span class="counter">169</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">Department</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class=" icon-layers text-danger"></i></li>
                                        <li class="text-right"><span class="counter">311</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12">
                                <div class="white-box">
                                    <h3 class="box-title">NEW Invoices</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="ti-wallet text-success"></i></li>
                                        <li class="text-right"><span class="counter">117</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Applied Student History</h3>
                            <!-- <p class="text-muted m-b-20">Add<code>.table-striped</code>for borders on all sides of the table and cells.</p> -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                 <!--    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th>Deadline</th>
                                           
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img alt="img" class="thumb-lg img-circle" src="{{asset ('college/plugins/images/users/agent.jpg') }}"></td>
                                            <td>
                                                  <div class="">
                                                <p class="font15">
                                                   <b class="text-info ">Name :</b>  Aakanksha
                                                </p>    
                                                <p class="font15"><b class="text-info ">E-mail -</b> aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Mobile - </b>aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Course applied -</b> aaknksha@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-40">
                                                <button type="submit" class="btn btn-info btn-rounded ">View Profile</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img alt="img" class="thumb-lg img-circle" src="{{asset ('college/plugins/images/users/agent.jpg') }}"></td>
                                            <td>
                                                  <div class="">
                                                <p class="font15">
                                                   <b class="text-info ">Name :</b>  Aakanksha
                                                </p>    
                                                <p class="font15"><b class="text-info ">E-mail -</b> aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Mobile - </b>aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Course applied -</b> aaknksha@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-40">
                                                <button type="submit" class="btn btn-info btn-rounded ">View Profile</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <img alt="img" class="thumb-lg img-circle" src="{{asset ('college/plugins/images/users/agent.jpg') }}"></td>
                                            <td>
                                                  <div class="">
                                                <p class="font15">
                                                   <b class="text-info ">Name :</b>  Aakanksha
                                                </p>    
                                                <p class="font15"><b class="text-info ">E-mail -</b> aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Mobile - </b>aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Course applied -</b> aaknksha@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-40">
                                                <button type="submit" class="btn btn-info btn-rounded ">View Profile</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                       <tr>
                                            <td>
                                                <img alt="img" class="thumb-lg img-circle" src="{{asset ('college/plugins/images/users/agent.jpg') }}"></td>
                                            <td>
                                                <div class="">
                                                <p class="font15">
                                                   <b class="text-info ">Name :</b>  Aakanksha
                                                </p>    
                                                <p class="font15"><b class="text-info ">E-mail -</b> aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Mobile - </b>aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Course applied -</b> aaknksha@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-40"><button type="submit" class="btn btn-info btn-rounded ">View Profile</button>
                                                </div>
                                            </td>
                                            
                                        </tr>

                                         <tr>
                                            <td>
                                                <img alt="img" class="thumb-lg img-circle" src="{{asset ('college/plugins/images/users/agent.jpg') }}"></td>
                                            <td>
                                                <div class="">
                                                <p class="font15">
                                                   <b class="text-info ">Name :</b>  Aakanksha
                                                </p>    
                                                <p class="font15"><b class="text-info ">E-mail -</b> aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Mobile - </b>aaknksha@gmail.com</p>
                                                <p class="font15"><b class="text-info ">Course applied -</b> aaknksha@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-40"><button type="submit" class="btn btn-info btn-rounded ">View Profile</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                       
                                        
                                    </tbody>
                                </table>

                                <ul class="pagination pagination-split pull-right">
                                <li> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                                <li class="active"> <a href="#">1</a> </li>
                                <li class=""> <a href="#">2</a> </li>
                                <li> <a href="#">3</a> </li>
                                <li> <a href="#">4</a> </li>
                                <li> <a href="#">5</a> </li>
                                <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                            </ul>
                            </div> 



                        </div>
                    </div> 

        <!-- /.row -->
                   <!--  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h4 class="box-title">Recent Properties</h4>
                            <div class="pro-list">
                                <div class="pro-img p-r-10">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('college/plugins/images/property/prop1.jpeg') }}" class="img-circle" alt="property" style="width: 100px; height: 66px;">
                                    </a>
                                </div>
                                <div class="pro-detail">
                                    <h5 class="m-t-0 m-b-5">
                                        <a href="javascript:void(0)">Aakanksha Tamrakar</a>
                                    </h5>
                                    <p class="text15">E-mail - aaknksha@gmail.com</p>
                                    <p class="text15">Mobile - aaknksha@gmail.com</p>
                                    <p class="text15">Course applied - aaknksha@gmail.com</p>
                                </div>
                            </div>
                           
                            <div class="text-right">
                                <a href="javascript:void(0);" class="btn btn-sm btn-rounded btn-info m-t-10">View All</a>
                            </div>
                        </div>
                    </div>
 -->
           <!--      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 agent-info"  style="height:230px;">
                            <div class="m-t-30 text-center" >
                                <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="{{ asset('college/plugins/images/users/agent.jpg') }}"></a>
                                <h4>Jon Doe</h4>
                                <h5>Student</h5>
                            </div>
                           
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-l-0 p-r-0">
                            <div class="white-box" style="height:230px;">
                                <h4 class="box-title">Request Inquiry</h4>
                                <form class="form-horizontal form-agent-inq">
                                    
                                    <div class="form-group">
                                        <div class="col-md-12">
                                           E-mail = aakanksha@gmail.com
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                           Mobile = 7894561234
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                          Course Applied = B. Tech
                                        </div>
                                    </div>
                                    <div class="agent-contact text-left m-t-30">
                            <button type="submit" class="btn btn-info btn-rounded ">View Profile</button>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div> -->

                   

                </div>

                 </div>    




    
<!-- /#page-wrapper -->
@endsection

@extends('college.layouts.app')
@section('css')
    <style type="text/css">
   
        .font15{
            font-size:15px;
        }
    .pagination>.active>a {
        background-color: #03a9f3;
        border-color: #03a9f3;
    }

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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <center><img alt="img" class="thumb-lg img-circle" src="{{ asset($user->profile_image) }}"></center>
                                                <br>@if ($user->pay_status == "Not Paid")
                                                <center><span class="label label-rouded label-danger">Not Paid</span></center>
                                                @else<center><span class="label label-rouded label-success">Paid</span></center>
                                                @endif</td>
                                            <td>
                                                <div class="m-l-40">
                                                <p class="font15">
                                                   <b class="text-info ">Name :</b> {{ $user->first_name. ". " .$user->last_name }}
                                                </p>    
                                                <p class="font15"><b class="text-info ">E-mail -</b> {{ $user->email }}</p>
                                                <p class="font15"><b class="text-info ">Mobile - </b> {{ $user->mobile }}</p>
                                                <p class="font15"><b class="text-info ">Course applied -</b> {{ $user->course }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="m-t-40 text-center">
                                                <a href='{{ url("college/std_profile/{$user->student_id}") }}'><button type="submit" class="btn btn-info btn-rounded ">View Profile</button></a>
                                                </div>
                                            </td>   
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>
                                <div class="pull-right">{{ $users->links() }}</div>
                            </div> 
                        </div>
                    </div> 
                </div>

                 </div>      
<!-- /#page-wrapper -->
@endsection

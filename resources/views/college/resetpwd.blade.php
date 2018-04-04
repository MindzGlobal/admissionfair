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
    <script src="{{ asset('college/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    
@endsection
@section('content')
<!-- Page Content -->
<div class="container-fluid">
                <div class="row bg-title">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                        <h4 class="page-title">Reset Login Details</h4>
                                    </div>
                                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                        
                                        <ol class="breadcrumb">
                                            <li><a href="#">Dashboard</a></li>
                                            <li class="active">Reset Login Detail</li>
                                        </ol>
                                    </div>
                                    <!-- /.col-lg-12 -->
                </div>

                <div class="col-sm-12 col-md-12 ">
                   <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Reset Login Details</h3><br>
                            
                            <form data-toggle="validator" novalidate="true">
                                <div class="form-group">
                                    <label for="inputName" class="control-label">Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="" value="{{ Auth::user()->name }}" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail2" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail2" placeholder="" data-error="Bruh, that email address is invalid" required="" value="{{ Auth::user()->email }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Mobile Number</label>
                                   
                                            <input type="text" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="" value="{{ Auth::user()->mobile }}" required="">
                                             </div>
                                    
                            
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>

                       <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Reset Password</h3><br>
                           
                            <form data-toggle="validator" novalidate="true">
                               
                                <div class="form-group col-sm-12">
                                    <label for="" class="control-label">Old Password</label>
                                    
                                            <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="Old Password" required="required">
                                             </div>

                                <div class="form-group col-sm-12">
                                    <label for="inputPassword2" class="control-label"> New Password</label>
                                    
                                            <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword2" placeholder=" New Password" required="required">
                                            <span class="help-block">Minimum of 6 characters</span> </div>

                                            <div class="form-group col-sm-12">
                                            <label for="inputPassword2" class="control-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm Password" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                  
                                
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success ">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
</div>

<!-- /#page-wrapper -->
@endsection

@section('js')
    
    <script src="{{ asset('college/js/formValidation.js') }}"></script>
     <script src="{{ asset('college/js/validator.js') }}"></script>

@endsection
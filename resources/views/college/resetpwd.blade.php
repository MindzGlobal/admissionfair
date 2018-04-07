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
    <script src="{{ asset('college/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    
@endsection
@section('content')
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
                            
                            <form data-toggle="validator" novalidate="true" method="post" action="{{ url('college/resetlogindetails') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName" class="control-label">Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="" name="name" value="{{ Auth::user()->name }}" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail2" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail2" placeholder="" data-error="Bruh, that email address is invalid" required="" name="email" value="{{ Auth::user()->email }}">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Mobile Number</label>
                                   
                                            <input type="text" data-toggle="validator" data-minlength="6" class="form-control" id="" placeholder="" name="mobile" value="{{ Auth::user()->mobile }}" required="">
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
                           
                            <form data-toggle="validator" novalidate="true" method="post" action="{{ url('college/changepwd') }}">

                               @csrf

                                <div class="form-group{{ $errors->has('old_pwd') ? ' has-error' : '' }} col-sm-12">

                                    <label for="" class="control-label">Old Password</label>
                                    
                                            <input type="text" data-toggle="validator" data-minlength="8" class="form-control" id="" placeholder="Old Password" name="old_pwd" required="required" value="{{ old('old_pwd') }}">

                                            @if ($errors->has('old_pwd'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('old_pwd') }}</strong>
                                                    </span>
                                            @endif

                                             </div>

                                <div class="form-group{{ $errors->has('new_pwd') ? ' has-error' : '' }}  col-sm-12">

                                    <label for="inputPassword2" class="control-label"> New Password</label>
                                    
                                            <input type="password" data-toggle="validator" data-minlength="8" class="form-control" id="inputPassword2" name="password" placeholder=" New Password" required="required">
                                            @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                            @endif

                                             </div>



                                            <div class="form-group{{ $errors->has('confirm_pwd') ? ' has-error' : '' }}  col-sm-12">

                                            <label for="inputPassword2" class="control-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="password_confirmation" placeholder="Confirm Password" required="required">
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
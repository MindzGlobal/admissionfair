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


<div class="row">

<!--Code for Successfully Registered-->    

<div class="col-md-3"></div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8" > 
                        <div class="panel panel-success block5" style="border:1px solid #00c292; margin-top:100px;">
                            <div class="panel-heading"> Success Panel
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <center><img src="{{ asset('college/images/success.png') }}" class="all landscape img-check img-responsive" alt="gallery" width="150px" height="150px"/>
                                    <h2 class="text-success">Successfully Registered</h2>
                                    <p>Your Payment is Successfully Done</p></center>
                                </div>
                            </div>

                            <center><p><h4>Your Transection Id is - ABCD1234</h4></p></center>
                        </div>
                        
        </div>
 <div class="col-md-3"></div>

<!--Code for Transection failed-->

<div class="col-md-3"></div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8" > 
                        <div class="panel panel-danger block5" style="border:1px solid #fb9678; margin-top:100px;">
                            <div class="panel-heading"> Failure Panel
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <center><img src="{{ asset('college/images/cancel.png') }}" class="all landscape img-check img-responsive" alt="gallery" width="150px" height="150px"/>
                                    <h2 class="text-danger">Transection Failed</h2>
                                    <p>Please contact to the customer to use alternative payment method</p></center>
                                </div>
                            </div>

                            <center><p><h4>Your Transection Id is - ABCD1234</h4></p></center>
                        </div>
                        
        </div>
        <div class="col-md-3"></div>
</div>

</div>




<!-- /#page-wrapper -->
@endsection

@section('js')
    
    <script src="{{ asset('college/js/formValidation.js') }}"></script>
     <script src="{{ asset('college/js/validator.js') }}"></script>

@endsection
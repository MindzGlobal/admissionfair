@extends('college.layouts.app')
@section('css')
<link href="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('college/plugins/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.css') }}" />
<style type="text/css">
    .tabs-style-underline nav li a::after {
    background: #03a9f3;
    }
    .sttabs nav li.tab-current a {
    color: #03a9f3;
    }
    .add-btn{
      position: relative;
      left: 8%;
    }
    .ribbon{
        top: 0px;
        cursor:pointer;
    }
    .ribbon-right{
        right: 7px;
    }

</style>
@endsection

@section('content')
<!-- Page Content -->
<div class="container-fluid">
        <div class="row bg-title">
           <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">My Profile</h4>
           </div>
           <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
              <ol class="breadcrumb">
                 <li class="active">
                        <div class="ribbon ribbon-bookmark ribbon-right ribbon-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Representative<i class="fa fa-plus pull-right m-t-10 hidden"></i></div>
                 </li>
              </ol>
           </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
           <div class="col-md-12 col-xs-12">
              <div class="white-box">
                 <!-- Tabstyle start -->
                 <section class="m-t-20">
                    <div class="sttabs tabs-style-underline">
                       <nav>
                          <ul>
                             <li class=""><a href="#section-underline-1" class="sticon fa fa-user"><span>Representative</span></a></li>
                             {{-- <li class=""><a href="#section-underline-4" class="sticon fa fa-university"><span>College Details</span></a></li> --}}
                          </ul>
                       </nav>
                       <br>
                       <div class="content-wrap">
                          <section id="section-underline-1" class="">
                                        <div class="table-responsive">
                                           <table class="table table-bordered">
                                              <thead>
                                                 <tr>
                                                    <th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($representative as $representatives)
                                                 <tr>
                                                    <td>{{$representatives->name}}</td>
                                                    <td>{{$representatives->mobile}}</td>
                                                    <td>{{$representatives->email}}</td>
                                                    <td class="text-center">
                                                        <span class="label {{ $representatives->status=='Active' ? ' label-success' : ' label-danger' }}">
                                                            {{$representatives->status}}
                                                        </span>
                                                    </td>
                                                    <td class="text-nowrap text-center">
                                                            {{-- <span data-toggle="tooltip" data-original-title="Edit" onClick="updateUser({{$representatives->id}})"> <i class="fa fa-pencil text-inverse m-r-10"></i> </span> --}}
                                                            <span class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Close" onClick="deleteUser({{$representatives->id}})"> <i class="fa fa-trash"></i> </span>
                                                        </td>
                                                 </tr>
                                                 @endforeach
                                              </tbody>
                                           </table>
                                           <div class="pull-right">{{ $representative->links() }}</div>
                                        </div>
                          </section>
                          
                       </div>
                       <!-- /content -->
                    </div>
                    <!-- /tabs -->
                 </section>
                 <!-- Tabstyle start -->
              </div>
           </div>
        </div>
        <!-- /.row -->
     </div>
<!-- /#page-wrapper -->

{{-- Pop UP --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel1">Add Representatives</h4>
            </div>
            <div class="modal-body">
                <form action='{{url("college/addrepresentative")}}' id="AddRepresentativeForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="userId" id="userId" value="">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 m-t-20">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Full Name"  autofocus>
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    
                        <div class="col-xs-12 col-md-12 m-t-20">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email Id"> 
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    
                        <div class="col-xs-12 col-md-12 m-t-20">
                                <input id="mobile" name="mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="number" value="{{ old('mobile') }}" placeholder="Mobile Number">
                                @if ($errors->has('mobile'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                @endif
                        </div>

                        <div class="col-xs-12 col-md-12 m-t-20" style="display:none" id="selectStatus">
                                <select id="status" name="status" class="form-control" placeholder="Select Status">
                                    <option value="Active">Active</option>
                                    <option value="InActive">InActive</option>
                                </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button id="userSubmit" type="submit" class="btn btn-info waves-effect waves-light">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <!--Style Switcher -->
    <script src="{{ asset('college/js/dashboard1.js') }}"></script>
    <script src="{{ asset('college/js/cbpFWTabs.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>
    <script type="text/javascript" src="{{ asset('college/plugins/bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('college/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    @if ($errors->has('email') || $errors->has('mobile') || $errors->has('name'))
        <script>
            $('.ribbon').click();
        </script>
    @endif

    <script>
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
    });
    </script>
    <script type="text/javascript">
        (function() {

            [].slice.call(document.querySelectorAll('.sttabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();
    </script>
    <script>
    $("#exampleModal").on("hidden.bs.modal", function () {
        location.reload();
    });
    function updateUser(updateId)
    {
        $.ajax({
            headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },   
            type: 'POST',
            url: '{{url("college/representativeajax")}}',
            data: { 'updateId':updateId },
            success: function(op) {
                console.log(op);
                var res = $.parseJSON(op);
                $('#exampleModal').modal('show');
                $('#userId').val(updateId);
                $('#name').val(res.name);
                $('#email').val(res.email);
                $('#mobile').val(res.mobile);
                $('#status').val(res.status);
                $('#selectStatus').show();
                $('#AddRepresentativeForm').attr('action','{{url("college/updaterepresentative")}}');
                $('#userSubmit').html('Update');
            }
        })
    }
        
    function deleteUser(id) {
        var r = confirm("Are you sure you want to delete record?");
        if (r == true) {
            url = "{{url('college/deleterepresentative')}}" + id;
            window.location=url;
        } 
    }
        </script>
@endsection

{{--  @if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
 @endif style="background-color:#ffffff;" --}}

 <style>
    .modal-backdrop  {
        opacity:0.01 !important;
      }
 </style>  

 @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has($msg)==$msg)
    <div class="modal fade" id="displayResultModal" tabindex="-1" role="dialog" aria-labelledby="displayResultModal"  >
        <div class="modal-dialog modal-lg" role="document">
             <div class="modal-body alert alert-{{{$msg}}}">	
                 <p> {{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
             </div>
        </div>
    </div>
    @endif
 @endforeach

@if(isset($status))

<!-- ---------------- START OF DISPALY RESULT MODAL		-------------------- -->
<div class="modal fade" id="displayResultModal" tabindex="-1" role="dialog" aria-labelledby="displayResultModal"  >
<div class="modal-dialog modal-lg" role="document">
      <!-- modal-content -->
    <div class="modal-body alert alert-{{$status}}">				
        <span id="displayResultModalText"><i class="icon {{$status === "success" ? "fa fa-check " : ($status ==="warning" ? "fa fa-warning" : "fa fa-ban")}}"></i><Strong> {{$message}}. </Strong></span>
    </div>
    <!--	/.modal-content -->
</div>
</div>
<!-- ---------------- END OF DISPALY RESULT MODAL		-------------------- -->
@else

@if(count($errors) > 0)
    <div class="modal fade" id="displayResultModal" tabindex="-1" role="dialog" aria-labelledby="displayResultModal"  >
        <div class="modal-dialog modal-lg" role="document">
                <!-- modal-content -->
            @if($errors->has('status')) 			
                <div class="modal-body alert alert-{{$errors->first('status')}}">	
                    <span id="errorResultModalMyText"><i class="icon {{$errors->first('status') === "success" ? "fa fa-check " : ($errors->first('status') ==="warning" ? "fa fa-warning" : "fa fa-ban")}}"></i><Strong> {{$errors->first('message')}}</Strong></span>
                </div>
            @else
                 @foreach($errors->all() as $error)
                  <div class="modal-body alert alert-danger">	
                    <span id="errorResultModalMyText"><i class="icon fa fa-warning"></i> <Strong> {{$error}} </Strong></span>
                  </div>
                @endforeach 
             @endif
            <!--/.modal-content -->
        </div>
    </div>
@endif

@endif

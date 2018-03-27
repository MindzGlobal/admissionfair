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
 {{--  </div class="class flash">
   @foreach (['danger', 'warning', 'success', 'info'] as $msg)
   @if(Session::has($msg))

   <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
   @endif
 @endforeach
</div>     --}}
 @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has($msg))
    <div class="modal fade" id="displayResultModal" tabindex="-1" role="dialog" aria-labelledby="displayResultModal"  >
        <div class="modal-dialog modal-lg" role="document">
             <div class="modal-body alert alert-{{{$msg}}}">	
                 <p> {{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
             </div>
        </div>
    </div>
    @endif
 @endforeach

@if(isset($title))

<!-- ---------------- START OF DISPALY RESULT MODAL		-------------------- -->
<div class="modal fade" id="displayResultModal" tabindex="-1" role="dialog" aria-labelledby="displayResultModal"  >
<div class="modal-dialog modal-lg" role="document">
      <!-- modal-content -->
    <div class="modal-body alert alert-{{{$status}}}">				
        <span id="displayResultModalText"><i class="icon {{$status === "success" ? "fa fa-check " : ($status ==="warning" ? "fa fa-warning" : "fa fa-ban")}}"><Strong> {{$title}}</Strong></i> {{{$message}}}. </span>
    </div>
    <!--	/.modal-content -->
</div>
</div>
<!-- ---------------- END OF DISPALY RESULT MODAL		-------------------- -->
@else

@if(count($errors) > 0)
        <div class="modal fade" id="displayResultModal" tabindex="-1" role="dialog" aria-labelledby="displayResultModal"  >
            <div class="modal-dialog modal-lg" role="document">
                {{--  <!-- modal-content -->{{ ( ! empty($data['name'] ? 'nameset' : 'namenotset') }}  --}}
                <div class="modal-body alert alert-danger">	
                  @if($errors->has('title')) 			
                     <span id="errorResultModalMyText"><i class="icon fa fa-warning"><Strong> {{$errors->first('title')}} </Strong></i> {{$errors->first('error')}}</span>
                  @else
                     @foreach($errors->all() as $error)
                      <span id="errorResultModalMyText"><i class="icon fa fa-warning"><Strong> {{$errors}} </Strong></i></span>
                     @endforeach 
                  @endif
                </div>
                <!--	/.modal-content -->
            </div>
        </div>
@endif

@endif

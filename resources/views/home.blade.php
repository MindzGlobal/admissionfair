@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    {{ $data }}{{ $data }}{{ $data }} {{ $data }} {{ $data }} {{ $data }}
hfhdfjhdj
=======
                    {{ $data }}
>>>>>>> 856a2e7adc007404351acd0ef8ce661515006585
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    
    <h2 class="fs-3 ps-5 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col-2">
            @include('sidebar')
        </div>
        
        <div class="col-10">
            
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body text-center display-4 fw-bold">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Benvenuto {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

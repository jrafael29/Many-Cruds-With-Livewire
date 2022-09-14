@extends('layouts.app')

@section('content')

<div class=" d-flex justify-content-center">

    <div class=" col-12 col-md-9 col-lg-6">
        <div class="d-flex ">
            <h4>
                Olá,
            </h4>
            <span class="d-flex align-items-center mx-1">
                <strong class="text-muted"> {{$email}} </strong>
            </span>
        </div>
        
        <div class="form">
            <livewire:auth.reset-password :email="$email" :token="$token" />
        </div>

    </div>
    
</div>

@endsection
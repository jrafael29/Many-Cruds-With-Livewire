@extends('layouts.app')

@section('content')
    <div class="border-bottom border-success border-2 rounded-2">
        <livewire:images.store-new-image />
    </div>
    <div class="d-flex justify-content-center">
        <div class="">
            <livewire:images.show-images />
        </div>
    </div>
@endsection
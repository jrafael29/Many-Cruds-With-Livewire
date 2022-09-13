@extends('layouts.app')



@section('content')
<div class="d-flex justify-content-center mt-4">
    <div class="card col-12 col-sm-8 col-md-6 bg-transparent">
        <div class="card-header">
            <livewire:todo.create-todo />
        </div>

        <div class="card-body">
            <livewire:todo.show-todos />
        </div>
    </div>
</div>

@endsection
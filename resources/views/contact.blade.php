@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">Contact page with Livewire</div>

                <div class="card-body">
                    @livewire('contact-info')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

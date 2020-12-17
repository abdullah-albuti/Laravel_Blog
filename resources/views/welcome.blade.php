@extends('layouts.app')

@section('title','welcome page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome to my website') }}</div>

                    <div class="card-body" style="background-image: url('https://images.wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1024x768.jpg'); height: 50vh; width: 100% ">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

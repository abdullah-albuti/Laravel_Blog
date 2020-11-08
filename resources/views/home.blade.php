@extends('layouts.app')
@section('title',"home")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('post') }}</div>

                <div class="card-body" >

                    <form action="{{url('someurl')}}" method="post">
                        @csrf
                        <input type="text"  name="subject" />
                        <input type="text" name="text" />
                        <input type="submit">
                    </form>



                </div>
            </div>
        </div>
        <div class="col-md-8">


            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>

                    @endif
                        @include('layouts.news');
                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('timeline') }}</div>

                <div class="card-body">


                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection

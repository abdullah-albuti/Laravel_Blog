@extends('layouts.app')
@section('title',"home")
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('post') }}</div>

                <div class="card-body" >

                    <form action="{{url('someurl')}}" method="post">
                        @csrf
                        <input type="text"  name="title" />
                        <input type="text" name="body" />
                        <input type="submit">
                    </form>



                </div>
            </div>
        </div>
        <div class="col-md-8">


            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div id="demo" class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>

                    @endif
{{--                        @include('layouts.news')--}}


                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


{{--                        <button type="button" onclick="loadDoc()">Change Content</button>--}}

                        <script>
                            variable = new XMLHttpRequest();
                            $(document).ready(
                                setInterval(

                                function loadDoc() {
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {

                                        document.getElementById("demo").innerHTML = this.responseText
                                    }
                                };
                                xhttp.open("GET", "new", true);
                                xhttp.send();

                            }
                                    , 1000)

                        );
                        </script>






                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('timeline') }}</div>

                <div class="card-body">
                    @include('layouts.timeline')

                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection

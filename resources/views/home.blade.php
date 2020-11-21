@extends('layouts.app')
@section('title',"home")
@section('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="container">
    <div class="row justify-content-center">

        <div >

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                SEND POST
            </button>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">send new post</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">





                    <form >
                        @csrf
                        <label>title:</label>
                        <input type="text"  name="titleFormInsert"  />
                        <label>body:</label>
                        <input type="text" name="bodyFormInsert" />

                        <input id="FormInsert" type="submit" value="send">
                    </form>

<script>



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $("#FormInsert").click(function(e){



        e.preventDefault();

        var title = $("input[name=titleFormInsert]").val();

        var body = $("input[name=bodyFormInsert]").val();



        $.ajax({

            type:'POST',

            url:"{{ route('FormPost.post') }}",

            data:{ title:title, body:body},

            success:function(data){

                alert(data);

            }

        });



    });




</script>

                </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div></div>


    </div>
        <br>
        <div class="col-md-10">


            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div id="demo" class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>

                    @endif


                        @include('layouts.news')
{{--                        <script>--}}
{{--                            variable = new XMLHttpRequest();--}}
{{--                            $(document).ready(--}}
{{--                                setInterval(--}}

{{--                                function loadDoc() {--}}
{{--                                var xhttp = new XMLHttpRequest();--}}
{{--                                xhttp.onreadystatechange = function() {--}}
{{--                                    if (this.readyState == 4 && this.status == 200) {--}}

{{--                                        document.getElementById("demo").innerHTML = this.responseText--}}
{{--                                    }--}}
{{--                                };--}}
{{--                                xhttp.open("GET", "new", true);--}}
{{--                                xhttp.send();--}}

{{--                            }--}}
{{--                                    , 1500)--}}

{{--                        );--}}
{{--                        </script>--}}






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

@endsection

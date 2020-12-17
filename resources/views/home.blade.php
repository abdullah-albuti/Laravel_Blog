@extends('layouts.app')
@section('title',"home")
@section('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <div class="container">
        <div class="alert alert-success"   role="alert">

        </div>

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





                    <form  action="javascript:void(0);" >
                        @csrf
                        <label>title:</label><br>
                        <input type="text"  class="form-control" name="titleFormInsert"  /><br>

                        <label>body:</label><br>
                      <textarea    name="bodyFormInsert"  class="form-control" ></textarea><br><br>

                        <input id="FormInsert" class="sendingg" type="submit" value="send">
                    </form>

<script>



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

    {{--$('#FormInsert').click(function(){--}}
    {{--    $("#demo").load("{{route('new')}}")--}}
    {{--    $("#demo").load("{{route('new')}}")--}}
    {{--});--}}


    {{--$(document).ready(function(){--}}
    {{--    $(document).ajaxSuccess(function(){--}}
    {{--        // $(".alert").hide();--}}
    {{--        setTimeout(function() {--}}
    {{--            $("#demo").load("{{route('new')}}")--}}
    {{--        }, 5000);--}}
    {{--    });--}}





    {{--});--}}

    {{--$('#FormInsert').click(function(){--}}
    {{--    $("#demo").load("{{route('new')}}")--}}

    {{--    });--}}
    {{--$('.sendingg').click(function(){--}}
    {{--    $("#demo").load("{{route('new')}}")--}}

    {{--});--}}


    $("#FormInsert").click(function(){



        var title = $("input[name=titleFormInsert]").val();

        var body = $("textarea[name=bodyFormInsert]").val();


        $.ajax({type:'POST',url:"{{ route('FormPost.post') }}", data:{ title:title, body:body},
            success: function(result){
                $(".alert").show();
            $('.alert').text(result);

            }});


    });





    {{--$("#FormInsert").click(function(e){--}}



    {{--    e.preventDefault();--}}

    {{--    var title = $("input[name=titleFormInsert]").val();--}}

    {{--    var body = $("input[name=bodyFormInsert]").val();--}}



    {{--    $.ajax({--}}

    {{--        type:'POST',--}}

    {{--        url:"{{ route('FormPost.post') }}",--}}

    {{--        data:{ title:title, body:body},--}}

    {{--        success:function(){--}}

    {{--            $("#FormInsert").click(function() {--}}
    {{--                    $("#demo").load("{{route('new')}}");--}}


    {{--                });--}}





    {{--        }--}}



    {{--})--}}

    {{--});--}}


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

{{--                                    function loadDoc() {--}}
{{--                                        var xhttp = new XMLHttpRequest();--}}
{{--                                        xhttp.onreadystatechange = function() {--}}
{{--                                            if (this.readyState == 4 && this.status == 200) {--}}

{{--                                                document.getElementById("demo").innerHTML = this.responseText--}}
{{--                                            }--}}
{{--                                        };--}}
{{--                                        xhttp.open("GET", "new", true);--}}
{{--                                        xhttp.send();--}}

{{--                                    }--}}
{{--                                    , 5000)--}}

{{--                            );--}}
{{--                        </script>--}}




                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('timeline') }}</div>

                <div id="timelinedemo" class="card-body">


{{--                    @include('layouts.timeline')--}}



                                            <script>
                                                variable = new XMLHttpRequest();
                                                $(document).ready(
                                                    setInterval(

                                                        function loadDoc() {
                                                            var xhttp = new XMLHttpRequest();
                                                            xhttp.onreadystatechange = function() {
                                                                if (this.readyState == 4 && this.status == 200) {

                                                                    document.getElementById("timelinedemo").innerHTML = this.responseText
                                                                }
                                                            };
                                                            xhttp.open("GET", "layouts.timeline", true);
                                                            xhttp.send();

                                                        }
                                                        , 2000)

                                                );
                                            </script>








                </div>
            </div>
        </div>
    </div>
</div>

{{--    <script type="text/javascript">--}}


{{--        $(".deleteRecord").click(function(){--}}

{{--            var id = $(this).data("id");--}}
{{--            $.ajax(--}}
{{--                {--}}
{{--                    url: "project/public/home/delete/"+id,--}}
{{--                    type: 'POST',--}}
{{--                    async: true,--}}
{{--                    data:{"id":id },--}}
{{--                    success:function(data){--}}

{{--                        alert(data);--}}
{{--                    }--}}


{{--                });--}}
{{--        });--}}







{{--    </script>--}}

@endsection

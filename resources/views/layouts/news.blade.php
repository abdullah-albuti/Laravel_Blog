

<script>

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



</script>



@if (is_array($Flight ?? '') || is_object($Flight ?? ''))
@foreach($Flight ?? '' ?? ''  as $p)
    <div id="msg_div">
       <br>

        <div class="card" >
            <div class="card-header">
<label>USER :</label>

        <div> {{$p->user_id}}</div>
        <hr>
        <label>TITLE :</label>
        <h2>{{$p->title}}</h2>
            </div>
            <div class="card-body">

        <label>BODY :</label>
        <p>{{$p->body}}</p>
<br>
<hr>




    @if($p->user_id ==  Auth::user()->name)

{{--            action="{{url('updatePost') }}" method="post"--}}
            <form id="contact-form{{$p->id}}"  >
            @csrf
            <input hidden name="id" id="id" value="{{$p->id}}">
{{--            <input  name="title" id="title{{$p->id}}"value="{{$p->title}}"  placeholder="edit title">--}}
{{--            <input name="body" id="body" placeholder="edit body">--}}


            </form>


            <div class="card">
                <div class="card-header">{{ __('edit') }}</div>

                <div class="card-body" >
                    <form id="formedit{{$p->id}}" >


                        <div class="form-group">

                            <label>id:</label>

                            <input type="text" name="idForm{{ $p->id }}" class="form-control" placeholder="id" disabled value="{{$p->id}}" required="">

                        </div>



                        <div class="form-group">

                            <label>title:</label>

                            <input type="title" name="titleForm{{ $p->id }}" class="form-control" value="{{$p->title}}" placeholder="title" required="">

                        </div>



                        <div class="form-group">

                            <strong>body:</strong>

                            <input type="body" name="bodyForm{{ $p->id }}" class="form-control" value="{{$p->body}}" placeholder="body" required>

                        </div>



                        <div class="form-group">


                        </div>



                    </form>

                    <button id="btn-submit-edit{{ $p->id }}" class="btn btn-success ">edit</button>


                    <button class="deleteRecord" data-id="{{ $p->id }}" >Delete Post </button>

                </div>
            </div>
<script>



    $("#btn-submit-edit{{ $p->id }}").click(function(e){



        e.preventDefault();



        var id = $("input[name=idForm{{ $p->id }}]").val();

        var title = $("input[name=titleForm{{ $p->id }}]").val();

        var body = $("input[name=bodyForm{{ $p->id }}]").val();



        $.ajax({

            type:'POST',

            url:"{{ route('ajaxRequest.post') }}",

            data:{id:id, title:title, body:body},

            success:function(data){

                alert(data);

            }

        });



    });















</script>
        @endif

        <form id="form{{$p->id}}">
            <input name="comment{{$p->id}}" type="text" placeholder="comment">
            <input name="PostNumber{{$p->id}}" value="{{$p->id}}"   hidden >
            <button id="submitcomment{{$p->id}}" >SEND</button>
        </form>

    </div>
<script>



        $("#submitcomment{{$p->id}}").click(function(e){



            e.preventDefault();



            var comment1 = $('input[name=comment{{$p->id}}]').val();
            var POSTNU = $('input[name=PostNumber{{$p->id}}]').val();



            $.ajax({

                type:'POST',

                url:"{{ route('comment.post') }}",

                data:{ comment1:comment1,POSTNU:POSTNU},

                success:function(data){

                    alert(data);

                }
            });

        });










</script>




    <hr>


    <label>    COMMENT :</label>

    @foreach($Comment ?? '' ?? ''  as $C)
        @if($C->commintelse ==  $p->id)


            <div class="media">
                <div class="media-left">
                    <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:45px">
                </div>
                <div class="media-body">
                    <h3 class="media-heading"> {{$C->user_comment}} </h3>
                    <p> {{$C->comment}}</p>


                </div> </div>
<hr>
        @endif

    @endforeach</div>
    </div>
    <br>
@endforeach
@endif

<script type="text/javascript">


    $(".deleteRecord").click(function(){

        var id = $(this).data("id");
        $.ajax(
            {
                url: "project/public/home/delete/"+id,
                type: 'POST',
                data:{"id":id },
                success: function (response)
                {
                    alert(response);
                },
                error: function(xhr) {
                    alert(xhr.responseText);
                }
            });
    });


</script>


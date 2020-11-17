<!DOCTYPE html>

<html>

<head>

    <title>Laravel 8 Ajax Request example</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>



<div class="container">

    <h1>Laravel 8 Ajax Request example</h1>



    <form >



        <div class="form-group">

            <label>id:</label>

            <input type="text" name="id" class="form-control" placeholder="id" required="">

        </div>



        <div class="form-group">

            <label>title:</label>

            <input type="title" name="title" class="form-control" placeholder="title" required="">

        </div>



        <div class="form-group">

            <strong>body:</strong>

            <input type="body" name="body" class="form-control" placeholder="body" required>

        </div>



        <div class="form-group">

            <button class="btn btn-success btn-submit">Submit</button>

        </div>



    </form>

</div>



</body>

<script type="text/javascript">



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){



        e.preventDefault();



        var id = $("input[name=id]").val();

        var title = $("input[name=title]").val();

        var body = $("input[name=body]").val();



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



</html>

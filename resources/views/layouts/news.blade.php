





@if (is_array($Flight ?? '') || is_object($Flight ?? ''))
@foreach($Flight ?? '' ?? ''  as $p)
    <div id="msg_div">
    <div>> {{$p->user_id}}</div>
    <h1>{{$p->title}}</h1>
    <p>{{$p->body}}</p>
    @if($p->user_id ==  Auth::user()->name)

{{--            action="{{url('updatePost') }}" method="post"--}}
            <form id="contact-form"  >
            @csrf
            <input hidden name="id" id="id" value="{{$p->id}}">
            <input name="title" id="title" placeholder="edit title">
            <input name="body" id="body" placeholder="edit body">
       <button class="btn btn-success" id="submit">Submit</button>
        </form>




        <a href="/project/public/home/delete/{{$p->id}}"> <button>DELETE</button></a>
    @endif
    <hr>
    comment :
    <p>{{$p->commint}}</p>
    <input name="commint" type="text" placeholder="comment">
    <button type="submit">SEND</button>
    <hr>
    </div>

@endforeach
@endif




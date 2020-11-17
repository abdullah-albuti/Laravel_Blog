


@if (is_array($posts ?? '') || is_object($posts ?? ''))
@foreach( $posts ?? '' as $p)
      <h6>{{$p->user_id}}</h6>
   <li> title :{{$p->title}}</li>
<hr>

@endforeach
@endif



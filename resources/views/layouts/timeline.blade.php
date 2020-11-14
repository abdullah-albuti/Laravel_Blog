


@if (is_array($Flight ?? '') || is_object($Flight ?? ''))
@foreach( $posts ?? '' as $p)

      <h6>{{$p->user_id}}</h6>
   <li> title :{{$p->title}}</li>
<hr>

@endforeach
@endif



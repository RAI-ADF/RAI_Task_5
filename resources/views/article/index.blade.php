@extends ('article\masterview')

@section('isi')
<h1>Article</h1>

@foreach ($article as $articles)
<article>
<h2>
<a href="/article/{{$articles->id}}">{{$articles->judul}}</a></h2>
<div class="body">{{$articles->isi}}</div>
</article>
@endforeach
@stop
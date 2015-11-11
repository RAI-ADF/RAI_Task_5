@extends ('article\masterview')

@section('isi')
<h1>{{$article->judul}}</h1>

<article>
{{$article->isi}}
</article>
@stop
@extends ('article\masterview')

@section('isi')
<h1>Add Article</h1>
</hr>
{!! Form::open(['url' => 'article']) !!}

<div class="form-group">
{!! Form::label('judul', 'Judul : ') !!}
{!! Form::text('judul',null,['class' => 'form-control']) !!}	
</div>

<div class="form-group">
{!! Form::label('isi', 'Isi : ') !!}
{!! Form::textarea('isi',null,['class' => 'form-control']) !!}	
</div>

<div class="form-group">
{!! Form::label('published_at', 'Published at : ') !!}
{!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}	
</div>

<div class="form-group">
{!! Form::submit('ADD ARTICLE',['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

@if ($errors->any())
	<ul classs="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif
@stop
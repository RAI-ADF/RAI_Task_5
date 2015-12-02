@extends('master_layout')

@section('content')
	<h2>Edit Song</h2>
	{!! Form::model($song, ['action'=>['SongController@update', $song->id], 'method'=>'PATCH']) !!}
		@include('songs.partials.form')
	{!! Form::close() !!}
@stop

@section('script')
<script type="text/javascript">
	var form = $("#song_form")

	$(document).ready(function(){
		form.on("submit", function(){
			var _token = $(this).find("input[name=_token]").val();
			alert(_token);
		});
	});
</script>
@stop
@extends('master_layout')

@section('content')
<h2>Song Index</h2>

<table class="hover full-width">
	<thead>
		<tr>
			<th>Title</th>
			<th>Artist</th>
			<th>Genre</th>
			<th>Tags</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
	@foreach ($songs as $song)
	<tr>
		<td>{{ $song->title }}</td>
		<td>{{ $song->artist }}</td>
		<td><a href="{{ url('genre/'.$song->genre->id) }}">{{ $song->genre->name }}</a></td>
		<td>
			@forelse ($song->labels as $label)
				<span class="label">{{ $label->name }}</span>
			@empty
				None
			@endforelse
		</td>
		<td>
			<div class="button-group">
				<a class="button secondary" href="{{ url('lyrics/'.$song->id.'/view') }}">Lyrics</a>
				@if(Auth::check())
				<a class="button" href="{{ url('songs/'.$song->id.'/edit') }}">Edit</a>
				<a class="button alert" href="{{ url('songs/'.$song->id.'/delete') }}">Hapus</a>
				@endif
			</div>
		</td>	
	</tr>
	@endforeach
	</tbody>
	
</table>
@stop
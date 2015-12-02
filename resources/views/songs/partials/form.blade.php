
<div class="row">
    <div class="small-12 medium-2 columns">
      {!! Form::label('title', 'Title', ['class'=>'text-right middle']) !!}
    </div>
    <div class="small-12 medium-10 columns">
      {!! Form::text('title', null, ['placeholder'=>'insert song title', 'id'=>'title']) !!}
    </div>
</div>
<div class="row">
    <div class="small-12 medium-2 columns">
      {!! Form::label('artist', 'Artist', ['class'=>'text-right middle']) !!}
    </div>
    <div class="small-12 medium-10 columns">
      {!! Form::text('artist', null, ['placeholder'=>'insert artist name', 'id'=>'artist']) !!}
    </div>
</div>
<div class="row">
    <div class="small-12 medium-2 columns">
      {!! Form::label('genre', 'Genre', ['class'=>'text-right middle']) !!}
    </div>
    <div class="small-12 medium-10 columns">
      {!! Form::select('genre_id', $genres, $default, ['id'=>'genre']) !!}
    </div>
</div>
<div class="row">
    <div class="small-12 medium-2 columns">
      <label for="genre" class="text-right middle">Label</label>
    </div>
    <div class="small-12 medium-10 columns">
    	<div id="label_list" class="callout">
        @if(isset($song))
          @forelse($song->labels as $label)
      		  <span class="label">{{ $label->name }} <button class="label-delete-{{ $label->id }}" type="button">&times;</button></span>
          @empty
            None. Please add one below if you wish to
          @endforelse
        @else
          None. Please add one by using "+" button
        @endif
    	</div>
		<div class="input-group">
			<input class="input-group-field" type="text" id="new_label">
			<a class="button input-group-button">&plus;</a>
		</div>
    	<p class="help-text" id="passwordHelpText">Add tags related to this song</p>
    	
    </div>
</div>

<div class="row">
	<div class="small-12 text-right">
		<input type="submit" class="button" value="Simpan Data">
	</div>
</div>

<div class="form-group">
    <label class="col-form-label">Người thể hiện : </label>
    <div id="artist_song_checkbox" class="form-control">
        @if ($song !== null)
            @foreach ($song as $list)
                <input name="person_song[]" value="{{$list->song_id}}" type="checkbox"/>{{$list->song_id}}
                <br/>
            @endforeach
        @endif
    </div>
    @if($errors->first('artist_song'))
        <span
            class="text-danger">{{$errors->first('artist_song')}}</span>
    @endif
</div>

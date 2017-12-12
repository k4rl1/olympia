@extends("welcome")

@section("content")

    {{ Form::open(array('route' => 'saveTickerText', 'method' => 'post')) }}
    {{ csrf_field() }}
    <div class="form-group">
        <select name="sport_id" class="form-control">
            @foreach($sports AS $sport)
                <option value="{{$sport["id"]}}" {{ old('sport_id') == $sport["id"] ? 'selected' : '' }}>{{$sport["name"]}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="text" name="time" class="form-control" placeholder="time" value="{{old('time')}}">
    </div>
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="tile" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <textarea name="text" class="form-control" placeholder="text">{{old('text')}}</textarea>
    </div>
    <div class="form-group">
        <label class="form-control">
            <input type="checkbox" value="1" name="is_highlight" {{ old('is_highlight') ? 'checked' : '' }}>
            highlight
        </label>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn-success">Create</button>
    </div>
    {{ Form::close() }}
@endsection
@extends('app')

@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        @foreach($menuItems AS $name => $url)
            <a href="{{$url}}">{{$name}}</a>
        @endforeach
    </div>
@endsection

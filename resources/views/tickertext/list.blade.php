@extends("welcome")

@section("content")
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Time</th>
                <th class="text-center">Title</th>
                <th class="text-center">Text</th>
                <th class="text-center">Sport</th>
                <th class="text-center">Hightlight</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tickerText as $text)
                <tr>
                    <td>{{ $text->id }}</td>
                    <td>{{ $text->time }}</td>
                    <td>{{ $text->title }}</td>
                    <td>{{ $text->text }}</td>
                    <td>{{ isset($sports[$text->sport_id]) ? $sports[$text->sport_id]["name"] : 'failure' }}</td>
                    <td>{{ $text->is_highlight }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $tickerText->links() }}

@endsection
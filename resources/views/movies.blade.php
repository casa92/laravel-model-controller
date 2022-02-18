<h2>Movies</h2>

{{-- {{ dd($movies) }} --}}

@foreach ($movies as $movie)
    <div class="single-movie">
        <div>Title: {{ $movie->title }}</div>
        <div>Nationality: {{ $movie->nationality }}</div>
        <div>Date: {{ $movie->date }}</div>
        <div>Vote: {{ $movie->vote }}</div>
    </div>
@endforeach

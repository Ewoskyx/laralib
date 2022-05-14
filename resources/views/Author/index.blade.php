<h1>Authors Page</h1>
@foreach ($authors as $author)
    <p> {{ $author->full_name }} </p>
@endforeach
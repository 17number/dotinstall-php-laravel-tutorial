@extends("layouts.default")

@section("title", "Blog Posts")
@section("content")
<h1>
    <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
    Blog Posts
</h1>
<ul>
    @foreach ($posts as $post)
        <li><a href="{{ url('/posts', $post) }}">{{ $post->title }}</a></li>
    @endforeach

    @forelse ($posts as $post)
        <li><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></li>
    @empty
        <li><a href="">Empty</a></li>
    @endforelse
</ul>
@endsection

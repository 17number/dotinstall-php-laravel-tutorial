<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Posts</title>
</head>
<body>
    <div class="container">
        <h1>Blog Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li><a href=""></a>{{ $post->title }}</li>
            @endforeach

            @forelse ($posts as $post)
                <li><a href=""></a>{{ $post->title }}</li>
            @empty
                <li><a href=""></a>Empty</li>
            @endforelse
        </ul>
    </div>
</body>
</html>

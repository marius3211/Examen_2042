<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h2>All Posts</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }} - <?= $post->content ?> <a href="/deletePost/{{ $post->id }}">delete</a></li>
            {{-- <li>{{ $post->title }} - <?php echo $post->content ?></li> --}}
        @endforeach
    </ul>
</body>
</html>
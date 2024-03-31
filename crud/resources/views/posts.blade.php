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
        @if(session("modifier")) 
            {{ session("modifier") }}
            {{-- <?php echo session("modifier") ?> --}}
            {{-- <?= session("modifier") ?> --}}
        @endif

        @if(session("delete")) 
            {{ session("delete") }}
            {{-- <?php echo session("delete") ?> --}}
            {{-- <?= session("delete") ?> --}}
        @endif

        @if(session("not-found")) 
            {{ session("not-found") }}
            {{-- <?php echo session("not-found") ?> --}}
            {{-- <?= session("not-found") ?> --}}
        @endif

        @foreach($posts as $post)
            <li>{{ $post->title }} - <?= $post->content ?> <a href="/deletePost/{{ $post->id }}">delete</a> <a href="/modifPost/{{ $post->id }}">modifier</a></li>
            {{-- <li>{{ $post->title }} - <?php echo $post->content ?></li> --}}
        @endforeach
    </ul>
</body>
</html>
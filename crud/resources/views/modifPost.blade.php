<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/modifPostToDB" method="POST">
        @csrf
        <input name="id" value="{{$post->id}}"  type="hidden" />
        <div>
            <label>Title</label>
            <input name="title" value="{{ $post->title }}" />
        </div>
        <div>
            <label for="">content</label>
            <textarea name="content">{{ $post->content }}</textarea>
        </div>
        <button>send</button>
    </form>
    
</body>
</html>
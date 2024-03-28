<form action="/addPostToDB" method="POST">
    @csrf
    <div>
        <label>Title</label>
        <input name="title" value="{{ old('title') }}" />
    </div>
    <div>
        <label for="">content</label>
        <textarea name="content">{{ old('content') }}</textarea>
    </div>
    <button>send</button>
</form>


{{ $errors }}
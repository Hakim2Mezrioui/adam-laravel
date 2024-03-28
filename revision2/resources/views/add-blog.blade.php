<form method="POST" action="add-blog-to-db">
    @csrf
    <div>
        <label>blog</label>
        <input name="blog" />
    </div>
    <button>add</button>
</form>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $book->name }}">
        <label>Years:</label>
        <input type="text" name="years" value="{{ $book->years }}">
        <label>Slug:</label>
        <input type="text" name="slug" value="{{ $book->slug }}">
        <label>Author:</label>
        <input type="text" name="author" value="{{ $book->author }}">
        <button type="submit">Submit</button>
    </form>

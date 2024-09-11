
    <h1>Create New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name">
        <label>Years:</label>
        <input type="text" name="years">
        <label>Slug:</label>
        <input type="text" name="slug">
        <label>Author:</label>
        <input type="text" name="author">
        <button type="submit">Submit</button>
    </form>

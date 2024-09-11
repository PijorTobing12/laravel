<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
    <h1>Books</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Year</th>
                <th>Slug</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->years }}</td>
                    <td>{{ $book->slug }}</td>
                    <td>{{ $book->author }}</td>
                    <td>                        
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

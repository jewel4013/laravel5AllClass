<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Books</title>
</head>
<body>
    <div class="container">
        <h2>Book List</h2>
        <a href="/books/create" class="btn btn-secondary">Create One</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>ISBN</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>
                            <a href="/authors/{{ $book->id }}" class="">{{ $book->name }}</a>
                        </td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->created_at->diffForHumans() }}</td>
                        <td>{{ $book->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="/books/{{ $book->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/books/{{ $book->id }}/delete" method="POST" class="d-inline-block">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">Delete</button>                            
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

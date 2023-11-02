<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Authors</title>
</head>
<body>
    <div class="container">
        <h2>Authors List</h2>
        <a href="/authors/create" class="btn btn-secondary">Create One</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>                    
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td>
                            <a href="/authors/{{ $author->id }}" class="">{{ $author->name }}</a>
                        </td>
                        <td>{{ $author->email }}</td>                        
                        <td>{{ $author->created_at->diffForHumans() }}</td>
                        <td>{{ $author->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="/authors/{{ $author->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/authors/{{ $author->id }}/delete" method="POST" class="d-inline-block">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Users List</title>
</head>
<body>
    <div class="container">
        <h2>Users List</h2>
        <a href="/users/create" class="btn btn-secondary">Sign Up another account</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>User Name</th>                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <a href="/users/{{ $user->id }}" class="">{{ $user->fname }} {{ $user->lname }}</a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->uname }}</td>                        
                        <td>
                            <a href="/users/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/users/{{ $user->id }}/delete" method="POST" class="d-inline-block">
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

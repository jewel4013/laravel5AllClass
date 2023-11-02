<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Signup List</title>
</head>
<body>
    <div class="container">
        <h2>Signup List</h2>
        <a href="/signup/form" class="btn btn-secondary">Sign Up another account</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>                    
                    <th>Email</th>
                    <th>User Name</th>                    
                    <th>Date of Birth</th>
                    <th>Phone</th>
                    <th>Bio</th>
                    <th>Post Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($signups as $signup)
                    <tr>
                        <td>{{ $signup->id }}</td>
                        <td>
                            <a href="/signup/{{ $signup->id }}" class="">{{ $signup->fname }} {{ $signup->lname }}</a>
                        </td>
                        <td>{{ $signup->email }}</td>
                        <td>{{ $signup->uname }}</td>
                        <td>{{ $signup->date_of_birth }}</td>                        
                        <td>{{ $signup->phone }}</td>
                        <td>{{ $signup->bio }}</td>
                        <td>{{ $signup->post_code }}</td>
                        <td>
                            <a href="/signup/{{ $signup->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/signup/{{ $signup->id }}/delete" method="POST" class="d-inline-block">
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

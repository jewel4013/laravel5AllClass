<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <div class="container">
        <h2>Person List</h2>
        <a href="/person/create" class="btn btn-secondary">Create One</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($persons as $person)
                    <tr>
                        <td>{{ $person->id }}</td>
                        <td>
                            <a href="/person/{{ $person->id }}" class="">{{ $person->name }}</a>
                        </td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->phone }}</td>
                        <td>{{ $person->country->name }}</td>
                        <td>{{ $person->created_at->diffForHumans() }}</td>
                        <td>{{ $person->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="/person/{{ $person->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/person/{{ $person->id }}/delete" method="POST" class="d-inline-block">
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

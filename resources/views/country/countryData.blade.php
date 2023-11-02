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
        <h2>Country List</h2>
        <a href="/country/create" class="btn btn-secondary">Create One</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Capital</th>
                    <th>Currency</th>
                    <th>Population</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>
                            <a href="/country/{{ $country->id }}" class="">{{ $country->name }}</a>
                        </td>
                        <td>{{ $country->capital }}</td>
                        <td>{{ $country->currency }}</td>
                        <td>{{ $country->population }}</td>
                        <td>{{ $country->created_at->diffForHumans() }}</td>
                        <td>{{ $country->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="/country/{{ $country->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <form action="/country/{{ $country->id }}/delete" method="POST" class="d-inline-block">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Morph One to Many</title>
</head>
<body>
    <div class="container">
        <h2>Status</h2>
        <a href="/morph/one2many/status/create" class="btn btn-primary">Create a new Status</a>
        <hr>
        <h1>All Status</h1>
        <hr>
        
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
            @foreach ($statuses as $status)
                <tr>
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->title }}</td>
                    <td>{{ $status->body }}</td>
                    <td><a href="/morph/one2many/status/{{ $status->id }}" class="">Show</a></td>
                </tr>
            @endforeach
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
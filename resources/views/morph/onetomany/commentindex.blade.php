<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Morph One to Many All Comments</title>
</head>
<body>
    <div class="container">
        <h2>All Comments</h2>
        
        
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Comment</th>
                <th>Commentable Type</th>
                <th>Commentable ID</th>
                <th>Action</th>
            </tr>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>{{ $comment->commentable_type }}</td>
                    <td>{{ $comment->commentable_id }}</td>
                    <td><a href="/morph/one2many/comment/{{ $comment->commentable->id }}" class="">Show</a></td>
                </tr>
            @endforeach
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
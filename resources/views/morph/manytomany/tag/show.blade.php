<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Morph Practice</title>
</head>
<body>
    <div class="container">

       <h4>Its a sing Tag shoing place</h4>
       <h1>{{ $tag->name }}</h1>
        <a href="/tags/create" class="btn btn-primary">Tag Craete</a>
        <a href="/morph/many2many" class="btn btn-primary">Morph Many to Many</a>
        
        <div class="">
            <h2>Status slist</h2>
        </div>        
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>                
            </tr>
            @foreach ($tag->statuses as $status)
            <tr>
                <td>{{ $status->id }}</td>
                <td>{{ $status->title }}</td>
                <td>{{ $status->body }}</td>
                <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>                
            @endforeach
        </table>



        <div class="">
            <h2>Video slist</h2>
        </div>        
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>URL</th>
                <th>Action</th>                
            </tr>
            @foreach ($tag->videos as $video)
            <tr>
                <td>{{ $video->id }}</td>
                <td>{{ $video->title }}</td>
                <td>{{ $video->url }}</td>
                <td>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>                
            @endforeach
        </table>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Morph One to Many single Video</title>
</head>
<body>
    <div class="container">
        <h2>{{ $video->title }}</h2>
        <p>{{ $video->url }}</p>

        <hr>
        <h3>Comments:</h3>
        <hr>
        @foreach ($video->comments as $comment)
            <li>{{ $comment->comment }}</li>
        @endforeach
        <form action="/morph/one2many/video/{{ $video->id }}/comment" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <textarea rows="5" cols="5" class="form-control" id="comment" name="comment"></textarea>
            </div>            

            <button type="submit" class="btn btn-primary">Comment</button>
        </form>
        
        
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">    
    <title>Morph One to Many single status</title>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#comment").click(function(){
                $("#section").show(100);
            });
        });
    </script> --}}
    
</head>
<body>
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ session('success') }}
            </div>
        @endif

        <h2>{{ $status->title }}</h2>
        <p>{{ $status->body }}</p>

        <strong>Tags: </strong>
        @foreach ($status->tags as $tag)
            <a href="/tags/{{ $tag->name }}" class="btn btn-success btn-sm mb-1">{{ $tag->name }}</a>
        @endforeach


        <div class="">
            <a href="/morph/one2many/status/{{ $status->id }}/edit" class="btn btn-primary">Edit</a>
        </div>
        <hr>
        <h3 id="comment">Comments:</h3>
        <hr>
        <div id="section">
            @foreach ($status->comments as $comment)
                <li>{{ $comment->comment }}</li>
            @endforeach
            <form action="/morph/one2many/status/{{ $status->id }}/comment" method="POST">
                @csrf

                <div class="mb-3 mt-3">
                    <textarea rows="5" cols="5" class="form-control" id="comment" name="comment"></textarea>
                </div>            

                <button type="submit" class="btn btn-primary">Comment</button>
            </form>
        </div>
       
        
        
    </div>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Morph One to many status</title>
</head>
<body>
    <div class="container">
        <h2>Video create</h2>
        <form action="/morph/one2many/video/create" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3 mt-3">
                <label for="url" class="form-label">Video URL:</label>
                <input type="text" class="form-control" id="url" name="url">
            </div>
            <div class="mb-3 mt-3">
                <label for="tag" class="form-label">Tags:</label>
                <select class="form-control" name="tag[]" multiple>
                    <option value="">Select tags</option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>              

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      
        

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
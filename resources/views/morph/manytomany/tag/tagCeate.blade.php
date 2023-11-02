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
        <h2>Tags create</h2>
        <form action="/tags" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Tag Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="description" class="form-label">Tag Description</label>
                <textarea rows="5" cols="5" class="form-control" id="description" name="description"></textarea>
            </div>            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      
        

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
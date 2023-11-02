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
        <h2>Post create</h2>
        <form action="/morph/one2one/post" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Name:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            
            <div class="mb-3 mt-3">
                <label for="body" class="form-label">Post Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" cols="5"></textarea>
            </div>

            <div class="mb-3 mt-3">
                <label for="img_path" class="form-label">Image Path:</label>
                <input type="text" class="form-control" id="img_path" name="img_path">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      
        

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
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
        <h2>Member create</h2>
        <form action="/morph/one2one/member" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
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
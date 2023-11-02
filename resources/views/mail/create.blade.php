<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Mail</title>
</head>
<body>
    <div class="container">
        <form action="/mailing" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">To:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="body" class="form-label">Mail</label>
                <textarea class="form-control" id="body" placeholder="Mail body" name="body" rows="5" cols="5"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Sent</button>
        </form>
    </div>






    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
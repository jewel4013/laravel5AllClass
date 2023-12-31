<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h1>Login form</h1>


        <form action="/login" method="POST">
            @csrf
                      
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>            
            <div class="form-group">
              <label for="uname">User Name</label>
              <input type="text" name="uname" id="uname" class="form-control">
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>







    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

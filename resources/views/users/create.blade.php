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
        <h1>Sign form</h1>


        <form action="/users/create" method="POST">
            @csrf
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" name="fname" id="fname" class="form-control">
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" id="lname" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
              <label for="uname">User Name</label>
              <input type="text" name="uname" id="uname" class="form-control">
          </div>



            <hr><hr>
            <h3>Profile info</h3>
            <div class="form-group">
              <label for="propic">Profile Pic</label>
              <input type="text" name="propic" id="propic" class="form-control">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group">
              <label for="bio">Biography</label>
              <input type="text" name="bio" id="bio" class="form-control">
            </div>
            <div class="form-group">
              <label for="date_of_birth">Date Of Birth</label>
              <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
            </div>
            <div class="form-group">
                <label for="country_id">Cuntry</label>
                <select name="country_id" id="country_id" class="form-control">
                  <option value="">Select your country</option>                    
                  @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>                    
                  @endforeach
                </select>
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

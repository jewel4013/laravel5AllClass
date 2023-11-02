<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Update</title>
</head>
<body>
    <div class="container">
        <h1>Create {{ $country->name }} country</h1>


        <form action="/country/{{ $country->id }}/edit" method="POST">
            @method('patch')
            @csrf
            <div class="form-group">
              <label for="name">Country Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{ $country->name }}">
            </div>
            <div class="form-group">
              <label for="capital">Capital Name</label>
              <input type="text" name="capital" id="capital" class="form-control" value="{{ $country->capital }}">
            </div>
            <div class="form-group">
                <label for="currency">Currency</label>
                <input type="text" name="currency" id="currency" class="form-control" value="{{ $country->currency }}">
              </div>
              <div class="form-group">
                <label for="population">Population</label>
                <input type="number" name="population" id="population" class="form-control" value="{{ $country->population }}">
              </div>
              <button type="submit" class="btn btn-primary">Update</button>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Create a new Book</title>
</head>
<body>
    <div class="container">
        <h1>Create a new Book.</h1>


        <form action="/books/create" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Book Name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control" rows="5" cols="5"></textarea>
            </div>
            <div class="form-group">
              <label for="isbn">ISBN Number</label>
              <input type="text" name="isbn" id="isbn" class="form-control">
            </div>
            <div class="form-group">
              <label for="author_id">Authors</label>
              <select name="author_id[]" id="author_id" class="form-control" multiple>
                @foreach ($authors as $author)
                  <option value="{{ $author->id }}">{{ $author->name }}</option>                    
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

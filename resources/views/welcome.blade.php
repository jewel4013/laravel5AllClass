<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>It's our Home Page</h1>

        <div class="">
            <a href="/authors" class="btn btn-primary">Authors</a>
            <a href="/books" class="btn btn-primary">Books</a>
            <a href="/country" class="btn btn-primary">Country</a>
            <a href="/person" class="btn btn-primary">Person</a>
            <a href="/users" class="btn btn-primary">User</a>
            <a href="/mailing" class="btn btn-primary">Sent mail</a>
            <a href="/files" class="btn btn-primary">File upload</a>
            <a href="/morph" class="btn btn-primary">Morph Relations</a>
            <a href="/sessionput" class="btn btn-primary">Session_Put</a>
            <a href="/sessionpull" class="btn btn-primary">Session_Pull</a>
            <a href="/login" class="btn btn-primary">Log In</a>
            <a href="/logout" class="btn btn-primary">Log out</a>
        </div>


        {{-- <p>{{ session()->get('user_name', 'No Session create') }}</p> --}}
        {{-- <p>{{ request()->session()->get('user_name', 'No Session create') }}</p> --}}
        {{-- <P>{{ session()->has('user_name') ? 'Yes' : 'No' }}</P>
        <P>{{ session()->exists('user_name') ? 'Yes' : 'No' }}</P> --}}
        <P>{{ session()->exists('user') ? 'Yes' : 'No' }}</P>
        



    </div>



    
</body>
</html>
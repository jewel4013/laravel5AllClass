<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>{{ $user->fname }}</title>
</head>
<body>
    <div class="container">
        <h2>{{ $user->fname }}</h2>
        <a href="/" class="btn btn-secondary">Home</a>

        <table class="table">
            <tr>
                <th>Profile Pic</th>
                <td>{{ $user->profile->propic }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $user->profile->address }}</td>
            </tr>
            <tr>
                <th>Biography</th>
                <td>{{ $user->profile->bio }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $user->profile->date_of_birth }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>
                    <a href="/country/{{ $user->profile->country->id }}" class="">{{ $user->profile->country->name }}</a>
                </td>
            </tr>
        </table>
       
    </div>

</body>
</html>

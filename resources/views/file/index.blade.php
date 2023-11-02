<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Upload your files</title>
</head>
<body>
    <div class="container">
        <form action="files" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
                <label for="user_img" class="form-label">File</label>
                <input type="file" 
                        class="form-control {{ $errors->has('user_img') ? 'is-invalid' : '' }}" 
                        id="user_img" 
                        placeholder="Enter user_img" 
                        name="user_img[]"
                        multiple>
                
                @if($errors->has('user_img'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('user_img') }}</strong>
                    </span>
                @endif

              </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
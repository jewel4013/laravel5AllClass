<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Morph One to many status</title>
</head>
<body>
    <div class="container">        

        <h2>Update {{ $status->title }}</h2>
        <form action="/morph/one2many/status/{{ $status->id }}/edit" method="POST">
            @csrf
            @method('patch')

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }} " id="title" name="title" value="{{ !empty(old('title')) ? old('title') : $status->title }}">
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('title') }}
                    </span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="body" class="form-label">Status Body:</label>
                <textarea rows="5" cols="5" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" id="body" name="body">{{ !empty(old('body')) ? old('body') :  $status->body }}</textarea>
                @if ($errors->has('body'))
                    <span class="invalid-feedback" role="alert">
                        {{ $errors->first('body') }}
                    </span>
                @endif
            </div>
            <div class="mb-3 mt-3">
                <label for="tag" class="form-label">Tags:</label>
                <select class="form-control" name="tag[]" multiple>                    
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" {{ $status->tags->pluck('id')->contains($tag->id) ? 'selected' : '' }}>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>                        

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      
        

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
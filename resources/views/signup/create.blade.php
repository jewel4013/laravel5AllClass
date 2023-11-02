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
        <h1>Signup form</h1>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>                  
                @endforeach
              </ul>
            </div>
        @endif --}}
        <form action="/signup/form" method="POST">
            @csrf


            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" name="fname" id="fname" class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" value="{{ old('fname') }}">
              
              @if ($errors->has('fname'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('fname') }}</strong>  
                </span>                  
              @endif

            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" id="lname" class="form-control {{ $errors->has('lname') ? 'is-invalid' : '' }}" value="{{ old('lname') }}">
              
              @if ($errors->has('lname'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('lname') }}</strong>  
                </span>                  
              @endif

            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}">

              @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>  
                </span>                  
              @endif

            </div>            
            <div class="form-group">
              <label for="uname">User Name</label>
              <input type="text" name="uname" id="uname" class="form-control {{ $errors->has('uname') ? 'is-invalid' : '' }}" value="{{ old('uname') }}">

              @if ($errors->has('uname'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('uname') }}</strong>  
              </span>                  
              @endif

            </div>
            <div class="form-group">
              <label for="date_of_birth">Date Of Birth</label>
              <input type="date" name="date_of_birth" id="date_of_birth" class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" value="{{ old('date_of_birth') }}">

              @if ($errors->has('date_of_birth'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('date_of_birth') }}</strong>  
              </span>                  
              @endif

            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" name="phone" id="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}">

              @if ($errors->has('phone'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone') }}</strong>  
                </span>                  
              @endif

            </div>            
            <div class="form-group">
              <label for="bio">Biography</label>
              <textarea name="bio" id="bio" class="form-control {{ $errors->has('bio') ? 'is-invalid' : '' }}" rows="5" cols="5">{{ old('bio') }}</textarea>

              @if ($errors->has('bio'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('bio') }}</strong>  
                </span>                  
              @endif

            </div>
            <div class="form-group">
              <label for="post_code">Post Code</label>
              <input type="number" name="post_code" id="post_code" class="form-control {{ $errors->has('post_code') ? 'is-invalid' : '' }}" value="{{ old('post_code') }}">

              @if ($errors->has('post_code'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('post_code') }}</strong>  
                </span>                  
              @endif

            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}">
              
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>  
                </span>                  
              @endif

            </div>

            <div class="form-group">
              <label for="password_confirmation">Confirmed Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password_confirmation') }}">
              
              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>  
                </span>                  
              @endif

            </div>
            
            {{-- <div class="form-group">
                <label for="country_id">Cuntry</label>
                <select name="country_id" id="country_id" class="form-control">
                  <option value="">Select your country</option>                    
                  @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>                    
                  @endforeach
                </select>
            </div> --}}
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

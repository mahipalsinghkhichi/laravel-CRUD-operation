@extends('layouts.app') @section('content') <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register') }}</div>
        <div class="card-body">
          <form id="regiform" method="POST" action="{{ route('register') }}"> @csrf <div class="row mb-3">
              <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name') <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email') <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span> @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary"> {{ __('Register') }} </button>
              </div>
            </div>
          </form>
          <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
          <script>
            $(document).ready(function() {
              $("#regiform").validate({
                rules: {
                  name: {
                    required: true,
                    maxlength: 20
                  },
                  email: {
                    required: true,
                    email: true,
                    maxlength: 50
                  },
                  password: {
                    required: true,
                    minlength: 5
                  },
                  password_confirmation: {
                    required: true,
                    equalTo: "#password"
                  }
                },
                messages: {
                  name: {
                    required: "Your name is required",
                    maxlength: "Your name cannot be more than 20 characters"
                  },
                  email: {
                    required: "Email is required",
                    email: "Email must be a valid email address",
                    maxlength: "Email cannot be more than 50 characters",
                  },
                  password: {
                    required: "Password is required",
                    minlength: "Password must be at least 5 characters",
                  },
                  password_confirmation: {
                    required: "Confirm password is required",
                    equalTo: "Password and Confirm Password dont match "
                  }
                }
              });
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</div>@endsection
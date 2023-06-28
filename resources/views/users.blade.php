<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Registration Form</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('usersPost') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="email_verified_at" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Confirm Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
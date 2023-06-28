<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- <meta name="_token" content="{{csrf_token()}}"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                @if(session()->has('message'))

                {{ session('message')}}

                @endif

                <div class="card ">
                    <div class="card-header">
                        <h4>Candidate Form</h4>
                    </div>
                    <div class="card-body">

                        <form id="form" action="{{$url}}">

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus> @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <b><span class="name_error"></span></b>
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email"> @error('email') <span class="invalid-feedback" role="alert">
                                        <b><span class="email_error"></span></b>
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('password') is-invalid @enderror" name="address" autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                                        <b><span class="address_error"></span></b>
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('country') }}</label>
                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control @error('password') is-invalid @enderror" name="country" autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                                        <b><span class="country_error"></span></b>
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('state') }}</label>
                                <div class="col-md-6">
                                    <input id="state" type="text" class="form-control @error('password') is-invalid @enderror" name="state" autocomplete="new-password"> @error('password') <span class="invalid-feedback" role="alert">
                                        <b><span class="state_error"></span></b>
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary"> {{ __('Register') }} </button>
                                </div>
                            </div>
                            <a class="justify-content-right text-left" href="{{url('login')}}">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<!-- <script>
window.addEventListener('load', function() {
    $("#form").validate({
        rules: {
            name: {
                required: true,
                maxlength: 20,
            },
            email: {
                required: true,
                email: true,
                maxlength: 30
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
            },
        },
        messages: {
            name: {
                required: "Name is required",
                maxlength: "Name cannot be more than 20 characters"
            },
            email: {
                required: "Email is required",
                email: "Email must be a valid email address",
                maxlength: "Email cannot be more than 30 characters",
            },
            password: {
                required: "Password is required",
                minlength: "Password must be at least 6 characters"
            },
            confirm_password: {
                required:  "Confirm password is required",
                equalTo: "Password and confirm password should same"
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script> -->


<script>
    $(document).ready(function() {
        jQuery.validator.addMethod("validEmail", function(value, element) {
            return this.optional(element) || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value);
        }, "Enter a valid email");
        $('#form').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 20,
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 30
                },
                address: {
                    required: true,
                    maxlength: 60
                },
                country: {
                    required: true,
                    maxlength: 15
                },
                state: {
                    required: true,
                    maxlength: 15
                }
            },
            messages: {
                name: {
                    required: "Name is required",
                    maxlength: "Name cannot be more than 20 characters"
                },
                email: {
                    required: "Email is required",
                    email: "Email must be a valid email address",
                    maxlength: "Email cannot be more than 30 characters",
                },
                address: {
                    required: "Address is required",
                    maxlength: "Address cannot be more than 60"
                },
                country: {
                    required: "Country name is required",
                    maxlength: "Country cannot be more than 15"
                },
                state: {
                    required: "State name is required",
                    maxlength: "State cannot be more than 15"
                }
            },
        });

        $('#form').submit(function(e) {
            e.preventDefault();
            var form = $("#form").serializeArray();
            console.log(form);

            $.ajax({
                url: "{{url('candidatePost')}}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: form,
                success: function(form) {
                    console.log(form);
                    if ($.isEmptyObject(form.error)) {
                        var record = document.getElementById('form');
                        record.reset();
                        // $("#form").reset();
                        window.alert('User has been registered');
                        // alert(data.success);
                        // $('.name_error').text('');
                        // $('.email_error').text('');
                        // $('.password_error').text('');

                    } else {
                        printErrorMsg(data.error);
                    }
                },
            });
        });

        function printErrorMsg(msg) {
            $.each(msg, function(key, value) {
                console.log(key);
                $('.' + key + '_error').text(value);
            });
        }

    });
</script>

</html>
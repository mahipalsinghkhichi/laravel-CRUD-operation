<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<style>
    .body {
        background: linear-gradient(to right, #cc2b5e, #753a88, #cc2b5e);
        font-family: 'Poppins', sans-serif;
    }

    .title {
        color: black;

    }

    .input-control {
        color: black;

    }
</style>

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

                    <div class="card  body">
                        <div class="card-header">
                            <h4 class="title">Login Form</h4>
                        </div>
                        <div class="card-body">

                            <form id="form" name="myForm" action="{{ url('loginPost') }}" onsubmit="return validateForm()" method="POST">
                                @csrf
                                <div class="form-group mb-3 input-control" id="email">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control"><b><span class="formerror"></span></b>
                                </div>

                                <div class="form-group mb-3 input-control" id="password">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control"><b><span class="formerror"></span></b>
                                </div>

                                <div class="form-group mb-3 text-center">
                                    <button type="submit" class="btn btn-warning ">Login</button>
                                </div>
                                <a href="{{url('register')}}">Register</a>

                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
<script>
    function clearErrors() {

        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = "";
        }
    }

    function seterror(id, error) {
        //sets error inside tag of id 
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;
    }

    function validateForm() {
        var returnval = true;
        clearErrors();
        var email = document.forms['myForm']["email"].value;
        if (email.length > 30) {
            seterror("email", "*Email length is too long");
            returnval = false;
        }
        if (email.length == '') {
            seterror("email", "*Email is required");
            returnval = false;
        }

        var password = document.forms['myForm']["password"].value;
        if (password.length < 8) {
            seterror("password", "*Password should be atleast 8 characters long!");
            returnval = false;
        }
        if (password.length == '') {
            seterror("password", "*Password is required");
            returnval = false;
        }
        return returnval;
    }
</script>

</html>





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JavaScript Form Validation</title>
    <link rel="stylesheet" href="">
    <style>
        body {
            padding: 10px 50px;
        }

        .formdesign {
            font-size: 20px;

        }

        .formdesign input {
            width: 50%;
            padding: 12px 20px;
            border: 1px solid blue;
            margin: 14px;
            border-radius: 4px;
            font-size: 15px;
        }

        .formerror {
            color: red;
        }

        .but {
            border-radius: 9px;
            width: 100px;
            height: 50px;
            font-size: 25px;
            margin: 22px 20px;
        }
    </style>

</head>

<body>
    <h1>Validation Form</h1>
    <form aciton="" name="myForm" action="{{ url('loginPost') }}" onsubmit="return validateForm()" method="post">
    
        <div class="formdesign" id="email">
            Email: <input type="email" name="femail" ><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="pass">
            Password: <input type="password" name="fpass" ><b><span class="formerror"></span></b>
        </div>

        <input class="but" type="submit" value="Submit">

    </form>
</body>
<script src="index.js"></script>
<script>
    function clearErrors() {

        errors = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = "";
        }


    }
    function seterror(id, error) {
        //sets error inside tag of id 
        element = document.getElementById(id);
        element.getElementsByClassName('formerror')[0].innerHTML = error;

    }

    function validateForm() {
        var returnval = true;
        clearErrors();

       

        var email = document.forms['myForm']["femail"].value;
        if (email.length >20) {
            seterror("email", "*Email length is too long");
            returnval = false;
        }
        if (email.length =='') {
            seterror("email", "*Email is required");
            returnval = false;
        }

      

        var password = document.forms['myForm']["fpass"].value;
        if (password.length < 6) {

            // Quiz: create a logic to allow only those passwords which contain atleast one letter, one number and one special character and one uppercase letter
            seterror("pass", "*Password should be atleast 6 characters long!");
            returnval = false;
        }
        if (password.length =='') {
            seterror("password", "*Password is required");
            returnval = false;
        }

      

        return returnval;
    }


</script>

</html> -->
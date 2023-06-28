<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
</head>
<body class="container">
    <h1>This is my Listing page</h1>

    <table border="1" class="table table-success">
        <tr >
            <th scope="col">Id</th >
            <th scope="col">Name</th >
            <th scope="col">Email</th >
            <th scope="col">Action</th >
        </tr>
        @foreach($students as $studentModel)
        <tr  class="table-primary">
            
            <td scope="row" >{{$studentModel['id']}}</td scope="row">
            <td scope="row">{{$studentModel['name']}}</td scope="row">
            <td scope="row">{{$studentModel['email']}}</td scope="row">
            <td scope="row ">
                <button class="btn btn-success"><a href="{{url('register')}}" class="text-light" >Edit</a></button>
                <button class="btn btn-success"><a href = 'register/{{ $studentModel->id }}' class="text-light" >Delete</a></button>
            </td>
        </tr>
        @endforeach
    </table>
    <span>{{$students->links()}}</span>

<style>
    .w-5{
        display: none;
    }
    
</style>


</body>
</html>


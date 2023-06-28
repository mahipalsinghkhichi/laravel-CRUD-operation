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
    <h1 class="text-center m-3 " style="text-shadow:2px 2px green">candidates Records</h1>
   
    <a href="{{url('candidateTable/candidatetrash')}}" class="m-3 btn btn-warning font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">candidate_trash_table</a>
    <table border="1" class="table table-success">
        <tr >
            <th scope="col">Id</th >
            <th scope="col">Name</th >
            <th scope="col">Email</th >
            <th scope="col">Address</th >
            <th scope="col">Country</th >
            <th scope="col">State</th >
            <th scope="col">Action</th >
        </tr>
        @foreach($candidates as $CandidateModel)
        <tr  class="table-primary">

            <td scope="row">{{$CandidateModel['id']}}</td scope="row">
            <td scope="row">{{$CandidateModel['name']}}</td scope="row">
            <td scope="row">{{$CandidateModel['email']}}</td scope="row">
            <td scope="row">{{$CandidateModel['address']}}</td scope="row">
            <td scope="row">{{$CandidateModel['country']}}</td scope="row">
            <td scope="row">{{$CandidateModel['state']}}</td scope="row">
            <td scope="row ">
                <button class="btn btn-success"><a href ="{{url('candidateTable/delete')}}/{{$CandidateModel->id}}" class="text-light" >Delete</a></button>
                <button class="btn btn-success"><a href="{{url('candidateTable/edit')}}/{{$CandidateModel->id}}" class="text-light" >Edit</a></button>
            </td>
        </tr>
        @endforeach
    </table>
    <span>{{$candidates->links()}}</span>

<style>
    .w-5{
        display: none;
    }
    
</style>


</body>
</html>

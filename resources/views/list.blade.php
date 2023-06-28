<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is my Listing page</h1>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach($students as $studentModel)
        <tr>
            <td>{{$studentModel{'id'}}}</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @endforeach
    </table>




</body>
</html>

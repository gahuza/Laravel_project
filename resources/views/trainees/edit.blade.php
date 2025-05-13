<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="{{route('trainee.update',['student'=>$Student])}}" method="post" style="text-align:center; margin-top:70px;">
        @csrf
        @method('put')
    <h2>Modify a student</h2>
    <div>
        <label for="">Names:</label>
        <input type="text" name="names" value="{{$Student->names}}">
    </div></br>
    <div>
        <label for="">Email:</label>
        <input type="text" name="email" value="{{$Student->email}}">
    </div></br>
    <div>
        <label for="">Gender:</label>
        <input type="text" name="gender" value="{{$Student->gender}}">
    </div></br>
    <div>
    <label for=""></label>
        <input type="submit" name="update" value="UPDATE">
    </div>
    </form>
</body>
</html>
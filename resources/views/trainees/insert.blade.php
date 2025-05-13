<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="{{route('trainee.save')}}" method="post" style="text-align:center; margin-top:70px;">
        @csrf
        @method('post')
    <h2>Register a student</h2>
    <div>
        <label for="">Names:</label>
        <input type="text" name="names">
    </div></br>
    <div>
        <label for="">Email:</label>
        <input type="text" name="email">
    </div></br>
    <div>
        <label for="">Gender:</label>
        <input type="text" name="gender">
    </div></br>
    <div>
    <label for=""></label>
        <input type="submit" name="regi" value="REGISTER">
    </div>
    </form>
</body>
</html>
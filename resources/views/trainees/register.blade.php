<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form action="{{route('user.regi')}}" method="post" style="text-align:center; margin-top:70px;">
        @csrf
        @method('post')
    <h2>Register a NEW User</h2>
    <div>
        <label for="">Name:</label>
        <input type="text" name="name">
    </div></br>
    <div>
        <label for="">Email:</label>
        <input type="text" name="email">
    </div></br>
    <div>
        <label for="">Password:</label>
        <input type="text" name="password">
    </div></br>
    <div>
    <label for=""></label>
        <input type="submit" name="regi" value="REGISTER A USER">
    </div>
    </form>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
</head>
<body style="text-align:center;">
   
    <div style="text-align:center;">
    <h2>Trainee Dashboard page</h2>
    @if(session()->has('success'))
     <div>
        {{session('success')}}
     </div>
    @endif
        <table border="0" style="">
        <tr style="color:orange; text-align:center;">
            <th>ID</th>
            <th>Names</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <th>{{$student->id}}</th>
            <th>{{$student->names}}</th>
            <th>{{$student->email}}</th>
            <th>{{$student->gender}}</th>
            <th>
                <a href="{{route('trainee.edit',['student' => $student])}}">UPDATE</a>
            </th>
            <th>
                <form action="{{route('trainee.delete',['student'=>$student])}}" method="post">
                    @csrf
                    @method('delete')
                   <input type="submit" name="delete" value="DELETE">
                </form>
            </th>
        </tr>

        @endforeach
        </table>
    </div>
</body>
</html>
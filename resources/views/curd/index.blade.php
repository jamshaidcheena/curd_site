<!doctype html>
<html lang="en">
<head>
    <title>display curd form data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-text">
            <a href="{{ route('create.student') }}" class="btn btn-primary" style="float:right;">Add Student</a>
            </div>
            <div class="title">
            <h5>Curd Application</h5>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Stu.Name</th>
                        <th scope="col">FatherName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
{{--                        <th scope="col">Address</th>--}}
                        <th scope="col">City</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
            <tbody>
                    @if($students)
                        @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->stuName}}</td>
                        <td>{{$student->stuFatherName}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
        {{--                <td>{{$student->address}}</td>--}}
                        <td>{{$student->city}}</td>
                        <td><a href="student_edit/{{$student->id}}" class="btn btn-primary">Update</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>

                        @endforeach
                        @endif
            </tbody>
    </div>

</div>

</div>
{{ $students->links() }}

</body>
</html>

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
            <div class="title">
                <h5>Update Student Data</h5>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ url('student_update/{$student->id}')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>StuName</label>
                    <input type="text" name="stuName" class="form-control" value="{{$student->stuName}}">
                </div>
                <div class="form-group">
                    <label>FatherName</label>
                    <input type="text" name="stuFatherName" class="form-control" value="{{$student->stuFatherName}}">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="{{$student->password}}">
                </div>
                <div class="form-group">
                    <label>Enter Phone</label>
                    <input type="number" name="phone" class="form-control" value="{{$student->phone}}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="{{$student->address}}">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{$student->city}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>
</body>
</html>

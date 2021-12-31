<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-success" href="#">
            ImageUpload
        </a>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="navbarSupportedContent">
            <ul class=" nav navbar-nav navbar-center">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('Home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a  href="{{route('dataView')}}" class="nav-link">Crud</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container pt-5">
    <div class="row">
        <div class="col-md-12">
            @if($message=Session::get('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{$message}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">SI</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Roll</th>
                        <th scope="col">Student Phone</th>
                        <th scope="col">Student Email</th>
                        <th scope="col">Student Image</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->roll}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <img src="{{asset($student->image)}}" width="100" height="100">
                        </td>
                        <td>
                            <a href="{{route('dataEdit',['id'=>$student->id])}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('dataDelete',['id'=>$student->id])}}" onclick="return('are you want sure delete this data');" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"  ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"  ></script>
</body>
</html>

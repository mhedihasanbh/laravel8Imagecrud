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

            <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail11" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Roll</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="roll">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Phone</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="phone">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Photo</label>
                    <input type="file" class="form-control-file" id="exampleInputEmail1" name="image" >

                </div>


                <button type="submit" class="btn btn-block  btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"  ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"  ></script>
</body>
</html>

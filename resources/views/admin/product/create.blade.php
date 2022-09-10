@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Add Product </h2>
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category">Category:</label>
            <select  class="form-control" id="category"  name="category">
                <option selected disabled> Select </option>
                @foreach($catogeries as $catogery)
                    <option value="{{ $catogery->id }}"> {{ $catogery->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
        </div>
        <div class="form-group">
            <input id="fileupload" type="file" name="image[]" multiple="multiple" />
            <hr />
            <b>Live Preview</b>
            <br />
            <br />
            <div id="dvPreview">
            </div>
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" class="form-control" id="color" placeholder="Enter color" name="color">
        </div>
        <label for="email">is active:</label>
        <div class="checkbox">
            <label><input type="checkbox" checked name="is_active">is_active</label>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea cols="4" rows="4" class="form-control" id="description"  name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>

    <script language="javascript" type="text/javascript">
        window.onload = function () {
        var fileUpload = document.getElementById("fileupload");
        fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
        var dvPreview = document.getElementById("dvPreview");
        dvPreview.innerHTML = "";
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        for (var i = 0; i < fileUpload.files.length; i++) {
        var file = fileUpload.files[i];
        if (regex.test(file.name.toLowerCase())) {
        var reader = new FileReader();
        reader.onload = function (e) {
        var img = document.createElement("IMG");
        img.height = "100";
        img.width = "100";
        img.src = e.target.result;
        dvPreview.appendChild(img);
    }
        reader.readAsDataURL(file);
    } else {
        alert(file.name + " is not a valid image file.");
        dvPreview.innerHTML = "";
        return false;
    }
    }
    } else {
        alert("This browser does not support HTML5 FileReader.");
    }
    }
    };
</script>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container pt-5">
  <div class="row">
    <h1>Edit Category</h1>
    <div class="col-md-4">
      <h3>Title</h3>
      <form action="/category-update/{{ $category->id }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ $category->title }}">
        <button class="btn btn-info" type="submit">Update</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>

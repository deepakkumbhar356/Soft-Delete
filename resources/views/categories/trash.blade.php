<!DOCTYPE html>
<html lang="en">
<head>
  <title>Soft Delete</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container pt-5">
  <h2>Categories Table <a class="btn btn-info" href="/category-create">New Category</a> </h2>
  <h2>Categories Table <a class="btn btn-info" href="/">Home</a> </h2>
   <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($categories as $category )
            
        
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $category->title }}</td>
        <td>
             <a href="/category-restore/{{ $category->id }}" class="btn btn-info" >Restore</a>
             {{-- <a href="/category-delete/{{ $category->id }}" class="btn btn-danger" >Delete</a> --}}
             
             <form action="/category-force-delete/{{ $category->id }}">
              @csrf
              @method('delete')
              <button type="submit" class="btn-sm btn-danger">Delete</button>  
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

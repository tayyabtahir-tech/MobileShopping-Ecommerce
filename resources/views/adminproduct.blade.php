<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <style type="text/css">
      .admin-image{
        height: 50px;
      }
    </style>

    <title>Users Data</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>

        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="vieworders">Orders</a>

        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="usersdata">Users</a>

        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminproduct">Products</a>

        </li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/adminlogout">Logout</a></li>
          </ul>
        </li>
       
        @endif
        
      </ul>
      

    </div>
  </div>
</nav>
  	<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Gallery</th>
      <th scope="col">Description</th>
      <th scope="col"><a class="btn btn-warning"  href="addproduct">Insert Product</a></th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $user)
    <tr>
      <th scope="row">{{$user['id']}}</th>
      <td>{{$user['name']}}</td>
      <td>{{$user['price']}}</td>
      <td>{{$user['category']}}</td>
      <td><img class="admin-image" src={{$user['gallery']}}></td>
      <td>{{$user['description']}}</td>
      <td><a class="btn btn-warning" href={{"delete/".$user['id']}}>Delete</a></td>
      <td><a class="btn btn-warning" href={{"edit/".$user['id']}}>Edit</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
    @include('footer')
  </body>
</html>

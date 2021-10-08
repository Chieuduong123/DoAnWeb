<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Products</h4>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <form class="forms-sample" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Price</label>
                      <input name="price" type="text" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Count</label>
                      <input name="count" type="text" class="form-control" id="exampleInputName1" placeholder="Count">
                    </div>
                    <div class="form-group">
                      <label>Image Upload</label>
                      <input name="img" type="file" class="form-control-file">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Description</label>
                      <input name="description" type="text" class="form-control" id="exampleInputCity1" placeholder="Description">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- plugins:js -->
            <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page-->
            <script src="{{asset('js/Chart.min.js')}}"></script>
            <!-- End plugin js for this page-->
            <!-- inject:js -->
            <script src="{{asset('js/off-canvas.js')}}"></script>
            <script src="{{asset('js/hoverable-collapse.js')}}"></script>
            <script src="{{asset('js/template.js')}}"></script>
            <script src="{{asset('js/todolist.js')}}"></script>
            <!-- endinject -->
            <!-- Custom js for this page-->
            <script src="{{asset('js/dashboard.js')}}"></script>
</body>

</html>
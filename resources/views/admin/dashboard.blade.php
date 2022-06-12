@extends('admin.index')
@section('content')
<div class="container">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">client Name</th>
      <th scope="col">client email</th>
      <th scope="col">client role</th>
      <th scope="col">{{session('name')}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
@endsection
<script src={{asset("vendor/jquery/jquery.min.js")}}></script>
    <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{asset("js/sb-admin-2.min.js")}}></script>

    <!-- Page level plugins -->
    <script src={{asset("vendor/chart.js/Chart.min.js")}}></script>

    <!-- Page level custom scripts -->
    <script src={{asset("js/demo/chart-area-demo.js")}}></script>
    <script src={{asset("js/demo/chart-pie-demo.js")}}></script>

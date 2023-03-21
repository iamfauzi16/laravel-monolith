
@extends('dashboard.layouts.main')

@section('title', 'Dashboard - Gallery')

@push('styles')
  
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
@endpush

@section('content')
  @section('heading' , 'Gallery')
  
  <div>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><span class="pr-2"><i class="fa fa-plus" aria-hidden="true"></i></span>Add Content</button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="/content/post">
              @csrf

              <div class="form-group">
                <label for="exampleInput">Header</label>
                <input type="text" class="form-control" id="exampleInput" name="heading">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="images">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        
        </div>
      </div>
    </div>


    <div class="mt-4">
      <h6>Detail Content</h6>
      <table class="table table-striped table-hover text-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Company</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
         
        
        </tbody>
      </table>
    </div>
  </div>

@endsection

@push('scripts')
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="js/sb-admin-2.min.js"></script>
  <script>
    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options)
  </script>
 @endpush
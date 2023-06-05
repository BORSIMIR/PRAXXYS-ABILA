<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
<div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">

        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
 <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
        <div class="col-12">
        <div class="text-left">
            <a class="btn btn-success" href="{{url('create_product')}}">+ Create new product</a>
        </div>

      
<div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
    <tr style="background-color: black;">
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">No.</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Name</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Category</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Description</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Date</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Image</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Update</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Delete</th>

      </tr>
      </thead>



      <tbody>
         @foreach($product as $product)

    <tr style="background-color: black;" align="center">
      <td style="padding: 10px; color: white;">{{ $loop->index+1 }}</td>

      <td style="padding: 10px; color: white;">{{ $product->name }}</td>


      <td style="padding: 10px; color: white;">{{ $product->category }}</td>

      <td style="padding: 10px; color: white;">{{ $product->description }}</td>

      <td style="padding: 10px; color: yellow;">{{ $product->date }}</td>

      <td>
              <img src="product/{{ $product->image }}" class="rounded-circle" width="50" height="50"/></td>
            <td>
              
              <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Update</a>

            </td>


            <td>

              <a onclick="return confirm('are you sure to delete this ?')"class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a>

            </td>

    </tr>
    @endforeach

  </tbody>
  </table>

  </div>
  
</div>

      




      </div>
</div>
</div>
</div>
</div>

      </div>
  </div>

      
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
    <!-- End custom js for this page -->
  </body>
</html>
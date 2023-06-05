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
        <div class="card">
        <div class="card-body">
      <div class="container-fluid page-body-wrapper">

      <h3 class="text-muted">Product Edit #{{ $product->id }}</h3>
  	<form method="POST" action="{{url('edit_product',$product->id)}}" enctype="multipart/form-data">
  		@csrf
  		@method('PUT')
  		<div class="row justify-content-center">
  			@if($message = Session::get('success'))
      	<div class="alert alert-success alert-block">
      		<strong>{{ $message }}</strong>
      	</div>
      	@endif
  		<div class="form-group">
  			<label>Name</label><br>
  			<input type="text" style="color: black;"  name="name" class="form-control" placeholder="Write the Name"/ value="{{ old('name',$product->name)}}">
  			@if($errors->has('name'))
  			<span class="text-danger">{{ $errors->first('name')}}
  			@endif
  		</div>

  		<div class="form-group">
  			<label for="category">Select Category</label><br>
  			<select name="category" id="category" style="color: white;" class="form-control">
  			<option disabled>Select Category</option>
  			<option hidden></option>
  			<option value="Fruit">Fruit</option>
  			<option value="Vegetable">Vegetable</option>
  			<option value="Drinks">Drinks</option>
  			<option value="Liquor">Liquor</option>
			</select>
  			@if($errors->has('category'))
  			<span class="text-danger">{{ $errors->first('category')}}
  			@endif
  		</div>

  		<div class="form-group">
  			<label>Description</label><br>
  			<input type="text" style="color: black;"  name="description"  class="form-control" placeholder="Write the Description"/ value="{{ old('description',$product->description)}}">
  			@if($errors->has('description'))
  			<span class="text-danger">{{ $errors->first('description')}}
  			@endif
  		</div>

  		<div class="form-group">
  			<label>Date</label><br>
  			<input type="date" style="color: black;" name="date" class="form-control" placeholder="Write the Date"/ value="{{ old('date')}}">
  			@if($errors->has('date'))
  			<span class="text-danger">{{ $errors->first('date')}}
  			@endif
  		</div>

  		<div class="form-group">
  			<label>Image</label><br>
  			<input type="file" style="color: black;"  name="image" />
  			@if($errors->has('image'))
  			<span class="text-danger">{{ $errors->first('image')}}
  			@endif
  		</div>

  	</div>
  	<button type="submit" class="btn btn-success">SUBMIT</button>
  		
  	</form>


      




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
    <!-- End custom js for this page -->
  </body>
</html>
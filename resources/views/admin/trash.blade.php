<div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
    <tr style="background-color: black;">
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Doctor Name</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Type</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Date</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Message</th>
      
      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Status</th>

      <th style="padding: 10px; font-size: 20px; color: white; text-align: center;">Cancel Appointment</th>
      </tr>
      </thead>



      <tbody>

    <tr style="background-color: black;" align="center">
      <td style="padding: 10px; color: white;"></td>

      <td style="padding: 10px; color: white;"></td>


      <td style="padding: 10px; color: white;"></td>

      <td style="padding: 10px; color: white;"></td>

      <td style="padding: 10px; color: yellow;"></td>

      <td><a class="bt btn-danger" onclick="return confirm('are you sure to delete this ?')"   href="#}">Cancel</td>

    </tr>


  </tbody>
  </table>

  </div>
  
</div>


<div class="text-left">
            <a class="btn btn-success" href="{{url('create_product')}}">+ Create new product</a>
        </div>

        <div class="table-responsive"> 
        <table class="table" id="mytable">
          <thead>
          
          
          <tr style="background-color: white;">
            <th style="text-align:center;">No.</th>
            <th style="text-align:center;">Name</th>
            <th style="text-align:center;">Category</th>
            <th style="text-align:center;">Description</th>
            <th style="text-align:center;">Date</th>
            <th style="text-align:center;">Image</th>
            <th style="text-align:center;">Update</th>
            <th style="text-align:center;">Delete</th>
          </tr>
          </thead>
          <tbody>
        
          @foreach($product as $product)

          <tr align="center" style="background-color: black;">

            <td>{{ $loop->index+1 }}</td>
            
            <td>{{ $product->name }}</td>

            <td>{{ $product->category }}</td>

            <td>{{ $product->description }}</td>

            <td>{{ $product->date }}</td>

            <td>
              <img src="product/{{ $product->image }}" class="rounded-circle" width="50" height="50"/></td>
            <td>
              
              <a class="btn btn-success" href="#">Update</a>

            </td>


            <td>

              <a onclick="return confirm('are you sure to delete this ?')"class="btn btn-danger" href="#">Delete</a>

            </td>


          </tr>
          @endforeach

        </tbody>
        </table>



        </table>
      </div>
      </div>
      </div>
      </div>
      </div>


      <div class="content-wrapper">
        <div class="row">
        <div class="col-12">



      <div align="center" style="padding-top: 100px;">


        <div class="text-left">
            <a class="btn btn-success" href="{{url('create_product')}}">+ Create new product</a>
        </div>

        <div class="table-responsive">
    <table class="table" id="myTable">
      <thead>
    <tr style="background-color: white;">
      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">No.</th>

      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Name</th>
      
      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Category</th>
      
      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Description</th>
      
      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Date</th>

      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Image</th>

      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Update</th>

      <th style="padding: 10px; font-size: 20px; color: black; text-align: center;">Delete</th>
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
              
              <a class="btn btn-success" href="#">Update</a>

            </td>


            <td>

              <a onclick="return confirm('are you sure to delete this ?')"class="btn btn-danger" href="#">Delete</a>

            </td>

    </tr>
    @endforeach

  </tbody>
  </table>

  </div>
  
</div>
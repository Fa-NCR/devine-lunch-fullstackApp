<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
        @include("admin.navbar")
        
        <div class="container">

  	<h1>Customer Orders</h1>


    <form action="{{url('/search')}}" method="get">

      @csrf
      

      <input type="text" name="search" style="color:blue;">

      <input type="submit" value="Search" class="btn btn-success">


    </form>
   





  	<table>




  		
  		<tr align="center" >

         


  			<th  style="padding: 40px; line-weight:50px"">Name</th>
  			<th style="padding: 40px;">Phone</th>
  			<th style="padding: 40px;">Address</th>
  			<th style="padding: 40px;">Foodname</th>
  			<th style="padding: 40px;">Price</th>
  			<th style="padding: 40px;">Quantity</th>
  			<th style="padding: 40px;">Total Price</th>


  		</tr>



  		@foreach($data as $data)

  		<tr style="line-height:25px"  align="center" style="background-color: green;">
  			<td  align="center">{{$data->name}}</td>
  			<td  align="center">{{$data->phone}}</td>
  			<td  align="center">{{$data->address}}</td>
  			<td>{{$data->foodname}}</td>
  			<td>{{$data->price}}dh</td>
  			<td>{{$data->quantity}}</td>
  			<td>{{$data->price * $data->quantity}}dh</td>



  		</tr>
  		@endforeach





  	</table>

  </div>
</div>
  
        </div>


        @include("admin.adminscript")
  </body>
</html>
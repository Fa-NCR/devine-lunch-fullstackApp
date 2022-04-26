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
        <div style="position:relative; top: 60px; right: -150px">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            
            @csrf 

           <div>
             <label style=" line-height: 50px" >Title</label>
             <input style="color:blue;" type="text" name="title" placeholder="Write a title" required>
           </div>
           <div>
             <label style=" line-height: 50px" >Price </label>
             <input style="color:blue;" type="num" name="price" placeholder="price" required>
           </div>
           
           <div>
             <label style=" line-height: 50px ; " >Image</label>
             <input style="color:blue;" type="file" name="image"  required>
           </div>
           <div>
             <label style=" line-height: 50px">Description</label>
             <input style="color:blue;" type="text" name="description" placeholder="Description" required>
           </div>
           <div >
            
             <input  style="color:blue" type="submit" value="Save">
           </div>
          </form>
          <div>
          <table bgcolor="#00008b">
          <tr align="center">
          <th style="padding: 30px; line-weight:50px">Food Name</th>
          <th style="padding: 30px;">Price</th>
          <th style="padding: 30px;">Description</th>
          <th style="padding: 30px;">Image</th>
          <th style="padding: 30px;">Action</th>
          <th style="padding: 30px;">Action</th>
          </tr>

          @foreach($data as $data)

          <tr align="center">
          <td >{{$data->title}}</td>
          <td>{{$data->price}}</td>
          <td>{{$data->description}}</td>
          <td ><img height="200" width="100" src="/foodimage/{{$data->image}}"></td>
          <td ><a href="{{url('/deletemenu',$data->id)}}"> Delete</a></td>
          <td ><a href="{{url('/updateview',$data->id)}}"> Update</a></td>


          </tr>

          @endforeach
          </table>



   </div>
        @include("admin.adminscript")
  </body>
</html>
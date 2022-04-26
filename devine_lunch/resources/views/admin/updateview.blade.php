<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
   
    @include("admin.admincss") 
  </head>
  <body>
  <div class="container-scroller">
        @include("admin.navbar")


        <div style="position:relative; top: 60px; right: -150px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            
            @csrf 

           <div>
             <label style=" line-height: 50px" >Title</label>
             <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
           </div>
           <div>
             <label style=" line-height: 50px" >Price </label>
             <input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
           </div>
           
           <div>
             <label style=" line-height: 50px">Description</label>
             <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
           </div>
           

           <div>
             <label style=" line-height: 50px ; " >Old Image</label>
             <img  height ="200px" width="270px" type="file" src="/foodimage/{{$data->image}}">
           </div>
           <div>
           <label style=" line-height: 50px">New Image</label>
             <input style="color:blue;" type="file" name="image">
             </div>
            <div>
             <input style="color:black" type="submit" value="Save">
           </div>
          </form>
          <div>
        </div>


        @include("admin.adminscript")
  </body>
</html>
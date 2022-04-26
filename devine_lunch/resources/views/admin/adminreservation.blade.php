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
        
        <div style="position: relative; top: 70px; right: -150px;">

          <table bgcolor="" border="10px">
          <tr style="text-shadow: 1px 1px ;color:#7F9FBC; text-decoration: overline">
             <th style="padding: 30px;">Name</th>
             <th style="padding: 30px;">Email</th>
             <th style="padding: 30px; ">Phone</th>
             <th style="padding: 30px;">Date</th>
             <th style="padding: 30px;">Time</th>
             <th style="padding: 30px;">Message</th>
             
             </tr>
             @foreach($data as $data)

           <tr style="line-height:30px;" aligh =" center">
           <td style="padding: 20px;">{{$data->name}}</td>
           <td style="padding: 20px;">{{$data->email}}</td>  
           <td style="padding: 20px;">{{$data->phone}}</td>  
           <td style="padding: 20px;">{{$data->date}}</td>  
           <td style="padding: 20px;">{{$data->time}}</td>  
           <td style="padding: 20px;">{{$data->message}}</td>  
          

           </tr>  
             @endforeach

          </table>



        </div>
        </div>


        @include("admin.adminscript")
  </body>
</html>
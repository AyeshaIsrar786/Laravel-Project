<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <title>Todo List</title>
</head>
<body class="flex justify-center my-20 bg-green-500">
  <div class="max-w-xl m-0 p-20 bg-indigo-50 rounded-lg">
      <div class="relative w-full py-8 px-8 my-5 rounded-lg border border-gray-300">
        <h1 class="text-xl absolute left-0 top-0 mx-2 my-4 px-3 py-1 font-bold">To Do List</h1>
        <a href="{{url('/lists/create')}}" class=" absolute top-0 right-0 bg-green-500 rounded-lg border mx-2 my-4 px-2 py-1 text-white">View</a>
      </div>
    <form id="data" class="mt-5" method="post" action="{{url('/lists')}}">
      @csrf
      <input type="text" id="name" name="name" placeholder="Project Name" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300 ">
        <span class="text-red-500">
          @error('name')
          {{$message}}
          @enderror
        </span>
      <input type="text" id="workinghours" name="workinghours" placeholder="Working Hours" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300">
        <span class="text-red-500">
          @error('workinghours')
          {{$message}}
          @enderror
        </span>
      <textarea type="text" id="desc" name="desc" placeholder="Desciption" class="w-full py-2 px-3 my-3 rounded-lg border border-gray-300"></textarea>
        <span class="text-red-500">
          @error('desc')
          {{$message}}
          @enderror
        </span>
      <div class="flex flex-col items-center justify-center">
      <button type="submit" id="sub" class="mt-2 mx-0 bg-green-500 hover:bg-green-300 text-white py-2 px-4 rounded-lg border-solid">Add</button>
    </div>
    </form>
  </div>
  
  <!-- Include jQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script> -->
    <!-- <script>
      $(document).ready(function(){
        $("#sub").on("click",(e)=>{
          e.preventDefault();

          var data=new FormData(data);
          var name=$("#name").val();
          var workinghours=$("#workinghours").val();
          var desc=$("#desc").val();
          // console.log(desc);
        })
      })
    </script> -->
</body>
</html>

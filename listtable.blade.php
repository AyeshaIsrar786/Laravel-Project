<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center my-20 bg-green-500">
	<table class="table-auto border-seperate border border-slate-400 bg-indigo-50">
		<caption class="caption-top bg-indigo-50 my-2 py-2 font-bold">ToDo List
		</caption>
			<thead>
				<tr>
					<th class="border border-slate-300 w-full py-5 px-8 my-3">Project Name</th>
					<th class="border border-slate-300 w-full py-5 px-8 my-3">Working Hours</th>
					<th class="border border-slate-300 w-full py-5 px-8 my-3">Description</th>
					<th class="border border-slate-300 max-w-full py-5 px-8 my-3">Action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($data as $key=>$arr)
				<tr>
				@foreach($arr as $val)
				    <td class="border border-slate-300 w-full py-5 px-8 my-3 text-center">
					{{$val}}
					</td>
				@endforeach
					<td>
					<!-- <a href="#" class="mx-0 bg-green-500 hover:bg-green-300 text-white py-2 px-2 rounded-lg">Edit</a> -->
					<a href="{{url('/lists/delete')}}/{{$key}}" class="mx-0 bg-red-500 text-white py-2 px-2 rounded-lg">Delete</a>
					</td>
				</tr>
			@endforeach
			</tbody>
	</table>
</body>
</html>
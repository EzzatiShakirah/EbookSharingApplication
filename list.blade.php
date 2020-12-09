<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Book Sharing Application</title>
</head>
<body>

@section('content')
<h1>E-Book Lists</h1>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table>

<tr>
<th>Title</th>
@foreach($title as $titles)
<td> {{$titles}} </td>
@endforeach
</td>

<tr>
<th>Author</th>
@foreach($author as $authors)
<td>{{$authors}}</td>
@endforeach
</tr>

<tr>
<th>ISBN</th>
@foreach($ISBN as $isbn)
<td>{{$isbn}}</td>
@endforeach
</tr>

<tr>
<th>Category</th>
@foreach($category as $cat)
<td>{{$cat}}</td>
@endforeach
</tr>

<tr>
<th>Number of Pages</th>
@foreach($numofpages as $num)
<td>{{$num}}</td>
@endforeach
</tr>

</table>


@endsection

@yield('content')
    
</body>
</html>
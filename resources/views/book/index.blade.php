@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Data Book</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Data Book
            <div class="panel-title pull-right"><a href="/book/create">Tambah Data</a></div></div>

         <div class="panel-body">
            <table class="table">
          <thead>
<tr>
    <th>title</th>
    <th>Name </th>
    <th>Amount</th>
    <th>cover</th>
    <th colspan="3">Action</th>
    </tr>
</thead>
<tbody>
	@foreach($book as $data)
	<tr>
		<td>{{$data->title}}</td>
		<td>{{$data->Author->name}}</td>
		<td>{{$data->amount}}</td>
		<td><img src="{{asset('img/'.$data->cover.'')}}" width="30" height="30">
		</td>
	</td>
		<td>
			<a class="btn btn-success" href="/book/{{$data->id}}/edit">Edit</a>
		</td>
		<td>
			<a class="btn btn-primary" href="/book/{{$data->id}}">Show</a>
		</td>
		<td>
			<form action="{{route('book.destroy',$data->id)}}" method="POST">

		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token">
		<input class="btn btn-danger" type="submit" value="Delete">
		{{csrf_field()}}
		</form>
		</td>
		</tr>
		@endforeach
		</tbody>
		</table>
		    </div>
		</div>
	</div>
</div>
@endsection
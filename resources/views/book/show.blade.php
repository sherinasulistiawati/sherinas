@extends('layouts.app')
@section('content')
<div class="row">	
	<center><h1>Data Book</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Book
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>
			
			<div class="panel-body">
				<form action="{{route('book.show',$book->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">title</label>
						<input type="text" name="a" class="form-control" required="" value="{{$book->title}}" readonly="">
					</div>

					<div class="form-group">
					<label class="control-label">Name</label>
					<select class="form-control" name="b">
				@foreach($author as $data)
					<option value="{{$data->id}}" readonly="">{{$data->name}}</option>
				@endforeach
					</select>
					</div>

					<div class="form-group">
						<label class="control-label">Amount </label>
						<input type="number" name="c" class="form-control" required="" value="{{$book->amount}}" readonly="">
					</div>

				</form>
				
			</div>
			</div>
			</div>
@endsection
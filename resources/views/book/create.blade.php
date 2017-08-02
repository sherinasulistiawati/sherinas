@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h1>Data Book</h1></center>
        <div class="panel panel-primary">
            <div class="panel-heading">Data Book
            <div class="panel-title pull-right">
            <a href="{{ URL::previous() }}">Kembali</a></div></div>
            <div class="panel-body">
            <form action="{{route('book.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

        <div class="form-group">
			<label class="control-label">Title</label>
			<input type="text" name="a" class="form-control" required="">
		</div>
		<div class="form-group">
			<label class="control-label">Name</label>
			<select class="form-control" name="b">
		@foreach($author as $data)
			<option value="{{$data->id}}">{{$data->name}}</option>
		@endforeach
				</select>
			</div>
			<div class="form-group">
				<label class="control-label">Amount</label>
				<input type="number" name="c" class="form-control" required="">
				</div>
			<div class="form-group">
				<label class="control-label">Cover</label>
				<input type="file" name="d" class="form-control" required="">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
			</form>
			</div>
			</div>
			</div>
			</div>
			@endsection
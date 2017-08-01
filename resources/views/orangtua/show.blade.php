@extends('layouts.app')
@section('content')
<div class="row">	
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Orang tua
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>
			
			<div class="panel-body">
				<form action="{{route('orangtua.update',$ortu->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">Nama Ayah</label>
						<input type="text" name="a" class="form-control" required="" value="{{$ortu->nama_ayah}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Nama Ibu</label>						
						<input type="text" name="b" class="form-control" required="" value="{{$ortu->nama_ibu}}"readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Umur Ayah</label>
						<input type="text" name="c" class="form-control" required="" value="{{$ortu->umur_ayah}}"readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Umur Ibu</label>
						<input type="text" name="d" class="form-control" required="" value="{{$ortu->umur_ibu}}"readonly="">
					</div>

					<div class="form-group">
						<label class="form-control">Alamat</label>
						<textarea class="form-control" rows="10" name="e" required=""readonly="">{{$ortu->alamat}}</textarea>
					</div>

				</form>
				
			</div>
			</div>
			</div>
@endsection
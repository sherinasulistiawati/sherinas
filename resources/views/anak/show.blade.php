@extends('layouts.app')
@section('content')
<div class="row">	
	<center><h1>Data Anak</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Anak
		<div class="panel-title pull-right">
			<a href="{{URL::previous() }}">Kembali</a></div>
			</div>
			
			<div class="panel-body">
				<form action="{{route('anak.show',$anak->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group">
						<label class="control-label">Nama</label>
						<input type="text" name="a" class="form-control" required="" value="{{$anak->nama}}"readonly="">
					</div>

					<div class="form-group">
					<label class="control-label">Nama Ayah dan Ibu</label>
					<input type="Nama Orangtua" class="form-control" name="b" value="{{$anak->orangtua->nama_ayah}} dan {{$anak->orangtua->nama_ibu}}" readonly="">
					</div>

					<div class="form-group">
						<label class="control-label">Umur </label>
						<input type="text" name="c" class="form-control" required="" value="{{$anak->umur}}"readonly="">
					</div>

					<div class="form-group">
						<label class="form-control">Alamat</label>
						<textarea class="form-control" rows="10" name="d" readonly="">{{$anak->alamat}}</textarea>
					</div>

				</form>
				
			</div>
			</div>
			</div>
@endsection
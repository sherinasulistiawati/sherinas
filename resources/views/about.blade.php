<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 		@foreach($ortu as $data)<hr>
 		Nama Ibu adalah : {{$data->nama_ibu}}<br>
 		Nama Ayah adalah : {{$data->nama_ayah}}<br>
 		Umur Ibu adalah : {{$data->umur_ibu}}<br>
 		Umur Ayah adalah : {{$data->umur_ayah}}<br>
 		Nama anak : 
 		@foreach($data->anak as $key)
 		 <li>{{$key->nama}}</li>	
 		@endforeach	
 		<hr>		
 		@endforeach

</body>
</html>
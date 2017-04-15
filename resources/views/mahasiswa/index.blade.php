INI DATA MAHASISWA<br>

@foreach($mahasiswa as $mhs)
	<a href="mahasiswa/{{$mhs->id}}">NIM: {{$mhs->nim}}</a><br>
	<!--Nama: {{$mhs->nama}}<br>-->
	<!--Email: {{$mhs->email}}<br>-->
@endforeach
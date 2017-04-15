INI DATA BUKU<br>

@foreach($buku as $bku)
	<a href="buku/{{$bku->id}}">JUDUL: {{$bku->judul}}</a><br>
	<!--Judul: {{$bku->judul}}<br>-->
	<!--Pengarang: {{$bku->pengarang}}<br>-->
@endforeach
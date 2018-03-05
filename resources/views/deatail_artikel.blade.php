<!DOCTYPE html>
<html>
<head>
  <title>kategori tambah</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">
</head>
<body>
  <div class="ui container">
      <div class="ui red segment">
        <h2 class="header">{{$artikel->judul_artikel}}</h2>
        <h5>slug : {{$artikel->slug}}</h5>
        <h5>kategori : {{$artikel->nama_kategori}}</h5>
        <h5>kutipan : {{$artikel->kutipan}}</h5>
        <h5>foto : <img class="ui small image " src="{{asset('storage/foto')}}/{{$artikel->foto}}"></h5>
        <h5>artikel : {{$artikel->isi}}</h5>
      </div>
  </div>
</body>
</html>
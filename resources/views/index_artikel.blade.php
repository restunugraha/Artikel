<!DOCTYPE html>
<html>
<head>
  <title>Index</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">
</head>
<body>
  <div class="ui container">
      <table class="ui celled table">
  <thead>
    <tr>
      <th>Judul Artikel</th>
      <th>Slug</th>
      <th>Nama Kategori</th>
      <th>Foto</th>
      <th>aksi</th>
  </tr>
</thead>
  <tbody>
    @foreach($artikels as $artikel)
    <tr>
      <td>{{$artikel->judul_artikel}}</td>
      <td>{{$artikel->slug}}</td>
      <td>{{$artikel->nama_kategori}}</td>
      <td>{{$artikel->foto}}</td>
      <td>
        <a class="ui button teal" href="/artikel/{{$artikel->id}}/edit"><i class="edit icon"></i> edit</a>
        <a href="{{url('/artikel/',$artikel->id)}}" class="ui button blue"><i class="zoom icon"></i> Lihat</a>
        <form method="post" action="{{url('artikel',$artikel->id)}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button class="ui button red"><i class="trash icon">Hapus</i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
</body>
</html>
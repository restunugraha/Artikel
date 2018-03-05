<!DOCTYPE html>
<html>
<head>
  <title>kategori tambah</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">
</head>
<body>
  <div class="ui container">
      <table class="ui celled table">
  <thead>
    <tr>
      <th>nama kategori</th>
      <th>menu</th>
  </tr>
</thead>
  <tbody>
    @foreach($tampil as $lihat)
    <tr>
      <td>{{$lihat->nama_kategori}}</td>
      <td>
        <a class="ui button teal" href="/category/{{$lihat->id}}/edit"><i class="edit icon"></i> edit</a>
        
        <form method="post" action="{{url('category',$lihat->id)}}">
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
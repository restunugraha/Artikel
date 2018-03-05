<!DOCTYPE html>
<html>
<head>
  <title>kategori tambah</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">
</head>
<body>
  <div class="ui container">
      <form class="ui form" action="{{url('category',$edit->id)}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH">
    <div class="field">
      <label>Last Name</label>
      <input name="nama_kategori" placeholder="insert category" value="{{$edit->nama_kategori}}" type="text">
    </div>
    <button class="ui button" type="submit">Submit</button>
  </form>
  </div>
</body>
</html>
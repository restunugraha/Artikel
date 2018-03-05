<!DOCTYPE html>
<html>
<head>
  <title>kategori tambah</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">
</head>
<body>
  <div class="ui container">
      <form class="ui form" action="{{route('category.store')}}" method="post">
        {{csrf_field()}}
    <div class="field">
      <label>Last Name</label>
      <input name="nama_kategori" placeholder="insert category" type="text">
    </div>
    <button class="ui button" type="submit">Submit</button>
  </form>
  </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
 <title>INDEX</title>
 <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">

</head>
<body>

  <div class="ui pointing menu">
  <a onclick="buka()" class="active item">
    Menu
  </a>
  <a class="item">
    Home
  </a>
  <a class="item">
    About
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input placeholder="Search..." type="text">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
</div>
  <div class="ui sidebar inverted vertical menu">
    <a class="item">
    </a>
  </div>
  <div class="pusher">
    @foreach($artikels as $artikel)

    <div class="ui olive segment">
      <h3 class="ui header">
        {{$artikel->judul_artikel}}
      </h3>

    <img class="ui mini left floated rounded image" src="{{asset('storage/foto')}}/{{$artikel->foto}}">
    <p>{{$artikel->kutipan}}</p>
    <div class="netadata"></div>

    <div>
      <a href="" class="ui tiny label blue">{{$artikel->nama_kategori}}</a>
    </div>
    </div>
    @endforeach
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('css/semantic/semantic.min.js')}}"></script>
<script type="text/javascript">
  function buka(){
    $('.ui.sidebar')
  .sidebar('toggle');
  }
</script>
</body>
</html>


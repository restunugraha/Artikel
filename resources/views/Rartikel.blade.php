<!DOCTYPE html>
<html>
<head>
  <title>Tambah Artikel</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/semantic/semantic.min.css')}}">
</head>
<body>
  <div class="ui container">

    <form method="post" action="{{route('artikel.store')}}" class="ui form" enctype="multipart/form-data">
        {{csrf_field()}}
          <h4 class="ui dividing header">Nama Artikel</h4>
          <div class="field">

            <div class="two fields">
              <div class="field">
                <label>Judul Artikel</label>
                <input name="Judul" placeholder="Judul Artikel" type="text">
              </div>

              <div class="field">
                <label>Slug</label>
                <input name="slug" placeholder="slug" type="text">
              </div>

            </div>

          </div>

         <div class="field">
            <div class="two fields">

                <div class="field">
                  <label>Kategori</label>
                  <select name="kategori" class="ui fluid dropdown">
                    <option value="kategori">Kategori</option>
                  </select>
                </div>

               <div class="field">
                    <label>Kutipan</label>
                    <input name="kutipan" placeholder="Kutipan" type="text">
                </div>
            </div>
         </div>
          

        <div class="field">
            <div class="two fields">
                <div class="field">
                    <label>Foto Artikel</label>
                <div class="ui action input icon">
                      <input name="foto" type="file" >
                      <i class="attach right icon"></i>
                </div>
            </div>
        </div>

        <div class="one field"></div>
        <div class="field"></div>
            <label>Artikel</label>
            <textarea class="artikel" name="artikel"></textarea>

        <button class="ui button teal" type="submit">Simpan</button>
</form>

  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script type="text/javascript">
        var route_prefix = "{{url(config('lfm.url_prefix', config('lfm.prefix')))}}";
    </script>
    <script type="text/javascript">
        $('textarea[name=artikel]').ckeditor({
            height:350,
            filebrowserImageBrowserUrl: route_prefix + '?type=Images',
            filebrowserImageUploadUrl : route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowserUrl :route_prefix + '?type=Files',
            filebrowserUploadUrl : route_prefix + 'upload?type=Files&_token={{csrf_token()}}'
        });

        </script>

</body>
</html>
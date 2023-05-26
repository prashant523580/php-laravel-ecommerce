<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/app.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
</head>
<body>

  {{@View::make("header")}}
  @yield("content")
  {{@View::make("footer")}}
</body>
<script>
  let  num = 1;
  $(document).ready(function(){
    $("button").click((e) => {
      console.log(e)
      $("#output").innerHTML =  num;
      num++;
      console.log(num)
    })
  })
</script>
</html>
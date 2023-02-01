<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Produtos</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" rell= "styleshhet" />
        <style>
            body
            {
                padding:20px ;
            }
            .box
            {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 10px;
                border: 1px solid;
                border-radius: 8px;
            }   
            .navbar
            {
                margin-bottom: 20px;
            }

        </style>
</head>
  <body>
    <div class="container">
        @component('component_navbar')
        @endcomponent
        <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
    </div>

   <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>









  </body>
</html>
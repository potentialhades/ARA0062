<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SV Company</title>
  </head>
  <body>
    <h1>A sua Plataforma de Streaming para suas séries favoritas!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Streaming Videos Company</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Catálogos</a>
    <a class="p-2 text-dark" href="#">Programação</a>
    <a class="p-2 text-dark" href="#">Aplicativos</a>
    <a class="p-2 text-dark" href="#">Assinatura</a>
  </nav>
  <a class="btn btn-outline-primary" href="login.html">Login</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Assinaturas Disponíveis</h1>
  <p class="lead">Assista suas séries favoritas com a melhor qualidade, confira nossas propostas!</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Assinatura Common</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Grátis</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>-Qualidade das séries em até 720p-</li>
          <li>-Biblioteca Limitada-</li>
          <li>-Anúncios-</li>
          <li>-Liberado até 2 dispositivos conectados por login-</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Baixe Agora</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Assinatura Rare</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">R$25,00 <small class="text-muted">/ mês</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>-Qualidade das séries em até 1080HD-</li>
          <li>-Biblioteca Expandida, exceto as séries Originais Exclusivas da plataforma-</li>
          <li>-Sem Anúncios-</li>
          <li>-Liberado até 4 dispositivos conectados por login-</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Assine Agora</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Asssinatura Legendary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">R$39,90 <small class="text-muted">/ mês</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>-Qualidade das séries em 1080HD ou 4K-</li>
          <li>-Toda a Biblioteca disponível-</li>
          <li>-Sem Anúncios-</li>
          <li>-Liberado até 6 dispositivos conectados por login-</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Assine Agora</button>
      </div>
    </div>
  </div>

    <hr>
    
        <?php
            include_once("servico/Bd.php");
            
            $bd = new Bd();
            
            $sql = "select * from blog";
            
            foreach ($bd->query($sql) as $row) {
                
            echo '
            
               <div class="card mr-5 mb-5" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">'.$row['titulo'].'</h5>
                    <p class="card-text">'.$row['corpo'].'</p>

                  </div>
                </div>
            
            
            ';
            

            }
        
        ?>


  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy;2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Sobre</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Empresa</a></li>
          <li><a class="text-muted" href="#">Localização</a></li>
          <li><a class="text-muted" href="#">Termos em Geral</a></li>
          <li><a class="text-muted" href="#">Termos de Privacidade</a></li>
        </ul>
      </div>
           <div class="col-6 col-md">
        <h5>Atendimento</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Contato</a></li>
          <li><a class="text-muted" href="#">Dúvidas</a></li>
          <li><a class="text-muted" href="#">Suporte Online</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>


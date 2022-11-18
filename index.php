
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Canvas de Usabilidade</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- css local -->  
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>

  <body>
  
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="text-muted" href="#"><img class="logo" src="./assets/img/logo.png" alt=""></a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="https://www.instagram.com/ocanvasdeusabilidade/"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg></a>
            <a class="blog-header-logo text-dark" href="https://www.facebook.com/ocanvasdeusabilidade/"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>
        </div>
      </header>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">O que é o Canvas de Usabilidade?</h1>
          <p class="lead my-3">Usabilidade é um atributo de qualidade de software relacionado à facilidade de se utilizá-lo e esse atributo é relevante para vários tipos de sistemas. Para verificar se o produto ou serviço pretendido atende aos atributos de usabilidade exigidos em relação aos usuários esperados, é feita uma avaliação de usabilidade. A avaliação de usabilidade é um nome genérico para um grupo de métodos baseados na avaliação e inspeção ou exame relacionado com aspectos de usabilidade da interface com o usuário. Existem várias alternativas para se realizar a avaliação da usabilidade de uma solução. OCAU (O canvas de Avaliação de Usabilidade) é um artefato desenvolvido com a intenção de facilitar o planejamento da avaliação de usabilidade possuindo 8 dimensões:</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
        </div>
      </div>


    <main role="main" class="container">
      <h1 class="text-center display-4" style="margin: 100px">EXEMPLO DE CANVAS DE USABILIDADE</h1>
      <img class="canvas_img rounded mx-auto d-block img-responsive img-rounded" src="./assets/img/canvas.png" alt="canvas">
      <a href="./assets/files/ocanvas.docx" download>
        <div class="text-center">
          <button type="button" class="btn btn-success text-center" style="margin: 10px auto">Baixar</button>
        </div>
      </a>
      <h2 class="text-center display-3" style="margin: 50px">ESTUDOS DE CASO</h2>
      <div class="cards">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" style="width: 5rem" src="./assets/img/olx.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Olx</h5>
            <p class="card-text">Com o investimento nas ferramentas do LinkedIn, a OLX passou a contar...</p>
            <a href="./assets/files/caso_olx.pdf" class="btn btn-primary" download>Baixar</a>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img class="card-img-top" style="width: 5rem" src="./assets/img/autopass.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Autopass</h5>
            <p class="card-text">Empresa de tecnologia, meios de pagamento e soluções para mobilidade urbana...</p>
            <a href="./assets/files/caso_autopass.pdf" class="btn btn-primary" download>Baixar</a>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 200px">
        <!-- Example row of columns -->
        <h2 class="display-4 text-center">Como usar o Canvas de Usabilidade?</h2>
        <div class="row" style="margin-top: 50px">
          <div class="col-md-4">
            <h2>1. Defina a Solução</h2>
            <p>O que será avaliado? </p>
          </div>
          <div class="col-md-4">
            <h2>2. Defina os Requisitos</h2>
            <p>Qual requisito ou funcionalidade será avaliado? </p>
          </div>
          <div class="col-md-4">
            <h2>3. Defina os Usuários</h2>
            <p>Quem são os participantes da avaliação?</p>
          </div>
          <div class="col-md-4">
            <h2>4. Defina a(s) Tarefas</h2>
            <p>Quais tarefas os participantes irão realizar?</p>
          </div>
          <div class="col-md-4">
            <h2>5. Defina o Contexto</h2>
            <p>Em quais contextos estão inseridos?</p>
          </div>
          <div class="col-md-4">
            <h2>6. Defina a(s) Alternativas</h2>
            <p>Quais alternativas serão utilizadas?</p>
          </div>
          <div class="col-md-4">
            <h2>7. Defina os Critérios</h2>
            <p>Quais são os critérios utilizados?</p>
          </div>
          <div class="col-md-4">
            <h2>8. Defina as Métricas</h2>
            <p>Quais são as métricas utilizados?</p>
          </div>
        </div>
        <hr>
      </div> <!-- /container -->
    </main><!-- /.container -->

    <section class="newsletter" style="margin-top: 200px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="content">
              <h2>INSCREVA-SE NA NOSSA NEWSLETTER</h2>
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Insira seu e-mail">
              <span class="input-group-btn">
              <button class="btn" type="submit">Inscreva-se agora!</button>
              </span>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="blog-footer" style="margin-top: 200px">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        Voltar ao topo:
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
          </svg>
        </a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </script>
  </body>
</html>


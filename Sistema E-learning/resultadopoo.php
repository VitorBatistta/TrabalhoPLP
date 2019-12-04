<!DOCTYPE html>

<head>
	<!-- início head -->
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- título da página -->
  <title>E-learning &amp; PLP</title>
  <!-- pega o arquivo style.css -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- início body da página -->
  <header class="header-area">
    <div class="videomag-main-menu" id="sticker">
      <div class="classy-nav-container breakpoint-off">
        <div class="container-fluid">
          <nav class="classy-navbar justify-content-between" id="videomagNav">
            <div class="classy-navbar-toggler">
              <!-- class nav do menu -->
            </div>
            <div class="classy-menu">
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <div class="classynav">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li class="dropdown">
                    <a class="btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aulas</a>
                    <div style="background-color: black;" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="paradigmaImp.html">Imperativo</a>
                      <a class="dropdown-item" href="funcional.html">Funcional</a>
                      <a class="dropdown-item" href="logico.html">Lógico</a>
                      <a class="dropdown-item" href="orientado.html">Orientado a Objetos</a>
                    </div>
                  </li>
                  <li><a href="contato.html">Grupo</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section class="contact-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="contact-content mb-100">
						<!-- Resultado questionário -->
            <h1>Resultado Questionário Orientado a Objetos</h1>
            <div class="contact-content-area mb-70">
              <div class="row">
                <div class="col-12 col-lg-6">
									<!-- Método POST para identificar as respostas -->
                  <?php
                  $opt1 = $_POST["perg1"];
                  $opt2 = $_POST["perg2"];
                  $opt3 = $_POST["perg3"];
                  $opt4 = $_POST["perg4"];

                  $resposta = 0;
                  $erros = 0;
                  $acertos_t = 4;
                  $erros_t = 4;

                  if (
                    !isset($opt1) or !isset($opt2) or !isset($opt3)
                    or !isset($opt4)
                  ) {
                    echo "Questionário Incompleto";
                  } else {
                    if ($opt1 == "opt2") {
                      echo "<b>Pergunta 1 correta<br />";
                      $resposta = $resposta + 1;
                    } else {
                      echo "Pergunta 1 errada<br />";
                      $erros = $erros + 1;
                    }

                    if ($opt2 == "opt1") {
                      echo "Pergunta 2 correta<br />";
                      $resposta = $resposta + 1;
                    } else {
                      echo "Pergunta 2 errada<br />";
                      $erros = $erros + 1;
                    }

                    if ($opt3 == "opt2") {
                      echo "Pergunta 3 correta<br />";
                      $resposta = $resposta + 1;
                    } else {
                      echo "Pergunta 3 errada<br />";
                      $erros = $erros + 1;
                    }

                    if ($opt4 == "opt2") {
                      echo "Pergunta 4 correta<br />";
                      $resposta = $resposta + 1;
                    } else {
                      echo "Pergunta 4 errada<br />";
                      $erros = $erros + 1;
                    }
                    $percentual_a = $resposta * 100 / $acertos_t;
                    $percentual_e = $erros * 100 / $erros_t;

                    echo "Você acertou: " . $resposta . "<br />";
                    echo "Você errou: " . $erros . "<br />";
                    echo "Percentual de acertos :" . $percentual_a . " %<br />";
                    echo "Percentual de erros :" . $percentual_e . " %</b><br />";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="js/jquery/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <script src="js/plugins/plugins.js"></script>
  <script src="js/active.js"></script>
</body>

</html>

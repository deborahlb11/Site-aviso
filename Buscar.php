  <?php
 include_once("conexao.php");
 
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Tarefas, Dia 1, Dia 2, Dia 3, Dúvidas, Sugestões e entre contato:relacionamento@ulbra.br, Filtro de Dados, Tela de Login">
    <meta name="description" content="">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-1.css" media="screen">
    <link rel="stylesheet" href="ParteAviso.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.10, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="pt">
    <header class="u-clearfix u-custom-color-2 u-header" id="sec-e966" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="Página-1.php" class="u-btn u-btn-round u-button-style u-custom-color-1  u-radius-12 u-btn-1">Voltar</a>
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/PAINELDEAVISOSsimbolo.png" alt="" data-image-width="413" data-image-height="360">
    </header>
    <section class="u-clearfix u-section-1" id="sec-5a10">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <?php
                  
                  $pesquisar= filter_var($_REQUEST['pesquisar'], FILTER_SANITIZE_STRING);
                  
                  $sql =mysqli_query($con, "SELECT * FROM recado WHERE titulo LIKE '%$pesquisar%' OR aviso LIKE '%$pesquisar%' OR setorigem LIKE '%$pesquisar%' OR setdestino LIKE '%$pesquisar%' OR  unidade LIKE '%$pesquisar%' OR  emetente LIKE '%$pesquisar%'") or die(mysqli_error($con));//caso de erro para de funcionar // volta se tiver escrito no aviso 

                  while ($aux=mysqli_fetch_assoc($sql)) 
                  {
                    echo "<table class='tabela'>";
                   echo "<thead>";
                   echo "<tr>";
                      echo "<th class='u-text u-text-5'collspan='2'>Título: ".$aux["titulo"]."</th>";
                   echo "</tr>";
                   echo "</thead>";
                  echo "<tbody>";
                      echo"<tr>";
                          echo "<td collspan='2'> Origem:".$aux["setorigem"]."</td>";
                          echo "<td> Destino: ".$aux["setdestino"]."</td>";
                          echo "<td> Data:".$aux["data"]."</td>";
                      echo "</tr>";
                      echo"<tr>";
                          echo "<td class='u-text u-text-4'> Aviso: ".$aux["aviso"]."</td>";   
                      echo "</tr>";
                      echo "<tfoot>";
                          echo"<tr>";
                              echo "<td> Unidade: ".$aux["unidade"]."</td>";
                              echo "<td> Hora:".$aux["horario"]."</td>";
                              echo"<td>".$aux["emetente"]."</td>";
                          echo "</tr>";
                      echo "</tfoot>";
                  echo "</tbody>";
              echo "</table>";        

                  }
              ?>
             
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <footer class="u-clearfix u-custom-color-1 u-footer" id="sec-fbf7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Dúvidas, Sugestões e entre contato:<br>relacionamento@ulbra.br
        </h1>
        <p class="u-text u-text-2">dlb</p>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 
</body>
</html>
<?php
  include_once("conexao.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Tarefas, Dia 1, Dia 2, Dia 3, Dúvidas, Sugestões e entre contato:relacionamento@ulbra.br, Filtro de Dados, Tela de Login">
    <meta name="description" content="">
    <title>Página 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-1.css" media="screen">
    <link rel="stylesheet" href="ParteAviso.css">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-custom-color-2 u-header" id="sec-e966" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <a href="#sec-785c" class="u-btn u-btn-round u-button-style u-custom-color-1 u-dialog-link u-radius-12 u-btn-1">Login</a>
        <a href="#sec-c3b0" class="u-btn u-btn-round u-button-style u-custom-color-1 u-dialog-link u-radius-12 u-btn-2">Filtrar</a>
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/PAINELDEAVISOSsimbolo.png" alt="" data-image-width="413" data-image-height="360">
        <form action="buscar.php" method="POST" class="u-border-1 u-border-grey-30 u-custom-color-1 u-radius-12 u-search u-search-left u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3012"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-3012" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="pesquisar" value="" placeholder="Pesquisar">
        </form>
      </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-5a10">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <?php

                date_default_timezone_set('America/Sao_Paulo');
                $data = date("d/m/Y");
                echo"<h4 class='u-text u-text-9'>".$data."</h4>";

                  $sql = mysqli_query($con, "SELECT titulo, aviso,data,setorigem,setdestino,unidade,emetente,horario FROM recado ") or die(mysqli_error($con));//caso de erro para de funcionar

                while($aux = mysqli_fetch_assoc($sql)) 
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
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
              
                <?php
                date_default_timezone_set('America/Sao_Paulo');
                $dia = date('d') - 1;
                $mes = date('m');
                $ano = date('Y');
                $data = mktime(0,0,0,$mes,$dia,$ano);
                echo"<h4 class='u-text u-text-9'>".date('d/m/Y',$data)."</h4>";

                    $sql = mysqli_query($con, "SELECT titulo, aviso,data,setorigem,setdestino,unidade,emetente,horario FROM recado ") or die(mysqli_error($con));//caso de erro para de funcionar

                while($aux = mysqli_fetch_assoc($sql)) 
                {

                   echo "<table class='tabela'>";
                   echo "<thead>";
                   echo "<tr>";
                      echo "<th >Título:".$aux["titulo"]."</th>";
                   echo "</tr>";
                   echo "</thead>";
                  echo "<tbody>";
                      echo"<tr>";
                          echo "<td> Setor Origem:".$aux["setorigem"]."</td>";
                          echo "<td> Setor Destino:".$aux["setdestino"]."</td>";
                          echo "<td> Data:".$aux["data"]."</td>";
                      echo "</tr>";
                      echo"<tr>";
                          echo "<td> Aviso:".$aux["aviso"]."</td>";   
                      echo "</tr>";
                      echo "<tfoot>";
                          echo"<tr>";
                              echo "<td> Unidade:".$aux["unidade"]."</td>";
                              echo "<td> Hora:".$aux["horario"]."</td>";
                              echo"<td>".$aux["emetente"]."</td>";
                          echo "</tr>";
                      echo "</tfoot>";
                  echo "</tbody>";
              echo "</table>";        
                  
            }
                
              ?>
        
        </div>

               <!-- <h4 class="u-text u-text-3">Sample Headline</h4>
                <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div> -->
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <?php 
                  date_default_timezone_set('America/Sao_Paulo');
                  $dia = date('d') - 2;
                  $mes = date('m');
                  $ano = date('Y');
                  $data = mktime(0,0,0,$mes,$dia,$ano);
                  echo"<h4 class='u-text u-text-9'>".date('d/m/Y',$data)."</h4>";
                  //echo ;
                 ?>
                <h4 class="u-text u-text-5">Sample Headline</h4>
                <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                  <?php 
                  date_default_timezone_set('America/Sao_Paulo');
                  $dia = date('d') - 3;
                  $mes = date('m');
                  $ano = date('Y');
                  $data = mktime(0,0,0,$mes,$dia,$ano);
                  echo date('d/m/Y',$data);
                 ?>


                <h4 class="u-text u-text-7">Sample Headline</h4>
                <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
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
    
    
    
    
    <footer class="u-clearfix u-custom-color-2 u-footer" id="sec-fbf7"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Dúvidas, Sugestões e entre contato:<br>relacionamento@ulbra.br
        </h1>
        <p class="u-text u-text-2">dlb</p>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/Screenshot_2.png" alt="" data-image-width="189" data-image-height="58">
      </div>
    </footer>
  <section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-dialog-section-4" id="sec-c3b0">
      <div class="u-align-center u-container-style u-dialog u-grey-15 u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-form u-form-1">
            <form action="filtrar.php" name="form" style="padding: 10px;">
              <div class="u-form-group u-form-name u-label-left">
                <label for="name-a381" class="u-custom-font u-font-arial u-label u-spacing-0 u-label-1">Assunto</label>
                <input type="text" placeholder="Informe o assunto" id="name-a381" name="titulo" class="u-input u-input-rectangle u-radius-12" required="">
              </div>
              <br>
              <div class="u-form-date u-form-group u-label-left u-form-group-2">
                <label for="date-bd68" class="u-custom-font u-font-arial u-label u-spacing-0 u-label-2">Data</label>
                <input type="text" readonly="readonly" placeholder="MM/DD/YYYY" id="date-bd68" name="data" class="u-input u-input-rectangle u-radius-12" required="" data-date-format="mm/dd/yyyy">
              </div>
              <br>
              <div class="u-form-group u-label-left u-form-group-3">
                <label for="text-eefc" class="u-custom-font u-font-arial u-label u-spacing-0 u-label-3">Setor</label>
                <input type="text" placeholder="Insira o setor" id="text-eefc" name="setor" class="u-input u-input-rectangle u-radius-12">
              </div>
              <br>
              <div class="u-form-group u-form-time u-label-left u-form-group-4">
                <label for="time-4097" class="u-custom-font u-font-arial u-label u-spacing-0 u-label-4">Horário</label>
                <input type="time" id="time-4097" name="hora" class="u-input u-input-rectangle u-radius-12">
              </div>
              <br>
              <div class="u-form-group u-form-submit u-label-left">
                <label class="u-custom-font u-font-arial u-label u-spacing-0 u-label-5"></label>
                <div class="u-align-left u-btn-submit-container">
                  <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-12 u-btn-1">Filtrar</a>
                </div>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
              <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
              <input type="hidden" value="" name="recaptchaResponse">
              <input type="hidden" name="formServices" value="018f7a6bcf7be86707162aeec81dfc85">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-60 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 413.348 413.348" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5801"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 413.348 413.348" id="svg-5801"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"></path></svg></button>
      </div>
    </section><style>.u-dialog-section-4 .u-dialog-1 {
  width: 566px;
  min-height: 431px;
  margin: 60px auto;
}

.u-dialog-section-4 .u-container-layout-1 {
  padding: 40px 30px;
}

.u-dialog-section-4 .u-form-1 {
  height: 307px;
  width: 506px;
  margin: 10px auto 0;
}

.u-dialog-section-4 .u-label-1 {
  width: 64px;
  font-weight: 700;
}

.u-dialog-section-4 .u-form-group-2 {
  margin-left: 0;
}

.u-dialog-section-4 .u-label-2 {
  width: 64px;
  font-weight: 700;
}

.u-dialog-section-4 .u-form-group-3 {
  margin-left: 0;
}

.u-dialog-section-4 .u-label-3 {
  width: 64px;
  font-weight: 700;
}

.u-dialog-section-4 .u-form-group-4 {
  margin-left: 0;
}

.u-dialog-section-4 .u-label-4 {
  width: 64px;
  font-weight: 700;
}

.u-dialog-section-4 .u-label-5 {
  width: 64px;
  font-weight: 700;
}

.u-dialog-section-4 .u-btn-1 {
  background-image: none;
}

.u-dialog-section-4 .u-icon-1 {
  width: 24px;
  height: 24px;
  left: auto;
  top: 16px;
  position: absolute;
  right: 13px;
}

@media (max-width: 991px) {
  .u-dialog-section-4 .u-container-layout-1 {
    padding-bottom: 30px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-4 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-4 .u-container-layout-1 {
    padding-top: 30px;
    padding-left: 40px;
    padding-right: 40px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-4 .u-dialog-1 {
    width: 340px;
    height: auto;
  }

  .u-dialog-section-4 .u-container-layout-1 {
    padding-top: 40px;
    padding-left: 25px;
    padding-right: 25px;
  }

  .u-dialog-section-4 .u-form-1 {
    width: 320px;
  }
}</style>
<section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-5" id="sec-785c">
      <div class="u-align-left u-container-style u-dialog u-grey-15 u-shape-rectangle u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-form u-form-1">
            <form action="logar.php" class="u-clearfix u-form-spacing-10  u-inner-form" name="form" style="padding: 10px;">
              <div class="u-form-group u-form-name u-label-left">
                <label for="name-68a1" class="u-label">Nome</label>
                <input type="text" placeholder="Insira seu nome" id="name-68a1" name="user" class="u-border-2 u-input u-input-rectangle u-radius-12" required="">
              </div>
              <br>
              <div class="u-form-group u-form-name u-label-left u-form-group-2">
                <label for="name-dd3b" class="u-label">Senha</label>
                <input type="password" placeholder="Insira sua senha" id="name-dd3b" name="senha" class="u-border-2 u-input u-input-rectangle u-radius-12" required="">
              </div>
              <br>
              <div class="u-form-group u-form-submit u-label-left">
                <label class="u-label u-label-3"></label>
                <div class="u-align-left u-btn-submit-container">
                  <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-12 u-text-body-alt-color u-btn-1">Entrar</a>
                </div>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
              <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
              <input type="hidden" value="" name="recaptchaResponse"> 
              <input type="hidden" name="formServices" value="018f7a6bcf7be86707162aeec81dfc85">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-70 u-icon-1">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 409.806 409.806" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4e2d"></use></svg>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 409.806 409.806" x="0px" y="0px" id="svg-4e2d" style="enable-background:new 0 0 409.806 409.806;"><g><g><path d="M228.929,205.01L404.596,29.343c6.78-6.548,6.968-17.352,0.42-24.132c-6.548-6.78-17.352-6.968-24.132-0.42    c-0.142,0.137-0.282,0.277-0.42,0.42L204.796,180.878L29.129,5.21c-6.78-6.548-17.584-6.36-24.132,0.42    c-6.388,6.614-6.388,17.099,0,23.713L180.664,205.01L4.997,380.677c-6.663,6.664-6.663,17.468,0,24.132    c6.664,6.662,17.468,6.662,24.132,0l175.667-175.667l175.667,175.667c6.78,6.548,17.584,6.36,24.132-0.42    c6.387-6.614,6.387-17.099,0-23.712L228.929,205.01z"></path>
</g>
</g></svg>
      </button>
      </div>
    </section><style>.u-dialog-section-5 .u-dialog-1 {
  width: 620px;
  min-height: 462px;
  background-image: none;
  height: auto;
  margin: 72px calc(((100% - 1140px) / 2) + 170px) 60px auto;
}

.u-dialog-section-5 .u-container-layout-1 {
  padding: 45px 23px 30px;
}

.u-dialog-section-5 .u-form-1 {
  height: 191px;
  width: 570px;
  margin: 71px auto 0;
}

.u-dialog-section-5 .u-form-group-2 {
  margin-left: 0;
}

.u-dialog-section-5 .u-label-3 {
  width: 100px;
}

.u-dialog-section-5 .u-btn-1 {
  background-image: none;
}

.u-dialog-section-5 .u-icon-1 {
  width: 23px;
  height: 23px;
  left: auto;
  top: 14px;
  position: absolute;
  right: 14px;
}

@media (max-width: 1199px) {
  .u-dialog-section-5 .u-dialog-1 {
    margin-right: calc(((100% - 940px) / 2) + 170px);
  }

  .u-dialog-section-5 .u-form-1 {
    width: 570px;
  }
}

@media (max-width: 991px) {
  .u-dialog-section-5 .u-dialog-1 {
    margin-top: 138px;
    margin-right: calc(((100% - 720px) / 2) + 100px);
  }

  .u-dialog-section-5 .u-container-layout-1 {
    padding-top: 29px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-5 .u-dialog-1 {
    width: 540px;
    margin-top: 124px;
    margin-right: calc(((100% - 540px) / 2));
  }

  .u-dialog-section-5 .u-container-layout-1 {
    padding-top: 45px;
    padding-left: 25px;
    padding-right: 25px;
  }

  .u-dialog-section-5 .u-form-1 {
    width: 520px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-5 .u-dialog-1 {
    width: 340px;
    margin-top: 33px;
    margin-right: calc(((100% - 340px) / 2));
    margin-bottom: 57px;
  }

  .u-dialog-section-5 .u-container-layout-1 {
    padding-left: 20px;
    padding-right: 20px;
  }

  .u-dialog-section-5 .u-form-1 {
    width: 320px;
  }
}</style>
</body></html>
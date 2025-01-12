 <?php
    session_start();
  ?> 
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Cadastro de Aviso">
    <meta name="description" content="">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="nicepagePg.css" media="screen">
    <link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <link rel="stylesheet" href="PgCadAviso.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.11.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-custom-color-2 u-header u-header" id="sec-360d"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/PAINELDEAVISOSsimbolo.png" alt="" data-image-width="413" data-image-height="360">
        <a href="sair.php" class="u-btn u-btn-round u-button-style u-custom-color-1 u-radius-12 u-btn-1">Sair</a>
        <a href="#sec-40eb" class="u-btn u-btn-round u-button-style u-custom-color-1 u-dialog-link u-radius-12 u-btn-2">Cadastro de usuário</a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-a90d">
      <div class="u-clearfix u-custom-html u-expanded-width u-custom-html-1"></div>
      <h2 class="u-custom-font u-text u-text-default u-text-font u-text-1">Cadastro de Aviso</h2>
      <div class="u-clearfix u-custom-html u-custom-html-2">
        <div class="container">
          <div class="form-container">
            <form method="POST" action="processar.php">
              <label for="titulo">Título: </label>
              <input type="text" name="titulo" id="titulo" placeholder="Insira o aviso">
              <br>
              <label for="aviso"> Aviso: </label>
              <input name="aviso" id="aviso" placeholder="Insira o aviso "></input>
              <br>
              <input type="submit" value="Enviar" id="botao">
            </form>
          </div>
          <div class="checkbox-container">
            <div class="checkbox-group">
              <h4>Unidade</h4> 
              <label>
                <input type="checkbox" name="unidade[]" value="Canoas">Canoas
              </label>
              <label>
                <input type="checkbox" name="unidade[]" value="Cachoeira do Sul"> Cachoeira do Sul
              </label>
              <label>
                <input type="checkbox" name="unidade[]" value="Guaíba"> Guaíba
              </label>
            </div>
            <div class="checkbox-group">
              <h4>Setor</h4>
              <label>
                <input type="checkbox" name="setor[]" value="Opção 4"> Ead
              </label>
              <label>
                <input type="checkbox" name="setor[]" value="Opção 5"> Marketing
              </label>
              <label>
                <input type="checkbox" name="setor[]" value="Opção 6"> Contato
              </label>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-custom-color-2 u-footer u-footer" id="sec-5ffd"><div class="u-clearfix u-sheet u-sheet-1"></div></footer>
  <section class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-dialog-section-4" id="sec-40eb">
      <div class="u-align-center u-container-style u-custom-color-2 u-dialog u-dialog-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <div class="u-carousel u-carousel-duration-250 u-carousel-fade u-expanded-width u-form u-form-1" data-interval="0" data-u-ride="false">
            <form action="#cadastro.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;" method="post">
              <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-carousel-item u-form-step u-slide">
                  <div class="u-form-group u-form-name">
                    <label for="name-7dce" class="u-label">Nome</label>
                    <input type="text" placeholder="Insira o nome" id="name-7dce" name="name" class="u-input u-input-rectangle u-radius-12" required="">
                  </div>
                  <div class="u-form-email u-form-group">
                    <label for="email-7dce" class="u-label">Email Institucional</label>
                    <input type="email" placeholder="Insira um endereço de email válido" id="email-7dce" name="emailInstitu" class="u-input u-input-rectangle u-radius-12" required="">
                  </div>
                  <div class="u-form-group u-form-group-3">
                    <label for="text-3acd" class="u-label">Usuário escolhido</label>
                    <input type="text" id="text-3acd" name="user" class="u-input u-input-rectangle u-radius-12" placeholder="Insira um usuário">
                  </div>
                  <div class="u-form-group u-form-group-4">
                    <label for="text-5826" class="u-label">Senha</label>
                    <input type="text" placeholder="Insira uma senha" id="text-5826" name="senha" class="u-input u-input-rectangle u-radius-12">
                  </div>
                  <div class="u-form-checkbox-group u-form-group u-form-input-layout-horizontal u-form-group-5">
                    <label class="u-label">Adiminstrador</label>
                    <div class="u-form-checkbox-group-wrapper">
                      <div class="u-input-row">
                        <input id="field-7981" type="checkbox" name="checkbox[]" value="Sim" class="u-field-input" checked="checked" data-calc="Sim">
                        <label class="u-field-label" for="field-7981">Sim</label>
                      </div>
                      <div class="u-input-row">
                        <input id="field-bc5f" type="checkbox" name="checkbox[]" value="Não" class="u-field-input" data-calc="Não">
                        <label class="u-field-label" for="field-bc5f">Não</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-carousel-item u-form-step u-slide">
                  <div class="u-form-checkbox-group u-form-group u-form-input-layout-vertical u-form-group-6">
                    <label class="u-label">Setor</label>
                    <div class="u-form-checkbox-group-wrapper">
                      <div class="u-input-row">
                        <input id="field-dfb6" type="checkbox" name="setor[]" value="Item 1" class="u-field-input" checked="checked" data-calc="">
                        <label class="u-field-label" for="field-dfb6">Item 1</label>
                      </div>
                      <div class="u-input-row">
                        <input id="field-8137" type="checkbox" name="setor[]" value="Item 2" class="u-field-input" data-calc="">
                        <label class="u-field-label" for="field-8137">Item 2</label>
                      </div>
                      <div class="u-input-row">
                        <input id="field-d7b6" type="checkbox" name="setor[]" value="Item 3" class="u-field-input" data-calc="">
                        <label class="u-field-label" for="field-d7b6">Item 3</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-carousel-item u-form-step u-slide">
                  <div class="u-form-checkbox-group u-form-group u-form-input-layout-vertical u-form-group-7">
                    <label class="u-label">Unidade</label>
                    <div class="u-form-checkbox-group-wrapper">
                      <div class="u-input-row">
                        <input id="field-d586" type="checkbox" name="unidade[]" value="Item 1" class="u-field-input" checked="checked" data-calc="">
                        <label class="u-field-label" for="field-d586">Item 1</label>
                      </div>
                      <div class="u-input-row">
                        <input id="field-11cd" type="checkbox" name="unidade[]" value="Item 2" class="u-field-input" data-calc="">
                        <label class="u-field-label" for="field-11cd">Item 2</label>
                      </div>
                      <div class="u-input-row">
                        <input id="field-8310" type="checkbox" name="unidade[]" value="Item 3" class="u-field-input" data-calc="">
                        <label class="u-field-label" for="field-8310">Item 3</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-align-left u-form-group u-form-submit">
                <a href="#" class="u-border-none u-btn u-btn-step u-btn-step-prev u-button-style u-custom-color-1 u-btn-1">Voltar</a>
                <a href="#" class="u-border-none u-btn u-btn-step u-btn-step-next u-button-style u-custom-color-1 u-btn-1">Próximo</a>
                <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-1">Enviar</a>
                <input type="submit" value="submit" class="u-form-control-hidden">
              </div>
              <div class="u-form-send-message u-form-send-success"> Obrigado! A sua mensagem foi enviada. </div>
              <div class="u-form-send-error u-form-send-message"> Não foi possível enviar a sua mensagem. Por favor, corrija os erros e tente novamente. </div>
              <input type="hidden" value="" name="recaptchaResponse">
            </form>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-50 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 413.348 413.348" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5801"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 413.348 413.348" id="svg-5801"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"></path></svg></button>
      </div>
    </section><style>.u-dialog-section-4 .u-dialog-1 {
  width: 566px;
  min-height: 431px;
  margin: 60px auto;
}

.u-dialog-section-4 .u-container-layout-1 {
  padding: 22px 0;
}

.u-dialog-section-4 .u-form-1 {
  margin-bottom: 0;
  margin-top: 0;
  height: 338px;
}

.u-dialog-section-4 .u-form-group-3 {
  margin-left: 0;
}

.u-dialog-section-4 .u-form-group-4 {
  margin-left: 0;
}

.u-dialog-section-4 .u-form-group-5 {
  margin-left: 0;
}

.u-dialog-section-4 .u-form-group-6 {
  margin-left: 0;
}

.u-dialog-section-4 .u-form-group-7 {
  margin-left: 0;
}

.u-dialog-section-4 .u-btn-1 {
  background-image: none;
  display: inline-block;
}

.u-dialog-section-4 .u-btn-1 {
  background-image: none;
  display: inline-block;
}

.u-dialog-section-4 .u-btn-1 {
  background-image: none;
  display: inline-block;
}

.u-dialog-section-4 .u-icon-1 {
  width: 15px;
  height: 15px;
  left: auto;
  top: 17px;
  position: absolute;
  right: 16px;
}

@media (max-width: 991px) {
  .u-dialog-section-4 .u-container-layout-1 {
    padding-top: 40px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-4 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-4 .u-container-layout-1 {
    padding-top: 22px;
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
}</style>
</body></html>
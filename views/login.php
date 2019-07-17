<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
      <p>Login</p>
    </div>

    <!-- Login Form -->
    <form method="POST" action="<?php echo BASE_URL?>">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
      <div class="alert alert-danger" style="display:<?php echo $resposta;?>;" role="alert">
          Email ou senha incorreto!
      </div>
    </form>

    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueci minha senha</a>
    </div>-->
    <div id="formFooter">
      <a class="underlineHover" href="#">Cadastre-se</a>
    </div>

  </div>
</div>
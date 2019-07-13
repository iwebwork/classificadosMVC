<html>
    <header>
        <!-- HTML 4 -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- HTML5 -->
        <meta charset="utf-8"/>
        <title>Classificados em MVC</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
    </header>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary navBaseStyle">
        <a class="navbar-brand" href="<?php echo BASE_URL;?>"><h6 class="textNav">Classificados</h6></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="textNav nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>login"><h6 class="textNav">Login</h6></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link textNav" href="<?php echo BASE_URL;?>cadastrar"><h6 class="textNav">Cadastre-se</h6> <span class="sr-only">(current)</span></a>
                </li>
                    <a class="nav-link textNav" href="<?php echo BASE_URL;?>anuncios"><h6 class="textNav">Meus Anuncios</h6><span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link textNav" href="<?php echo BASE_URL;?>login/sair"><h6 class="textNav">Sair</h6> <span class="sr-only">(current)</span></a>
                </li>
                
            </ul>
        </div>
    </nav>
        <?php $this->loadViewInTemplateOne($viewName, $viewData);?>

        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/style.js"></script>
    </body>
</html>
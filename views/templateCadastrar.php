<html>
    <header>
        <!-- HTML 4 -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- HTML5 -->
        <meta charset="utf-8"/>
        <title>Classificados em MVC</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/cadastrar.css"/>
    </header>
    <body>

        <?php $this->loadViewInTemplateCadastrar($viewName, $viewData);?>

        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/style.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/cadastrar.js"></script>
    </body>
</html>
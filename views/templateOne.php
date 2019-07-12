<html>
    <header>
        <title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/style.js"></script>
    </header>
    <body onload="alert()">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <h1>Esse e o menu 1</h1>
            <a id="home" href="<?php echo BASE_URL;?>">Home</a>
            <a href="<?php echo BASE_URL;?>galeria">Galeria</a>
        </nav>
        <hr>
        <h1 id="resultado"></h1>
        <hr>
        <?php $this->loadViewInTemplateOne($viewName, $viewData);?>
    </body>
</html>
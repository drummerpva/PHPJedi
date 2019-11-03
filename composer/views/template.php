<html>
    <head>
        <title>Meu Site</title>
        <link href="./assets/css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Esse é o topo</h1>
        <a href="./home">Home</a>
        <a href="./galeria">Galeria</a>
        <hr/>
        
        <?php $this->loadViewInTemplate($viewName,$viewData);?> 
        
        <script src="./assets/js/script.js" type="text/javascript"></script>
    </body>
        
</html>
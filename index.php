<?php include_once 'functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Facilitador de Progressão de aposentadoria Secretadia de Educação.">
    <meta name="author" content="Laura Anerão">
    
    <title>Aposentadoria</title>
    
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com.br/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com.br/docs/4.0/examples/album/album.css" rel="stylesheet">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Aposentadoria</h4>
                    <p class="text-muted">
                        Facilitador de Progressão de aposentadoria Secretadia de Educação
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <strong>Aposentadoria</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">
    
    <section class="jumbotron text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <h1 class="jumbotron-heading">Aposentadoria</h1>
                    <p class="lead text-muted"></p>
                    
                    <form action="index.php" method="post">
                        <label for="meses">Meses</label>
                        <select required class="form-control" name="meses" id="meses">
                            <option value="">Escolha uma opção</option>
                            <option value="33">33 meses</option>
                            <option value="36">36 meses</option>
                        </select>
                        <br>
                        <label for="anos">Anos</label>
                        <input required name="anos" type="text" class="form-control" id="anos" placeholder="Em quantos anos?" value="" >
                        <br>
                        <button class="btn btn-primary my-2 btn-block" type="submit" name="verificar-letra">
                            <i class="fa fa-refresh"></i> Verificar
                        </button>
                    </form>
                </div>
            </div>
            
            <?php
            if(isset($_POST['verificar-letra']))
            {
                if(empty($_POST['meses']) or empty($_POST['anos']))
                {
                    echo '<div class="col-md-10 offset-1"><div class="alert alert-danger">Informe os meses e os anos</div></div>';
                } elseif($_POST['anos'] < 0) {
                    echo '<div class="col-md-10 offset-1"><div class="alert alert-danger">Informe apenas números positivos</div></div>';
                }
                
                else
                {
                    $meses = $_POST['meses'];
                    $anos = $_POST['anos'];
                    
                    $resultado = quantMeses($meses, $anos);
                    
                   echo "<div class='mt-3 alert alert-success text-center'><h4>Letra " . $resultado['letra'] . ".</h4></div>";
                }
            }
            ?>
        
        </div>
    </section>

</main>

<footer class="text-muted fixed-bottom">
    <div class="container">
        <p>
            <a href="https://1drv.ms/w/s!AuieGz2hTCkmgu4YYci9Q0Fbngghyw?e=PiPOfp" target="_blank">
                <span class="fa fa-download"></span> Download Tabela feita por Jeanine
            </a>
        </p>
        
        <p>
            <a href="https://github.com/lauraanerao" target="_blank">
                <span class="fa fa-github"></span> Laura Anerão
            </a>
        </p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com.br/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com.br/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com.br/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com.br/assets/js/vendor/holder.min.js"></script>
</body>
</html>

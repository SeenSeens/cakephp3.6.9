<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= h($title) ?> </title>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('font-awesome.min') ?>
    <?= $this->Html->script('jquery-3.3.1.slim.min') ?>
    <?= $this->Html->script('bootstrap.min', ['block' => 'scriptBottom']) ?>
    <?= $this->Html->script('popper.min', ['block' => 'scriptBottom']   ) ?>

    <!-- Fetch meta, css, script -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    
</head>
<body>
    <!-- Page Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CakePHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="my-2 my-lg-0">
                <?php
                    echo $this->Html->link(
                        'Register',
                        '/registration',
                        ['class' => 'btn btn-success my-2 my-sm-0']
                    );
                    echo '&nbsp';
                    echo $this->Html->link(
                        'Login',
                        '/login',
                        ['class' => 'btn btn-success my-2 my-sm-0']
                    );
                ?>
            </form>
        </div>
    </nav>

    <div class="container">
        <?= $this->Flash->render() ?>
    </div>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <!-- Page Footer -->    
    <nav class="navbar fixed-bottom navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Fixed bottom</a>
    </nav>
</body>
<?= $this->fetch('scriptBottom') ?>
</html>

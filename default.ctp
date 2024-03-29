<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Cria a meta tag de charset -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <!-- Imprime uma string -->
        <?= $cakeDescription ?>:
        <!-- Não consegui entender o conceito do fetch poderiam me exemplificar,
         de onde viria este title ? -->
        <?= $this->fetch('title') ?>
    </title>
    <!-- Não consegui entender o conceito poderiam me exemplificar. Como o Cake sabe
     da onde vem? não consegui encontrar nada com este nome "icon", É alguma constante
     ou componente? onde é definida? a exclusão desta linha remove duas linhas que definem
     um os favicons porem ainda há um favicon na página -->
    <?= $this->Html->meta('icon') ?>
    <!-- Inseri dois css que esta localizado na pasta css que esta dentro da webroot -->
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <!-- Não consegui entender o conceito do fetch poderiam me exemplificar,
     de onde viriam os conteudos em parentese ? deletei estas linhas e não houve qualquer
     diferença na view (quando removi os Html->css acima a view perdeu os arquivos css) -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
    </header>
    <div id="container">

        <div id="content">
            <!-- Irá renderizar uma "flash message" (permanece somente durante a sessão) -->
            <?= $this->Flash->render() ?>
            <!-- Não consegui entender o conceito do fetch poderiam me exemplificar? no lugar
             deste "content" será inserido o framento correspondete ao método do controller
             mas como que é descoberto o nome do template (neste caso edit.ctp)? -->
            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>

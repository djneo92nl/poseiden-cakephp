<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of fix*les must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no"" >
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>
			<?= $this->fetch('title') ?>
		</title>
		<?= $this->Html->meta('icon') ?>

		<?= $this->Html->css('bootstrap.css') ?>
		<?= $this->Html->css('main.css') ?>
		<?= $this->Html->css('font-awesome.min.css') ?>
		<?= $this->Html->script("jquery-2.1.1.min.js"); ?>


        <?= $this->fetch('meta') ?>
		<?= $this->fetch('css') ?>
		<?= $this->fetch('script') ?>
		<script src="//cdn.jsdelivr.net/medium-editor/latest/js/medium-editor.min.js"></script>
		<link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/latest/css/medium-editor.min.css" type="text/css"
		      media="screen" charset="utf-8">
	</head>
	<body class="nifty-ready pace-done">
		<div id="container" class="effect mainnav-lg" >
			<header id="navbar">
				<div id="navbar-container" class="boxed">
					<?= $this->element('navbar',['cache' => true]) ?>
				</div>
			</header>

			<div id="boxed">
				<?= $this->Flash->render() ?>
				<div id="content-container">
                    <?= $this->fetch('content') ?>
				</div>
				<?php $cell = $this->cell('Menu',[]); ?>

				<?=$cell ?>

			</div>
		</div>

        <?= $this->fetch('scriptBottom');?>
        <?= $this->Html->script("jquery-2.1.1.min.js"); ?>
		<?= $this->Html->script("bootstrap.min.js"); ?>
		<?= $this->Html->script("fastclick.min.js"); ?>
		<?= $this->Html->script("nifty.min.js"); ?>
	</body>
</html>

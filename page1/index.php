<?php $page = 'page1' ?>
<?php include_once('../includes/header.php') ?>
    <h1>Page One</h1>
    <p>Woop woop! You managed to load a different page.</p>
    <p>If you want to see what was actually just loaded, take a look at <a href="/page1/?ajax=true" target="_blank">/page1/?ajax=true</a>.</p>
<?php include_once('../includes/footer.php') ?>
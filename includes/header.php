<?php if (!isset($_GET['ajax'])): ?>
<?php $pages = array(
    'home' => 'Home',
    'page1' => 'Page One',
    'page2' => 'Page Two',
    'page3' => 'Page Three'
) ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>History AJAX - <?php echo $pages[$page] ?></title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1 class="site-title"><a href="/">History AJAX</a></h1>
    <nav id="site-nav">
		<h3>Navigation</h3>
		<ul>
		<?php foreach ($pages as $uid => $title): ?>
			<li><a id="site-nav-<?php echo $uid ?>"<?php echo ($page == $uid)? ' class="active"' : '' ?> href="/<?php echo ($uid == 'home')? '': $uid.'/' ?>"><?php echo $title ?></a></li>
		<?php endforeach ?>
		</ul>
	</nav>
	<section role="main" id="main">
<?php endif ?>
<html>
<head>
<title></title>
</head>
<body>
<h1> HTML table</h1>
<p></p>
<h2>Users list</h2>
<?= $users; ?>
<ul>
<?php foreach($subjects as $sub) { ?>
    <li><?= $sub['subject'] ?>-<?= $sub['abbr'] ?></li>
<?php }  ?>
</ul>

</body>
</html>
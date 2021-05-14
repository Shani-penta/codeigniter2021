<html>
<head>
<title></title>
</head>
<body>
<h1> <?= $mytitle ?></h1>
<p><?= $content ?></p>
<h2>Subject list</h2>
<ul>

<?php 
if(count($subjects)>0)
{
foreach($subjects as $sub) {
echo "<li>" . $sub. "</li>";
} 
}else{
    echo "sorry! no subjects";
} ?>

</ul>
</body>
</html>
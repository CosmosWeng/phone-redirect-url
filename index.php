<?php
// use Tracy\Debugger as TracyDebugger;
// require_once __DIR__ . '/vendor/autoload.php';
// TracyDebugger::$maxDepth = 10;
// TracyDebugger::$maxLen = 500;
// TracyDebugger::enable();


//dump($_SERVER['REDIRECT_URL']);
$path = explode('/',$_SERVER['REDIRECT_URL']);
var_dump($path);
$users = ['0931123456'=>['Header'=>'HeaderA','email'=>'email_A','footer'=>'footer_A'],
          '0936041219'=>['Header'=>'HeaderB','email'=>'email_B','footer'=>'footer_B'],
          '0968063303'=>['Header'=>'HeaderC','email'=>'email_C','footer'=>'footer_C'],
          '0911384217'=>['Header'=>'HeaderD','email'=>'email_D','footer'=>'footer_D'],
          '0934783647'=>['Header'=>'HeaderE','email'=>'email_E','footer'=>'footer_E']
         ];
 ?>
 <html>
<?php
foreach ($users as $key =>$value ) {
    echo "<a href='./".$key."'>" . $key .'</a>&nbsp;&nbsp;';
}
 ?>
<br>
<br>
<br>

<head>
<?php echo $users[$path[1]]['Header']; ?>
</head>
<hr>
<body style="bloder=2">
<form action="/<?php echo $users[$path[1]]['email'] ?>">
<label><?php echo $users[$path[1]]['email'] ?></label>
</form>
</body>
<hr>
<footer>
<?php echo $users[$path[1]]['footer']; ?>
</footer>
 </html>

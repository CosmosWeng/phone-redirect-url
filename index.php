<?php
use Tracy\Debugger as TracyDebugger;
require_once __DIR__ . '/vendor/autoload.php';
TracyDebugger::$maxDepth = 10;
TracyDebugger::$maxLen = 500;
TracyDebugger::enable();

//dump($_SERVER['REDIRECT_URL']);
$path = explode('/',$_SERVER['REDIRECT_URL']);
array_splice($path,array_search('',$path),1);
array_splice($path,array_search('phone',$path),1);
dump($path);
$header = 'Header-' .$path[0];
$footer = 'footer-' .$path[1];
$email = $path[0] . '@gmail.com';

$users = [ $path[0] =>[$path[1] => ['Header'=>$header,'email'=>$email,'footer'=>$footer]]];
dump($users);
 ?>

 <html>
 <body>
<?php
$arr = ['0931123456','0968112233','0982456789'];
$brr = ['a','b','c'];

foreach ($arr as $key => $value) {
  echo '<br>';
  foreach ($brr as $k => $v) {
      echo "<a href='../".$value.'/'.$brr[$key].($k+1)."'>". $value.'/'.$brr[$key].($k+1) .'.php'."</a>&nbsp;&nbsp;";
  }
}
 ?>
 </body>
 </html>

<!-- 1:a -->
<?php
echo strtoupper("Hello WORLD!");
echo "<br>";
?>
<!-- 1:b -->
<?php
echo strtolower("Hello WORLD.");
echo "<br>";
?>
<!-- 1:c -->
<?php
echo ucfirst("hello world!");
echo"<br>"
?>
<!-- 1:d -->
<?php
echo ucwords("hello world");
echo"<br>"
?>
<!-- 2 -->
<?php
$input = ' 180230';
$time = strtotime($input);
echo date(' h:i:s', $time);
echo "<br>"
?>
<!-- 3-->
<?php
$word = "Majd";
$mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
    
}
echo "<br>"
?>

<!-- 4 -->
<?php

  $path = "/testweb/var/www/mywebsite/htdocs/home.php";
  
  $file1 = basename($path);
  
  
  // Show filename with file extension
  echo $file1 . "\n";
  echo "<br>"
  
  
?>
<!-- 5 -->
<?php
$mailid  = 'MajdAtyyat@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
echo "<br>"
?>
<!-- 6-->
<?php
$str1 = 'rayy@example.com';
echo substr($str1, -3)."\n";
echo "<br>"
?>
<!-- 7 -->
<?php

  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  echo substr(str_shuffle($data), 0, 8);
  echo "<br>"

?>
<!-- 8 -->
<?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
echo"<br>";
?>

<!-- 9 -->
<?php
$first = "dragonballr";
$second = "dragonbolle";

for ($i = 0; $i < strlen($first); $i++) {
    if (substr($first, $i,1 ) !== substr($second, $i,1 )) {
        echo "frist diff between two strings at position $i:" . substr($first, $i, 1) . " vs " . substr($second, $i, 1) . "<br>";
        break;
    }
}

?>

<!-- 10 -->
<?php
echo "<br>";
$string=["twinkle","twinkle","little star"];
var_dump($string);
?>

<!-- 11 -->
<?php
echo "<br>";
$str = 'n';
echo ++$str;
?>
<!-- 12 -->
<?php
echo "<br>";
$sentence = 'I am happy today.';
$string = 'very ';
$position = '5';
  
echo substr_replace( $sentence, $string, $position, 0 );
?>
<!-- 13 -->

<?php
echo "<br>";
$str = "0077555";
$str = ltrim($str, "0");          
echo $str;
?>

<!-- 14 -->
<?php
echo "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", "", $my_str)."\n";
?>

<!-- 15 -->
<?php
echo "<br>";
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo str_replace("-", "", $my_str)."\n";
?>

<!-- 16 -->
<?php
echo "<br>";
$str = "Example,to remove<the>Special'Char;";
echo preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$str);

?>
<!-- 17 -->
<?php
echo "<br>";
$my_string = 'The/quick>brown fox jumps over the lazy dog';
$string= preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$my_string);
echo implode(' ', array_slice(explode(' ', $string), 0, 5))."\n";
?>
<!-- 18 -->
<?php
echo "<br>";
$my_str = '3,534.90';
echo str_replace(",", "", $my_str)."\n";
?>
<!-- 19 -->
<?php
echo "<br>";
foreach (range('A', 'Z') as $alphabet) {
    echo $alphabet." ";
}
?>
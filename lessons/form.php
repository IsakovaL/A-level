<?php
//
//
//// $a=12;
//// $b=2;
//// $c="lalala";
//// print($a+$b).'<br>';
//// print($a*$b).'<br>';
//// print($a." ".$c);
//
////    var_dump($_POST);
//
//   $fizz = intval($_POST['fizz']);
//   $buzz = intval($_POST['buzz']);
//   $number = intval($_POST['number']);
//
//   $i = 1;
//
//for($i = 1; $i <= $number; $i++) {
//
//    if($i % $fizz == 0 && $i % $buzz == 0) {
//        echo("FB\n");
//        } elseif($i % $fizz == 0) {
//            echo("F\n");
//        } elseif($i % $buzz == 0) {
//            echo("B\n");
//        } else echo("$i\n");
//    };
//
//    exit();
//    // $_POST["inputEmail4"];

if(@$_REQUEST['doGo']) {
    echo '<pre>';
    print_r($_REQUEST['text']);
    echo '<pre>';
}
?>
<form action="/" method="post">
<p>вам понятен материал?</p>
    <input type="radio" name="answer" value="yes" checked>да
    <input type="radio" name="answer" value="no" checked>нет
    <input type="submit" name="doGo" value="Go!">
</form>
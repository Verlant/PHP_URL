<?php
$url = "https://darkcity.fr/blog/2015/08/16/bac-a-sable-php/";

function foo1(string $str)
{
    $str_arr = explode("/", $str);
    $array = array();
    foreach ($str_arr as $value) {
        // echo "Boucle " . $value . " = ";
        // print_r($array);
        // echo "<br>";
        if ($value != $str_arr[0] && $value != $str_arr[1]) {
            $array[] = $value;
        }
    }
    return $array;
}



function foo2(array $array)
{
    $arr = array();
    foreach ($array as $value) {
        if (is_numeric($value)) {
            $arr[$value] = "int";
        } else {
            $arr[$value] = "string";
        }
    }
    return $arr;
}



function foo3(array $array)
{
    $arr = array();
    $int_arr = [];
    $string_arr = [];
    foreach ($array as $value) {
        if (is_numeric($value)) {
            $int_arr[] = $value;
        } else {
            $string_arr[] = $value;
        }
    }
    $arr["string"] = $string_arr;
    $arr["int"] = $int_arr;
    return $arr;
}
?>

<pre>
    <?php
    echo "<br>url : <br>";
    var_export(explode("/", $url));
    echo "<br>Question a : <br>";
    print_r(foo1($url));
    echo "<br>Question b : <br>";
    print_r(foo2(foo1($url)));
    echo "<br>Question c : <br>";
    print_r(foo3(foo1($url)));
    ?>
</pre>
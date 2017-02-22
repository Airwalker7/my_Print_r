<?php
error_reporting(E_ERROR);
function my_Print_r($var, $mode = 0)
{
    if (is_null($var)) {
        return 0;
    }
    if (!is_array($var)) {
        return 1;
    }
    foreach ($var as $key=>$v) {
        $str=  '[' . "$key"  . '] => ' . " $v ";
        echo  $str;
        if (is_array($v) AND $mode == 1) {
            echo '(';
            foreach ($v as $key1=>$item) {
                $str2 = '[' . "$key1"  . '] => ' . " $item ";
                echo  $str2;
            }
            echo ')';
        }

    }

echo ')';
}
echo 'Array' . '('  ;
my_Print_r([1, 2,4,67,28, 3], 1);




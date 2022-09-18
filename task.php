<?php
$arr=["abcd","abc","hello world","majdd","aty"];
$min=strlen($arr[0]);
$max=0;

    for($i=1;$i<count($arr);$i++){

        if( strlen($arr[$i])<$min ) {
            $min = strlen($arr[$i]);
        }

        if(strlen($arr[$i])>$max  ) {
            $max =strlen($arr[$i]);
        }
    }


    echo "the The shortest array length is ". $min. "The longest array length is ".$max;



?>
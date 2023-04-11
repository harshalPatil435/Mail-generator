<?php
function email_generator($name='test', $i=0) {
        
    $len = strlen($name);
    if($i==0) {
        echo $name.'@gmail.com<br>';
    }

    while($i+1 < $len) {
        $i++;
        
        $new_str = add_dots($name,'.',$i);
        echo $new_str.'@gmail.com<br>';
        
        email_generator($new_str, $i+1);
    }
}
    
function add_dots($str,$dot,$pos) {
    return substr($str, 0, $pos).'.'.substr($str, $pos);
}


email_generator($_POST['name']);


die();
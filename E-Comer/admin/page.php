<?php

$do = '';

if(isset($_GET['do'])){
    $do= $_GET['do'];
}else{

    $do = 'Manage';
}


if ($do == 'Manage'){
    
     echo 'Welcome You are in Manage Category Page';

}elseif ($do == 'Add'){
    
    echo 'Welcome You Are in Add Category Page';


}elseif ($do == 'Insert'){

    echo 'Welcome You Are in Insert Category Page';
}

else{
    
    echo 'Error There\ No Page With This Name';
}
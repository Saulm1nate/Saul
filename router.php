<?php
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'visi':
            include ('templates/'.activeTemplate.'/pages/all-movies-page.php');
            break;
        default:
    }

}else{
    include ('templates/'.activeTemplate.'/pages/main-page.php');
}
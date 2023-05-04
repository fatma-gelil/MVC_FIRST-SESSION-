<?php
function view($file,$data){
    extract($data);
    return require "app/views/$file.views.php";

}

<?php
if(isset($_POST['login'])) {
    if ($_POST['password'] == '123') {
        echo json_encode(array("status" => 'success'));
    }else {
        echo json_encode(array("status" => 'false'));
    }
    
}else {
    echo json_encode(array("status" => 'false'));
}
?>
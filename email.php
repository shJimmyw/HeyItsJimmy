<?php
    $response = array();
    if(empty($_POST['email']) || empty($_POST['msg']) || empty($_POST['name']) ){
        $response['success'] = false;
    } else {
        //mail($receiver, 'Mail From: ' . $_POST['name'] . '<' . $_POST['email'] . '>', $_POST['msg']);
        $response['success'] = true;
    }
    echo json_encode($response);

?>
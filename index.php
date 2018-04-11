<?php
    header("Content-type: application/json;charset=UTF-8"); 
    
    $data = json_decode(file_get_contents('php://input'));
    
    echo json_encode(array('code'=>0, 'msg'=>'无', 'data'=>$data));
?>
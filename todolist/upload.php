<?php
session_start();
include('connection.php');
include('validation.php');
//設定資料個視為json，編碼為utf-8
header('Content-Type:application/json; charset=utf-8');
if($_SERVER['REQUEST_METHOD']=='POST'){
   @$record=$_POST['record'];
    if($record.title!==null && $record.date !==null){
            //陣列轉成JSON格式
            echo json_encode($record);
    }else{
        echo json_encode(array(
            'errorMsg'=>'資料未上傳成功'
        ));
        
    }
}

?>
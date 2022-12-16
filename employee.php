<?php
include '../../smarty/libs/Smarty.class.php';
$smarty = new Smarty;
include ('connection.php');
include('helper.php');
$table='employees';
$keys='name,fname';
$where=array('name'=>'pooja','and'=>'','fname'=>'fname');
$order_by='desc';
$multi=1;
$where=array('id'=>38);
$value=array('name'=>'Sakshi','fname'=>'Sk singh');
session_start();

$data=getAllemployee('employees');
$smarty->assign('employee',$data);

$smarty->display('employee.tpl'); 


?>
<?php
include '../../smarty/libs/Smarty.class.php';
$smarty = new Smarty;
include ('../connection.php');
session_start();
if($_POST){
    $data=array();
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $fname=$_POST['fname'];
    $department=$_POST['department'];
    $data['name']=$name;
    $data['dob']=$dob;
    $data['fname']=$fname;
    $data['department']=$department;
    if(empty($_POST['name'])){
        $data['name_error']='Name is required';
    }
    if(empty($_POST['fname'])){
        $data['fname_error']='father name is required';
    }
    if(empty($_POST['dob'])){
        $data['dob_error']='DOB is required';
    }
    if(empty($_POST['department'])){
        $data['dep_error']='Department is required';
    }
    $data['name_value']=$_POST['name'];
    $data['father_value']=$_POST['price'];
    $data['dob_value']=$_POST['dob'];
    $data['department_value']=$_POST['department'];
    
    if(empty($_POST['name']) || empty($_POST['fname']) || empty($_POST['dob']) || empty($_POST['department'])){
        $smarty->assign('data',$data);
        $smarty->display('addEmployee.tpl');

    }
    else{
      
        $conn->beginTransaction();
        $result=$conn->exec("INSERT INTO employees (name,fname,dob,department) values ('$name','$fname','$dob','$department')");
       

        $conn->commit();
        if($conn->errorCode()!=00000){
                var_dump( $conn->errorInfo()[2]);
        }
        else{
            if($result==1){
                $newURL='employee.php';
                $_SESSION["success"]='Employee added';
                header('Location: '.$newURL);
                // $smarty->assign('success', 'Employee added');
                // $smarty->display('employee.tpl');
            }
            else{
                echo $result;
            }
        


        }
    }

}
else{
    $smarty->display('addEmployee.tpl');
}
// $query='select * from products';
// $selectData=$conn->query($query);
// $product_data=$selectData->fetchAll();
// $smarty->assign('product',$product_data);
// $smarty->display('index.tpl');

// $conn->beginTransaction();
// $result=$conn->exec("INSERT INTO users (name,email,contact,password) values ('pooja','pooja@gmail.com','7052333060','sss')");

// $conn->commit();
// if($conn->errorCode()!=00000){
//         var_dump( $conn->errorInfo()[2]);
// }
// else{
//     echo $result;
   


// }
?>
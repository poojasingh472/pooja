<?php
include '../../smarty/libs/Smarty.class.php';
$smarty = new Smarty;
include ('connection.php');
include('helper.php');
session_start();

if($_POST){
    $data=array();
    $id=$_POST['id'];
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
        $smarty->display('editEmployee.tpl');

    }
    else{
        
        updateData('employees',array('id'=>$id),array('name'=>$name,'fname'=>$fname,'department'=>$department,'dob'=>$dob));
        // $arraydata=['id'=>$id,'name'=>$name,'fname'=>$fname,'department'=>$department,'dob'=>$dob];
        
        // $sql = "UPDATE employees SET name=:name, fname=:fname,department=:department ,dob=:dob WHERE id=:id";
        // $stmt= $conn->prepare($sql)->execute($arraydata);       
       
        // if($conn->errorCode()!='00000'){
        //         var_dump( $conn->errorInfo()[2]);
        // }
        // else{
                $newURL='employee.php';
                $_SESSION["success"]='Employee Update';
                header('Location: '.$newURL);
                
        


        // }
    }
    // if(empty($_POST['name']) || empty($_POST['father'] || empty($_POST['dob'] || empty($_POST['department'])){
    //     $smarty->assign('data',$data);
    //     $smarty->display('editEmployee.tpl');

    // }
    // else{
        // $conn->beginTransaction();
        // $result=$conn->exec("UPDATE employee set name=data['name],fname=data['fname],dob=$data['dob],department=$data['department] where id=$_POST['id]");
        // if($result==1){
        //     $smart->assign('success','Employee update');
        //     $smarty->display('employee.tpl');
        // }

        // $conn->commit();
        // if($conn->errorCode()!=00000){
        //         var_dump( $conn->errorInfo()[2]);
        // }
        // else{
        //     echo $result;
        


        // }
    // }

}
else{
    $id=$_GET['id'];
    $employee=$conn->query('select * from employees where id="'.$id.'"');
    $data=$employee->fetch();
    $smarty->assign('employee',$data);
    $smarty->assign('id',$id);
    
    $smarty->display('editEmployee.tpl');
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
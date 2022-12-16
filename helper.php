<?php
include ('connection.php');

function getAllemployee($table){
    include ('connection.php');   
    $employee=$conn->query('select emp.name,emp.id,emp.fname,emp.dob,dep.name as department from employees emp join department dep on emp.department=dep.id');
    $data=$employee->fetchAll();    
    return $data;
}
// function getAllData($table,$select=[],$where=1){
//     $selectData=implode(',',$select);
//     // $whereData=implode();
//     include ('connection.php');   
//     $employee=$conn->query('select '.$selectData.' from '.$table .' where  '.$where)->execute();
//     var_dump($employee->fetch());
//     $data=$employee->fetch();    
//     return $data;
// }
// function selectD($table, array $columns, $field, $param){
//     $cols = $conn->setColumns($columns);
//     $stmt = $conn->db->prepare("SELECT $cols FROM $table WHERE $field = ?");
//     $stmt->execute(array($param));
//     $result = $stmt->fetch();
//     return $result;
// }
 function selectData($table, $keys, $where, $multi = false, $order_by = false)
{  
    
    
    include ('connection.php'); 
    $sql = "SELECT $keys FROM $table";
    $bind_arr = [];

    if ($where) {
        $sql .= " WHERE";
        foreach ($where as $key => $value) {
            if ($key != 'IN') {
                $sql .= " $key";
            }
            if ($value) {
                if ($key == 'IN') {
                    $sql .= " IN ( $value )";
                } else {
                    $sql .= " = :$key";
                    $bind_arr[$key] = $value;
                }
            }
        }
    }
    if($order_by)
    $sql .= " order by id $order_by";
    
    $statement = $conn->prepare($sql);
   
    foreach ($bind_arr as $key => $value) {
    $statement->bindValue(":$key", $value);
    }
    $statement->execute();

    if ($multi) {
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    } else {
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    }
    // var_dump($statement);
    // exit;
    return $result;
}
function deleteRecord($key,$value){
    include ('connection.php'); 
    if($key){
        $data = [
            $key => $value,      
        ];
        $sql = "DELETE FROM employees WHERE $key = :$key";
        $conn->prepare($sql)->execute($data);
        if($conn->errorCode()!='00000'){
            var_dump( $conn->errorInfo()[2]);
            return false;
        }
        else{
            return true;
            // $_SESSION['success']='Delete Successful';
            // $newURL='employee.php';
            // header('Location: '.$newURL);
        }
    }
}
function updateData($table,$where,$sets){
    include ('connection.php'); 
    // $arraydata=['id'=>$id,'name'=>$name,'fname'=>$fname,'department'=>$department,'dob'=>$dob];
        
    // $sql = "UPDATE employees SET name=:name, fname=:fname,department=:department ,dob=:dob WHERE id=:id";
    // $stmt= $conn->prepare($sql)->execute($arraydata);       
   
    // if($conn->errorCode()!='00000'){
    //         var_dump( $conn->errorInfo()[2]);
    // }
    // else{
    //         $newURL='employee.php';
    //         $_SESSION["success"]='Employee Update';
    //         header('Location: '.$newURL);
    // }
    $sql = "update  $table  " ;
    $bind_value=[];
    if($sets){
        $sql .=' set ';
        $bind_value = [];
      
        $setCount=count($sets);
        $count=1;
        foreach($sets as $key =>$setValue){
            if($setValue){
                $sql .= $key." = :$key ";
                if($count!=$setCount){
                    $sql.=',';
                }
                $bind_value[$key] = $setValue;
            } 
            $count++;
        }
    }

    $bind_arr = [];

    if ($where) {
        $sql .= " WHERE";
        foreach ($where as $key => $value) {
           
            if ($value) {
              
                $sql .= "  $key=:$key";
                $bind_arr[$key] = $value;
                
            }
        }
        
    }
   
    
   
    $statement = $conn->prepare($sql);
   
    foreach ($bind_arr as $key => $value) {
        $statement->bindValue(":$key", $value);
    }
    foreach ($bind_value as $key => $value) {
        $statement->bindValue(":$key", $value);
    }
    
    $statement->execute();

    // return $result;
    if($conn->errorCode()!='00000'){
                return  $conn->errorInfo()[2];
        }
        else {
            return true;
        }

}


?>
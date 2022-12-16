<html>
<head>
<head>
    <body>
    <h1>Add Employee</h1>
       <span style="color:red">{$data.name_error}</span><br>
         <span style="color:red">{$data.fname_error}</span><br>
             <span style="color:red">{$data.dob_error}</span><br>
        <span style="color:red">{$data.dep_error}</span><br>
        <form action ="addEmployee.php" method="post">

            <lable>Name<lable><input type="text" value="{$data.name}" name ='name'><br><br>
             <lable>Father Name<lable><input type="text" value="{$data.fname}" name ='fname'><br><br>
             <lable>DOB<lable><input value="{$data.dob}" type="date" name ='dob'><br><br>
             <lable>Department<lable>
             <select   name ='department'>
                <option value="">Select Department</option>
                 <option value="1">Shopify</option>
                 <option value="2">magento</option>
             </select>
             <br>
             <button type="submit">Submit</button>
        </form>
    </body>
</html
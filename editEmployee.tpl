<html>
<head>
<head>
    <body>
    <h1>Edit Employee</h1>
       <span style="color:red">{$data.name_error}</span><br>
         <span style="color:red">{$data.fname_error}</span><br>
             <span style="color:red">{$data.dob_error}</span><br>
        <span style="color:red">{$data.dep_error}</span><br>
        <form action ="editEmployee.php" method="post">
                <input type="hidden" name="id" value="{$id}">
            <lable>Name<lable><input type="text" value="{$employee.name}" name ='name'><br><br>
             <lable>Father Name<lable><input type="text" value="{$employee.fname}" name ='fname'><br><br>
             <lable>DOB<lable><input value="{$employee.dob}" type="date" name ='dob'><br><br>
             <lable>Department<lable>
             <select   name ='department'>
                <option value="">Select Department</option>
                 <option {if $employee.department eq '1'} selected {/if}value="1">Shopify</option>
                 <option  {if $employee.department eq '2'} selected {/if} value="2">magento</option>
             </select>
             <br>
             <button type="submit">Update</button>
        </form>
    </body>
</html
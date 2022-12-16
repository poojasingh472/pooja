<?php
/* Smarty version 4.3.0, created on 2022-12-02 11:58:24
  from '/home/users/pooja.singh/www/html/CURD/Employee/addEmployee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63899b08233d77_40963186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb83d23f99c966f1907607506b34af3c7ed0e6ac' => 
    array (
      0 => '/home/users/pooja.singh/www/html/CURD/Employee/addEmployee.tpl',
      1 => 1669962501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63899b08233d77_40963186 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<head>
    <body>
    <h1>Add Employee</h1>
       <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['name_error'];?>
</span><br>
         <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['fname_error'];?>
</span><br>
             <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['dob_error'];?>
</span><br>
        <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['dep_error'];?>
</span><br>
        <form action ="addEmployee.php" method="post">

            <lable>Name<lable><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" name ='name'><br><br>
             <lable>Father Name<lable><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['fname'];?>
" name ='fname'><br><br>
             <lable>DOB<lable><input value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dob'];?>
" type="date" name ='dob'><br><br>
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
</html<?php }
}

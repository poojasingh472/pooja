<?php
/* Smarty version 4.3.0, created on 2022-12-02 13:28:41
  from '/home/users/pooja.singh/www/html/CURD/Employee/editEmployee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6389b03192b527_31280712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0e37a2ba72bb99d1594629882784569c765f623' => 
    array (
      0 => '/home/users/pooja.singh/www/html/CURD/Employee/editEmployee.tpl',
      1 => 1669967903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6389b03192b527_31280712 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<head>
    <body>
    <h1>Edit Employee</h1>
       <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['name_error'];?>
</span><br>
         <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['fname_error'];?>
</span><br>
             <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['dob_error'];?>
</span><br>
        <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['data']->value['dep_error'];?>
</span><br>
        <form action ="editEmployee.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <lable>Name<lable><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['name'];?>
" name ='name'><br><br>
             <lable>Father Name<lable><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['fname'];?>
" name ='fname'><br><br>
             <lable>DOB<lable><input value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['dob'];?>
" type="date" name ='dob'><br><br>
             <lable>Department<lable>
             <select   name ='department'>
                <option value="">Select Department</option>
                 <option <?php if ($_smarty_tpl->tpl_vars['employee']->value['department'] == '1') {?> selected <?php }?>value="1">Shopify</option>
                 <option  <?php if ($_smarty_tpl->tpl_vars['employee']->value['department'] == '2') {?> selected <?php }?> value="2">magento</option>
             </select>
             <br>
             <button type="submit">Update</button>
        </form>
    </body>
</html<?php }
}

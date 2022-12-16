<?php
/* Smarty version 4.3.0, created on 2022-12-05 12:31:06
  from '/home/users/pooja.singh/www/html/CURD/Employee/employee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_638d9732df7516_32775075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1ea1724e4677f8f728bf2ccfb030f48e56a2696' => 
    array (
      0 => '/home/users/pooja.singh/www/html/CURD/Employee/employee.tpl',
      1 => 1670223658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638d9732df7516_32775075 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .button {
            padding: 16px;
            }

        table

            {
            border-collapse: collapse;
            width: 100%;
            }
            th, td {
                text-align: left;
                padding: 8px;
            }

            // tr:nth-child(even) {
            //     background-color: #f2f2f2;
            // }
            #employee {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #employee td, #employee th 
            {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #employee tr:nth-child(even)
            {
                background-color: #f2f2f2;
            }

            #employee tr:hover {
                background-color: #ddd;
            }

            #employee th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
    </head>
<body>
<h1>Product list </h1>
<span style ="color:green"><?php echo $_SESSION['success'];?>
</span><br>
<a href="addEmployee.php" class="button">Add Employee</a>
<table  id="employee" border='1'>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Date of Birth</th>
        <th>Department</th>
        <th>Action</th>
    </tr>
 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employee']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['fname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dob'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['department'];?>
</td>
        <td><a href="editEmployee.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Edit</a> <a href="deleteEmployee.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">delete</a></td>
    </tr>
   
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

</body>
</html><?php }
}

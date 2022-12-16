<?php
/* Smarty version 4.3.0, created on 2022-11-30 12:31:57
  from '/home/users/pooja.singh/www/html/poojaProject2/product/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6386ffe59dc2b3_34902662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61f910e96cb8c3e1abd2b1d337b44781dccf7478' => 
    array (
      0 => '/home/users/pooja.singh/www/html/poojaProject2/product/index.tpl',
      1 => 1669791715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6386ffe59dc2b3_34902662 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <style>
        table

            {

            border-style:solid;

            border-width:2px;

            border-color:pink;

            }
        </style>
    </head>
<body>
<h1>Product list </h1>
<table  border='1'>
    <tr>
        <th>Id</th>
        <th>Price</th>
        <th>Color</th>
    </tr>
 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
</td>
    </tr>
   
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

</body>
</html><?php }
}

<html>
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
<a href="addProduct.php">Add Product</a>
<table  border='1'>
    <tr>
        <th>Id</th>
        <th>Price</th>
        <th>Color</th>
    </tr>
 
    {foreach $product as $row}
    <tr>
        <td>{$row.id}</td>
        <td>{$row.name}</td>
        <td>{$row.color}</td>
    </tr>
   
    {/foreach}
</table>

</body>
</html>
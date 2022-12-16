<html>
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
<span style ="color:green">{$smarty.session.success}</span><br>
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
 
    {foreach $employee as $row}
    <tr>
        <td>{$row.id}</td>
        <td>{$row.name}</td>
        <td>{$row.fname}</td>
        <td>{$row.dob}</td>
        <td>{$row.department}</td>
        <td><a href="editEmployee.php?id={$row.id}">Edit</a> <a href="deleteEmployee.php?id={$row.id}">delete</a></td>
    </tr>
   
    {/foreach}
</table>

</body>
</html>
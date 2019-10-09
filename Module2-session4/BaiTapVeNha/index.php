<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border: solid 1px blue;
        }
        tr, td {
            border: 1px solid black;
            width: 100px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="editForm.php" method="get">
    <table>
        <tr><td>ID</td>
            <td><input type="text" name="id" ></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" ></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" ></td>
        </tr>
        <tr>
            <td>Group</td>
            <td><input type="text" name="group"></td>
        </tr>
        <tr>
            <td><select name="role">
                    <option value="admin">Admin</option>
                    <option value="student" selected>Student</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" style="text-align: center" value="update">Update</td>

        </tr>
    </table>
</form>

</body>
</html>

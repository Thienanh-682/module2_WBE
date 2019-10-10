<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="add_student.php" method="get">
    <center>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" placeholder="Input Names" name="names"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" placeholder="Input Address" name="address"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" placeholder="Input Phone Number" name="phone"></td>
            </tr>
            <tr>
                <td>Class:</td>
                <td><input type="text" placeholder="Input Class" name="class"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><select name="role">
                        <option value="student">Student</option>
                        <option value="Teacher">Teacher</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center"><input type="submit" value="Add"></td>
            </tr>
        </table>
    </center>
</form>
<table>
    <?php
    include_once "StudentsManager.php";
    $listStudent = $manager->readFileJsonToArray();
    for ($i = 0; $i < count($listStudent); $i++) {
        echo "<tr>";
        echo "<td width='20%'>" . $listStudent[$i]['names'] . "</td>";
        echo "<td width='20%'>" . $listStudent[$i]['address'] . "</td>";
        echo "<td width='20%'>" . $listStudent[$i]['phone'] . "</td>";
        echo "<td width='20%'>" . $listStudent[$i]['class'] . "</td>";
        echo "<td width='20%'>" . $listStudent[$i]['role'] . "</td>";
        echo "<td>" . "<a href='delete.php?id=". $i . "'>" . "Delete</a>" . "</td>";
        echo "<td>" . "<a href='edit.php?id=" . $i . "'>" . "Edit</a>" . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
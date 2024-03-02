<?php
include '../Controller/EmployeC.php';
$employeC = new EmployeC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employe = new Employe($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['dob']);
    $employeC->updateEmploye($_GET['id'], $employe);
    header('Location: liste.php');
    exit;
} else if (isset($_GET['id'])) {
    $employe = $employeC->getEmploye($_GET['id']);
}
?>
<html>

<head> </head>

<body>
    <center>
        <form method="post">
            <table>
                <tr>
                    <td><label>Last Name</label></td>
                    <td><input type="text" name="lastname" id="lastname" value="<?php echo $employe['lastname']; ?>" /></td>
                </tr>
                <tr>
                    <td><label>First Name</label></td>
                    <td><input type="text" name="firstname" id="firstname" value="<?php echo $employe['firstname']; ?>" /></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="text" name="email" id="email" value="<?php echo $employe['email']; ?>" /></td>
                </tr>
                <tr>
                    <td><label>Date of Birth</label></td>
                    <td><input type="date" name="dob" id="dob" value="<?php echo $employe['dob']; ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="update employe" /></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
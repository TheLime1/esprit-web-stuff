<?php
include '../Controller/EmployeC.php';
$employeC = new EmployeC();

if (isset($_GET['addDummy'])) {
    $employeC->addDummyEmploye();
    header('Location: liste.php');
    exit;
}

if (isset($_GET['delete'])) {
    $employeC->deleteEmploye($_GET['delete']);
}

$list = $employeC->listEmployes();
?>
<html>

<head></head>

<body>
    <center>
        <h1>List of employes</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>project ID</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $employe) {
            echo '<tr>';
            echo '<td>' . $employe['id'] . '</td>';
            echo '<td>' . $employe['firstname'] . '</td>';
            echo '<td>' . $employe['lastname'] . '</td>';
            echo '<td>' . $employe['email'] . '</td>';
            echo '<td>' . $employe['dob'] . '</td>';
            echo '<td>' . $employe['project_id'] . '</td>';
            echo '<td><a href="update_employe.php?id=' . $employe['id'] . '">Update</a></td>';
            echo '<td><a href="?delete=' . $employe['id'] . '">Delete</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
    <form method="get">
        <table align="center">
            <tr>
                <td>
                    <button type="submit" name="addDummy">Add Dummy Data</button>
                </td>
                <td>
                    <button type="submit" formaction="add_employe.php">Add Employe</button>
                </td>
            </tr>
        </table>
    </form>
    <button onclick="window.location.href='liste_task.php'">Liste Task</button>
    <br>
    <button type="button" disabled>Too lazy for projects List</button>
</body>

</html>
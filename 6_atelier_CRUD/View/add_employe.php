<?php
include '../Controller/EmployeC.php';
$employeC = new EmployeC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $employe = new Employe($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['dob'], $_POST['project_id']);
  $employeC->addEmploye($employe);
  header('Location: liste.php');
  exit;
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
          <td><input type="text" name="lastname" id="lastname" /></td>
        </tr>
        <tr>
          <td><label>First Name</label></td>
          <td><input type="text" name="firstname" id="firstname" /></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td><input type="text" name="email" id="email" /></td>
        </tr>
        <tr>
          <td><label>Date of Birth</label></td>
          <td><input type="date" name="dob" id="dob" /></td>
        </tr>
        <tr>
          <td><label>Project ID</label></td>
          <td><input type="text" name="project_id" id="project_id" /></td>
        <tr>
          <td><input type="submit" value="add employe" /></td>
        </tr>
      </table>
    </form>
  </center>
</body>

</html>
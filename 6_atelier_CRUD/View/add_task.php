<?php
include '../Controller/taskC.php';
$taskC = new TaskC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $task = new Task($_POST['title'], $_POST['description'], $_POST['duration'], $_POST['state'], $_POST['employe_id']);
  $taskC->addTask($task);
  header('Location: liste_task.php');
  exit;
}
?>
<html>

<head></head>

<body>
  <center>
    <form method="post">
      <table>
        <tr>
          <td><label>Title</label></td>
          <td><input type="text" name="title" id="title" /></td>
        </tr>
        <tr>
          <td><label>Description</label></td>
          <td><input type="text" name="description" id="description" /></td>
        </tr>
        <tr>
          <td><label>Duration</label></td>
          <td><input type="text" name="duration" id="duration" /></td>
        </tr>
        <tr>
          <td><label>State</label></td>
          <td><input type="text" name="state" id="state" /></td>
        </tr>
        <tr>
          <td><label>Employe ID</label></td>
          <td><input type="text" name="employe_id" id="employe_id" /></td>
        </tr>
        <tr>
          <td><input type="submit" value="add task" /></td>
        </tr>
      </table>
    </form>
  </center>
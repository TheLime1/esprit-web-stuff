<?php
include '../Controller/taskC.php';
$taskC = new TaskC();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $task = new Task($_POST['title'], $_POST['description'], $_POST['duration'], $_POST['state'], $_POST['employe_id']);
  $taskC->addTask($task);
  header('Location: liste_task.php');
  exit;
} else if (isset($_GET['id'])) {
  $task = $taskC->getTask($_GET['id']);
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
          <td><input type="text" name="title" id="title" value="<?php echo $task['title']; ?>" /></td>
        </tr>
        <tr>
          <td><label>Description</label></td>
          <td><input type="text" name="description" id="description" value="<?php echo $task['description']; ?>" /></td>
        </tr>
        <tr>
          <td><label>Duration</label></td>
          <td><input type="text" name="duration" id="duration" value="<?php echo $task['duration']; ?>" /></td>
        </tr>
        <tr>
          <td><label>State</label></td>
          <td><input type="text" name="state" id="state" value="<?php echo $task['state']; ?>" /></td>
        </tr>
        <tr>
          <td><label>Employe ID</label></td>
          <td><input type="text" name="employe_id" id="employe_id" value="<?php echo $task['employe_id']; ?>" /></td>
        </tr>
        <tr>
          <td><input type="submit" value="update task" /></td>
        </tr>
      </table>
    </form>
  </center>
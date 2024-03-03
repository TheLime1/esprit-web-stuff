<?php
include '../Controller/taskC.php';
$taskC = new TaskC();

if (isset($_GET['addDummy'])) {
  $taskC->addDummyTask();
  header('Location: liste_task.php');
  exit;
}

if (isset($_GET['delete'])) {
  $taskC->deleteTask($_GET['delete']);
}

if (isset($_POST['deleteDone'])) {
  $taskC->deleteTasksDone();
}

if (isset($_GET['search'])) {
  $list = $taskC->searchTaskByTitle($_GET['title']);
} else {
  $list = $taskC->listTasks();
}
?>
<html>

<head></head>

<body>
  <center>
    <h1>List of tasks</h1>
  </center>
  <table border="1" align="center" width="70%">
    <tr>
      <th>Id Task</th>
      <th>Title</th>
      <th>Description</th>
      <th>Duration</th>
      <th>State</th>
      <th>Employe ID</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
    <?php
    foreach ($list as $task) {
      echo '<tr>';
      echo '<td>' . $task['id'] . '</td>';
      echo '<td>' . $task['title'] . '</td>';
      echo '<td>' . $task['description'] . '</td>';
      echo '<td>' . $task['duration'] . '</td>';
      echo '<td>' . $task['state'] . '</td>';
      echo '<td>' . $task['employe_id'] . '</td>';
      echo '<td><a href="update_task.php?id=' . $task['id'] . '">Update</a></td>';
      echo '<td><a href="?delete=' . $task['id'] . '">Delete</a></td>';
      echo '</tr>';
    }
    ?>
  </table>

  <table align="center">
    <tr>
      <td>
        <form method="get">
          <button type="submit" name="addDummy">Add Dummy Data</button>
        </form>
      </td>
      <td>
        <form method="get" action="add_task.php">
          <button type="submit">Add Task</button>
        </form>
      </td>
      <td>
        <form method="post">
          <button type="submit" name="deleteDone">Delete Done Tasks</button>
        </form>
      </td>
      <td>
        <form method="get">
          <input type="text" name="title" placeholder="Search by title">
          <button type="submit" name="search">Search</button>
        </form>
      </td>
    </tr>
  </table>
  <button onclick="window.location.href='liste.php'">Liste Employe</button>
</body>

</html>
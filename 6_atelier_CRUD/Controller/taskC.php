<?php
include "../config.php";
include "../Model/task.php";

class TaskC
{
    public function listTasks()
    {
        $sql = "SELECT * FROM task";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function addDummyTask()
    {
        $sql = "INSERT INTO task (title, description, duration, state, employe_id) VALUES (:title, :description, :duration, :state, :employe_id)";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);

            // dummy data
            $dummyData = [
                'title' => 'Dummy Task',
                'description' => 'This is a dummy task',
                'duration' => 60,
                'state' => 'pending',
                'employe_id' => 27
            ];

            $stmt->execute($dummyData);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function deleteTask($id)
    {
        $sql = "DELETE FROM task WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);

            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function addTask(Task $task)
    {
        $sql = "INSERT INTO task (title, description, duration, state, employe_id) VALUES (:title, :description, :duration, :state, :employe_id)";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);

            $data = [
                'title' => $task->getTitle(),
                'description' => $task->getDescription(),
                'duration' => $task->getDuration(),
                'state' => $task->getState(),
                'employe_id' => $task->getEmployeId()
            ];

            $stmt->execute($data);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function updateTask($id, Task $task)
    {
        $sql = "UPDATE task SET title = :title, description = :description, duration = :duration, state = :state, employe_id = :employe_id WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->bindValue(':title', $task->getTitle());
            $stmt->bindValue(':description', $task->getDescription());
            $stmt->bindValue(':duration', $task->getDuration());
            $stmt->bindValue(':state', $task->getState());
            $stmt->bindValue(':employe_id', $task->getEmployeId());

            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function getTask($id)
    {
        $sql = "SELECT * FROM task WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            return $stmt->fetch();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

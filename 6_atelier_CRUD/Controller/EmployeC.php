<?php
include "../config.php";
include "../Model/employe.php";

class EmployeC
{
    public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function addDummyEmploye()
    {
        $sql = "INSERT INTO employe (firstname, lastname, email, dob, project_id) VALUES (:firstname, :lastname, :email, :dob, :project_id)";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);

            // dummy data
            $dummyData = [
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'john.doe@example.com',
                'dob' => '1980-01-01',
                'project_id' => 1
            ];

            $stmt->execute($dummyData);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function deleteEmploye($id)
    {
        $sql = "DELETE FROM employe WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);

            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function addEmploye(Employe $employe)
    {
        $sql = "INSERT INTO employe (firstname, lastname, email, dob, project_id) VALUES (:firstname, :lastname, :email, :dob, :project_id)";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);

            $stmt->bindValue(':firstname', $employe->getFirstname());
            $stmt->bindValue(':lastname', $employe->getLastname());
            $stmt->bindValue(':email', $employe->getEmail());
            $stmt->bindValue(':dob', $employe->getDob());
            $stmt->bindValue(':project_id', $employe->getProjectId());

            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function updateEmploye($id, Employe $employe)
    {
        $sql = "UPDATE employe SET firstname = :firstname, lastname = :lastname, email = :email, dob = :dob, project_id = :project_id WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->bindValue(':firstname', $employe->getFirstname());
            $stmt->bindValue(':lastname', $employe->getLastname());
            $stmt->bindValue(':email', $employe->getEmail());
            $stmt->bindValue(':dob', $employe->getDob());
            $stmt->bindValue(':project_id', $employe->getProjectId());

            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function getEmploye($id)
    {
        $sql = "SELECT * FROM employe WHERE id = :id";
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

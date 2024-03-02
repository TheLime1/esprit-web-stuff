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
        $sql = "INSERT INTO employe (firstname, lastname, email, dob) VALUES (:firstname, :lastname, :email, :dob)";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);

            // Define your dummy data
            $dummyData = [
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'john.doe@example.com',
                'dob' => '1980-01-01',
            ];

            // Execute the statement with the dummy data
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

            // Bind the ID to the statement
            $stmt->bindValue(':id', $id);

            // Execute the statement
            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function addEmploye(Employe $employe)
    {
        $sql = "INSERT INTO employe (firstname, lastname, email, dob) VALUES (:firstname, :lastname, :email, :dob)";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);

            // Bind the Employe data to the statement
            $stmt->bindValue(':firstname', $employe->getFirstname());
            $stmt->bindValue(':lastname', $employe->getLastname());
            $stmt->bindValue(':email', $employe->getEmail());
            $stmt->bindValue(':dob', $employe->getDob());

            // Execute the statement
            $stmt->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function updateEmploye($id, Employe $employe)
    {
        $sql = "UPDATE employe SET firstname = :firstname, lastname = :lastname, email = :email, dob = :dob WHERE id = :id";
        $db = config::getConnexion();
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->bindValue(':firstname', $employe->getFirstname());
            $stmt->bindValue(':lastname', $employe->getLastname());
            $stmt->bindValue(':email', $employe->getEmail());
            $stmt->bindValue(':dob', $employe->getDob());
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

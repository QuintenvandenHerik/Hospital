<?php

    function getPatients() {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM patients INNER JOIN species ON patients.species_id = species.species_id INNER JOIN clients ON patients.client_id = clients.client_id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetchAll();

    }
    
    function createPatient($data) {
        $person = $data['?'];
        $day = $data['?'];
        $month = $data['?'];
        $year = $data['?'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO patients (?, ?, ?, ?) VALUES ('$?', '$?', '$?', '$?')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;

        // TODO: check if the insert worked.
        // if yes, then return true
        // if no, then return false
        RETURN true;
    }

    function getPatient($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM patients WHERE id=" . $id . " ORDER BY ?, ?, ?, ?";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editPatient($data) {
        $id = $data['id'];
        $person = $data['person'];
        $day = $data['day'];
        $month = $data['month'];
        $year = $data['year'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE patients SET ? = '$?', ? = $?, ? = $?, ? = $? WHERE id = $id";        
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;

        // TODO: check if the insert worked.
        // if yes, then return true
        // if no, then return false
        RETURN true;
    }

    function deletePatient($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM patients WHERE id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>
?>
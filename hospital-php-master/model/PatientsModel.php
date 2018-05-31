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
        $name = $data['name'];
        $status = $data['status'];
        $gender = $data['gender'];
        $specieInfo = $data['species_id'];
        $clientInfo = $data['client_id'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO patients (patient_name, patient_status, patient_gender, species_id, client_id) VALUES ('$name', '$status', '$gender', '$specieInfo', '$clientInfo')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;
    }

    function getPatient($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM patients WHERE patient_id = $id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editPatient($data) {
        $patient_id = $data['patient_id'];
        $client_id = $data['client_id'];
        $species_id = $data['species_id'];
        $name = $data['name'];
        $status = $data['status'];
        $gender = $data['gender'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE patients SET patient_name = '$name', patient_status = '$status', patient_gender = '$gender', client_id = '$client_id', species_id = '$species_id' WHERE patient_id = $patient_id";
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;
    }

    function deletePatient($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM patients WHERE patient_id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>
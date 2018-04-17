<?php 
	
    function getClients() {
        $db = openDatabaseConnection();
        $sql_select_clients="SELECT * FROM clients";
        $query = $db->prepare($sql_select_clients);
        $query->execute();
        $db = null;

        return $query->fetchAll();

    }

    function createClient($data) {
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

    function getClient($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM patients WHERE id=" . $id . " ORDER BY ?, ?, ?, ?";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editClient($data) {
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

    function deleteClient($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM patients WHERE id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>
?>
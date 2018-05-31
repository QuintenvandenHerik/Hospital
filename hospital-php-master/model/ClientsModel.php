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
        $fname = $data['firstname'];
        $lname = $data['lastname'];
        $phone = $data['phone'];
        $email = $data['email'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO clients (client_firstname, client_lastname, client_phone, client_email) VALUES ('$fname', '$lname', '$phone', '$email')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;
    }

    function getClient($id) {
        $db = openDatabaseConnection();
        $sql_select_all="SELECT * FROM clients WHERE client_id = $id";
        $query = $db->prepare($sql_select_all);
        $query->execute();
        $db = null;

        return $query->fetch();
    }

    function editClient($data) {
        $id = $data['client_id'];
        $fname = $data['fname'];
        $lname = $data['lname'];
        $phone = $data['phone'];
        $email = $data['email'];
        $db = openDatabaseConnection();
        $sql_edit_post = "UPDATE clients SET client_firstname = '$fname', client_lastname = '$lname', client_phone = $phone, client_email = '$email' WHERE client_id = $id";        
        $query = $db->prepare($sql_edit_post);
        $query->execute();
        $db = null;
    }

    function deleteClient($id) {
        $db = openDatabaseConnection();
        $sql_delete_id = "DELETE FROM clients WHERE client_id= $id";
        $query = $db->prepare($sql_delete_id);
        $query->execute();
        $db = null;
    }
?>
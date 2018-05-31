<?php

	require(ROOT . "model/ClientsModel.php");

	function index() {
		render("client/clients", array(
			"getClients" =>getClients()
		));	
	}

	function create() {
		getClients();
		render("client/create", array(
			"getClients" =>getClients()
		));
	}

	function createAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven
		createClient($_POST);
		header('Location: ' . URL . 'clients/index');
	}

	function edit($id) {
		$edit = getClient($id);
		// TODO: check if the person exists; if not then exit with errormessage (redirect)
		if ($edit == null) die('stuk');
		render("client/edit", $edit);
	}

	function editAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven

		editClient($_POST);
		header('Location: ' . URL . 'clients/index');
	}

	function delete($id) {
		deleteClient($id);
		header('Location: ' . URL . 'clients/index');
	}

?>
<?php

	require(ROOT . "model/PatientsModel.php");
	require(ROOT . "model/ClientsModel.php");
	require(ROOT . "model/SpeciesModel.php");

	function index() {
		render("patient/patients", array(
			"getPatients" =>getPatients()
		));
	}

	function create() {
		$data['species'] = getSpecies();
		$data['clients'] = getClients();

		render("patient/create", $data);
	}

	function createAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven
		createPatient($_POST);
		header('Location: ' . URL . 'patients/index');
	}

	function edit($id) {
		$data['species'] = getSpecies();
		$data['clients'] = getClients();
		$data['patient'] = getPatient($id);
		render("patient/edit", $data);
	}

	function editAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven

		editPatient($_POST);
		header('Location: ' . URL . 'patients/index');
	}

	function delete($id) {
		deletePatient($id);
		header('Location: ' . URL . 'patients/index');
	}

?>
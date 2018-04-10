<?php

	require(ROOT . "model/PatientsModel.php");

	function patients() {
		render("hospital/patients", array(
			"getPatients" =>getPatients()
		));

	}

	function create() {
		render("client/create");
	}

	function createAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven
		createBirthday($_POST);
		header('Location: ' . URL . 'hospital/index');
	}

	function edit($id) {
		$edit = getPerson($id);
		// TODO: check if the person exists; if not then exit with errormessage (redirect)
		if ($edit == null) die('stuk');
/* 
array (size=5)
  'id' => string '350' (length=3)
  'person' => string 'Quinten' (length=7)
  'day' => string '7' (length=1)
  'month' => string '12' (length=2)
  'year' => string '1999' (length=4)
*/

		render("client/edit", $edit);
	}

	function editAction() {
		// hier update uitvoeren 
		// functie aanroepen vanuit model en data als parameter aan modellaag meegeven

		editBirthday($_POST);
		header('Location: ' . URL . 'hospital/index');
	}

	function delete($id) {
		deleteBirthday($id);
		header('Location: ' . URL . 'hospital/index');
	}

?>
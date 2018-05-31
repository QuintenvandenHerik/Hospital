    <form action="<?= URL ?>patients/editAction" method="post">
    	<label>Specie:</label>
    	<select name="species_id">
			<?php
				foreach($species as $row) {
					if ($patient['species_id'] == $row["species_id"]) {
						printf("<option selected value='%s' name='species_id'>%s</option>", 
                		$row['species_id'], $row["species_description"]);
					}
					else {
						printf("<option value='%s' name='species_id'>%s</option>", 
                		$row['species_id'], $row["species_description"]);
					}
            	}
			?>
  		</select>
  		<label>Client:</label>
  		<select name="client_id">
			<?php
				foreach($clients as $row) {
					if ($patient['client_id'] == $row["client_id"]) {
					printf("<option selected value='%s' name='client_id'>%s %s | 0%s | %s</option>", 
                	$row['client_id'], $row["client_firstname"], $row["client_lastname"], $row["client_phone"], $row["client_email"]);
					}
					else {
					printf("<option value='%s' name='client_id'>%s %s | 0%s | %s</option>", 
                	$row['client_id'], $row["client_firstname"], $row["client_lastname"], $row["client_phone"], $row["client_email"]);
					}
            	}
			?>
  		</select>
  		<label>Name:</label>
        <input type="text" value="<?php echo $patient['patient_name']; ?>" name="name" required="" placeholder="name">
        <label>Status:</label>
        <input type="text" min="1" max="50" value="<?php echo $patient['patient_status']; ?>" name="status" required="" placeholder="status"> 
        <label>Gender:</label>
        <?php
        	if ($patient['patient_gender'] === "Male") {
        ?>
        		<input required type="radio" name="gender" id="maleGender" value="Male" checked>Male 
        		<input required type="radio" name="gender" id="femaleGender" value="Female">Female
        <?php
        	}
        	else {
        ?>
        		<input required type="radio" name="gender" id="maleGender" value="Male">Male 
        		<input required type="radio" name="gender" id="femaleGender" value="Female" checked>Female
        <?php
        	}
        ?>
        <input type="hidden" name="patient_id" value="<?php echo $patient['patient_id']; ?>">
        <input type="submit" name="submit" value="Edit birthday">
    </form>
    <form action="<?= URL ?>clients/editAction" method="post">
    	<label>Fname:</label>
        <input type="text" min="1" max="50" value="<?php echo $client_firstname; ?>" name="fname" required="" placeholder="firstname">
        <label>Lname:</label>
        <input type="text" min="1" max="50" value="<?php echo $client_lastname; ?>" name="lname" required="" placeholder="lastname">
        <label>Phone:</label>
        <input type="number" min="600000000" max="699999999" value="0<?php echo $client_phone; ?>" name="phone" required="" placeholder="phone">
        <label>E-mail:</label>
        <input type="text" min="1" max="255" value="<?php echo $client_email; ?>" name="email" required="" placeholder="e-mail">
        <input type="hidden" name="client_id" value="<?php echo $client_id; ?>">
        <input type="submit" name="submit" value="Edit client">
    </form>
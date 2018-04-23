    <form action="<?= URL ?>client/createAction" method="post">
        <input type="text" min="1" max="50" required="" name="firstname" placeholder="firstname">
        <input type="text" min="1" max="50" required="" name="lastname" placeholder="lastname">
        <input type="number" min="9" max="10" required="" name="phone" placeholder="phone">
        <input type="number" min="1" max="255" required="" name="email" placeholder="e-mail"> 
        <input type="submit" name="submit" value="Add birthday">
    </form>
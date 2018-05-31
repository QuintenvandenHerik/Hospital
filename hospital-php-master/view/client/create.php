    <h1>New Client</h1>
    <form action="<?= URL ?>clients/createAction" method="post">
        <input type="text" min="1" max="50" required="" name="firstname" placeholder="firstname">
        <input type="text" min="1" max="50" required="" name="lastname" placeholder="lastname">
        <input type="number" min="600000000" max="699999999" required="" name="phone" placeholder="phone">
        <input type="text" min="1" max="255" required="" name="email" placeholder="e-mail">
        <input type="submit" name="submit" value="Add client">
    </form>
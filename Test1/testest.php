<form method="post" action="registering.php">
    <div class="form-group">
        <label for="email">First Name: </label>
        <input type="text" class="form-control" id="email" name="fname">
    </div>
    <div class="form-group">
        <label for="email">Last Name: </label>
        <input type="text" class="form-control" id="email" name="lname">
    </div>
    <div class="form-group">
        <label for="email">Email: </label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="email">Password: </label>
        <input type="password" class="form-control" id="email" name="password">
    </div>
    <button type="submit" class="btn btn-default" name="login">Submit</button>
    <button type="button" onclick="location.href='login.php'" class="btn btn-default" name="login">Back</button>

</form>
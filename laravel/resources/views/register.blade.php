<form action="/UserController.php" method="POST">
  @csrf
  <div class="container">
    <h3>Register</h3>
    <label for="firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Prename" name="firstname" required>
    <br><br>
    <label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>
    <br><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br><br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
    <br><br>
    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" id="psw-repeat" required>
    <hr>
    <br><br>
    <label for="street"><b>Street</b></label>
    <input type="text" placeholder="Enter Street" name="street" required>
    <br><br>
    <label for="house_number"><b>House number</b></label>
    <input type="text" placeholder="Enter Housenumber" name="house_number" required>
    <hr>
    <br><br>
    <button type="submit">Register</button>
  </div>
  <br><br>
  <div class="container signin">
    <a href="login">Einloggen</a>
  </div>
</form>
</body>

</html>
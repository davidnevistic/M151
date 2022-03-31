<form action="/register" method="POST">
  @csrf
  <div class="container">
    <h3>Register</h3>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br><br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
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
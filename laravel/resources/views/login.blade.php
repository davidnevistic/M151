<form action="/login" method="POST">
    @csrf
    <div class="container">
        <h3>Login</h3>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <br><br>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br><br>
        <button class="submitButton" type="submit">Login</button>
        <br><br>
        <a href="register">Registrieren</a>
    </div>
</form>
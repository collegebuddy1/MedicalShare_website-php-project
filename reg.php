<!DOCTYPE html>
<html>
  <head>
    <title>Registration Screen</title>
    <link rel="stylesheet" href="css/registration.css">
  </head>
  <body>
    <div class="container">
      <h1>Registration</h1>
      <form>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <input type="submit" value="Register">

        <div class="register-link">
          <a href="#">Already have an account? Login here.</a>
        </div>
      </form>
    </div>
  </body>
</html>

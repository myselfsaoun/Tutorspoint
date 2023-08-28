<?php
 include('navbar.php');
?>
        <div class="login-box">
            <h1>Login</h1>
            <form action="./actions/login_action.php" method="POST">
              <label for="type">Who are you?</label>
              <select name="type" id="type">
                <option value="tutor">Tutor</option>
                <option value="gurdian">Gurdian</option>
              </select>
              <label>Email</label>
              <input type="email" name="email" placeholder="" />
              <label>Password</label>
              <input type="password" name="pass" placeholder="" />
              <input type="submit" value="Submit" />
            </form>
          </div>
          <p class="para-2">
            Not have an account? <a href="signup.php">Sign Up Here</a>
          </p>
    </div>
  </body>
</html>


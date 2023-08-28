<?php
 include('navbar.php');
?>
      <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="./actions/register_action.php" method="post">
          <label for="type">Who are you?</label>
          <select name="type" id="type">
            <option value="tutor">Tutor</option>
            <option value="gurdian">Gurdian</option>
          </select>
          <label>Full Name</label>
          <input type="text" placeholder="" name="name" />
          <label>Email</label>
          <input type="email" placeholder="" name="email"/>
          <label>Password</label>
          <input type="password" placeholder="" name="pass" />
          <label>Confirm Password</label>
          <input type="password" placeholder="" name="confirm-pass" />
          <input type="submit" value="Submit" />
        </form>
        <p>
          By clicking the Sign Up button,you agree to our <br />
          <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
      </div>
      <p class="para-2">
        Already have an account? <a href="login.html">Login here</a>
      </p>
  </div>
  </body>
</html>


<?php
 include('navbar.php');
 include('./actions/database.php');

 $user;
 $table = "";
 if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  if($_SESSION['type'] == "tutor"){
    $table = "tutors";
  }else{
    $table = "gurdians";
  }
  $user = mysqli_fetch_assoc(mysqli_query($conn, "select * from $table where email='$email'"));
 }
 
?>
        <div class="center">
            <h1>Welcome to Tutors Point</h1>
        </div>
        <div class="center2">
          <?php if( isset($_SESSION['email']) && $user){ ?>
            <h2>Welcome <?= $user['name'] ?></h2>
          <?php }else { ?>
            <h2>Register As A</h2>
            <div class="buttons">
        
                <button><a style="text-decoration: none ; color: aliceblue;" href="login.php">Tutor</a> </button>
                <button><a style="text-decoration: none ; color: aliceblue;" href="login.php">Gurdian</a> </button>
            </div>
          <?php } ?>
        </div>
      
    </div>
   

    <script src="../index.js"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
</body>

</html>
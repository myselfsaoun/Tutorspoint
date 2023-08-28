<?php
 include('navbar.php');
 include('./actions/database.php');

 $result = mysqli_query($conn, "select * from replies");
?>
        <div class="center">
            <div class="replies">
                <?php while($reply = mysqli_fetch_assoc($result)){ ?>
                <div class="reply">
                    <span><?= $reply['email'] ?></span>
                    <p><?= $reply['reply'] ?></p>
                </div>

                <?php } ?>
            </div>
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
<?php
 include('navbar.php');
?>
        <div class="center">
        <h4>Create a Post</h4>
        <form action="./actions/create_post_action.php" method="post">
          <label>Title</label>
          <input type="text" placeholder="" name="title" />
          <label>Desctiption</label>
          <textarea name="body" col="50"></textarea>
          <input type="submit" value="Submit" />
        </form>
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
<?php
 include('navbar.php');
 include('./actions/database.php');

 $result = mysqli_query($conn, "select * from posts");
?>
        <div class="center">
          <h1 id="fun"></h1>

            <div class="posts">
              <?php while($post = mysqli_fetch_assoc($result)){ ?>
                <h4><?= $post['title'] ?></h4>
                <span><?= $post['email'] ?></span>
                <p><?= $post['body'] ?></p>
                <form action="./actions/reply_action.php" method="POST">
                  <textarea name="reply" id="reply" cols="30" rows="2"></textarea>
                  <input name="post" type="hidden" value="<?= $post['id'] ?>">
                  <input type="submit" value="Reply">
                </form>
                <hr>
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

<script>
  const funEl = document.getElementById("fun");
  async function fun(){
    const result = await fetch("https://tech-blog-2.000webhostapp.com/fun.php");
    const text = await result.text();
    funEl.innerHTML = text;
  }
  fun();
</script>
</body>

</html>
<div class="aprank">
                <img src="<?php echo $togh["img"]?>" alt="img" height="45%" width="100%">
                <h2><?php echo $togh["title"]?></h2>
                <h3>Desc <?php echo $togh["price"]?></h3>
                <p><?php echo $togh["description"]?></p>
                <form action="ordered.php" method="post">
                <button value="<?php echo $togh["id"]?>" name="id">Buy</button>
                </form>
</div>
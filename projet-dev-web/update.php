<?php include("inc/header.inc.php"); ?>

<div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $rs[""] ?></h3>
            <div class="subheading mb-3"><?php echo $rs[""] ?></div>
            <p><?php echo $rs[""] ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $rs[""] ?></span>
          </div>
          <form method="post" action="update-form.php">
            <input type="hidden" name="" value="<?php echo $rs[""] ?>" />
            <input type="hidden" name="" value="<?php echo $rs[""] ?>" />
            <input type="hidden" name="" value="<?php echo $rs[""] ?>" />
            <input type="hidden" name="" value="<?php echo $rs[""] ?>" />
            <input type="hidden" name="" value="<?php echo $rs[""] ?>" />
            <!-- <a href="update-form.php" class="btn btn-primary">Modifier</a> -->
            <button type="submit" class="btn btn-primary" name="toUpdate">Modifier</button>
          </form>
</div>
<?php require_once("../includes/session.php") ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php $current_admin_page = "Manage content";  ?>
<?php include("../includes/layouts/admin_navigation.php"); ?>
<?php include("../includes/layouts/admin_header.php"); ?>
<?php is_loggedIn(); ?>

<?php $public = false; // Check the context  ?>
<?php get_selected_page($public); ?>


<?php include("../includes/layouts/admin_manage_navigation.php"); ?>

<?php echo show_error(); ?>
<?php echo message(); ?>

<section id="manage_content" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card text-center">
            <?php if($current_page){ ?>
              <div class="card-header bg-info">
                <h2><?php echo htmlentities($current_page["page_name"]) ;?></h2>
              </div>
              <div class="card-body">
                <p>

                Position: <?php echo $current_page["position"];  ?>
                <br/>
                Visible: <?php echo $current_page["visible"] == 1 ? 'Public' : 'Private'  ?>

                </p>
              </div>

                  <div class="card-body border border-danger">
                    Content:
                    <?php echo nl2br($current_page["content"]); ?>
                  </div>
                  <div class="card-footer">
                    <a class="btn btn-primary" href="edit_page.php?page=<?php echo $current_page["id"] ?>">
                      Edit Page
                    </a>
                  </div>

          <?php  } elseif($current_category){ ?>
            <div class="card-header bg-info">
              <h2><?php echo htmlentities($current_category["cat_name"]) ;?></h2>
            </div>
            <div class="card-body">
              Position: <?php echo $current_category["position"];  ?>
              <br/>
              Visible: <?php echo $current_category["visible"] == 1 ? 'Public' : 'Private'  ?>
            </div>
            <div class="card-footer">
              <a class="btn btn-success" href="edit_category.php?category=<?php echo $current_category["id"] ?>">
                Edit Category
              </a>
            </div>
          <?php }else{ ?>
            <div class="card-header bg-info">
              <h2><?php echo "Please choose Category / Page " ;?></h2>
            </div>
        <?php  } ?>
          </div>
        </div>
      </div>
    </div>
</section>

<?php include("../includes/layouts/admin_footer.php"); ?>

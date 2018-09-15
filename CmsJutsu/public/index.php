
  <?php require_once("../includes/db_connection.php");  ?>
  <?php require_once("../includes/functions.php"); ?>
    <!-- Header -->

    <?php include("../includes/layouts/header.php"); ?>


    <?php get_selected_page(); ?>

    <?php include("../includes/layouts/navigation.php"); ?>


      <!-- Main Section -->

      <section id="main" class="mt-5">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="card text-center">
                  <?php if($current_page){ ?>
                    <div class="card-header bg-info">
                      <h2><?php echo $current_page["page_name"] ;?></h2>
                    </div>
                    <div class="card-body">
                      <p>
                        <?php echo nl2br($current_page["content"]); ?>
                      </p>
                    </div>
                <?php }else{ ?>
                  <div class="card-header bg-info">
                    <h2><?php echo "Welcome" ;?></h2>
                  </div>
              <?php  } ?>
                </div>
              </div>
            </div>
          </div>
      </section>

      <!-- Footer  -->

      <?php
        include("../includes/layouts/footer.php");
      ?>

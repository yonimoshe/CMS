<!-- Navigation -->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="#">CmsJutsu</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav">
          <?php $results_cats = get_all_categories(); ?>
        <?php while($cat = mysqli_fetch_assoc($results_cats)) { ?>


          <?php $results_pages = get_pages_of($cat["id"]); ?>


          <li class="nav-item px-2 dropdown">
            <a href="index.html" class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo $cat["cat_name"]; ?></a>
            <div class="dropdown-menu">
              <?php while($page = mysqli_fetch_assoc($results_pages) ) {
                echo "<a ";
                if($current_page && $_GET["page"] === $page["id"]){
                  echo "class=\"dropdown-item active\" ";
                }else{
                    echo "class=\"dropdown-item\" ";
                }
                echo "href=\"index.php?page=" . urlencode($page["id"]) . '">';
                echo $page["page_name"];
                echo "</a>";
                ?>
            <?php } // close pages while ?>
            <?php mysqli_free_result($results_pages); ?>
            </div>
          </li>
        <?php  } // close categoiries while ?>

        <?php mysqli_free_result($results_cats); ?>


        </ul>
    </div>
  </nav>

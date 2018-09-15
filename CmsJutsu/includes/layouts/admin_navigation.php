<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
    <a class="navbar-brand" href="admin.php">Admin</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav">

            <?php
            // Static Navigation(Not from DB) for specific Admin Manage Pages
            //Use the variable $current_admin_page to detrmine the context- ,
            //The CURRENT page.It's  Just a diffrent Approch from check the get query.

            $navItems = [
            "Homepage"=>"index.php",
            "Manage content" => "manage_content.php",
            "Manage admins" => "manage_admins.php"
          ];

          //Check if current admin set otherwise set default active The Homepage for e.g
          $current_admin_page = isset($current_admin_page) ? $current_admin_page : "Homepage";

          foreach ($navItems as $navItem => $navLink) {
            echo "<li class=\"nav-item px-2\">";
            echo "<a ";
            if($current_admin_page == $navItem){
              echo "class=\"nav-link active\" ";
            }else{
                echo "class=\"nav-link\" ";
            }
            echo "href=\"{$navLink}\">";
            echo $navItem;
            echo "</a>";
            echo "</li>";
          }

            ?>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item px-2 dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"> <?php echo htmlentities($_SESSION["admin_firstName"]); ?> </i>
            </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">
                  <i class="fa fa-user-circle">Profile</i>
                </a>

                <a class="dropdown-item" href="#">
                  <i class="fa fa-cogs">Settings</i>
                </a>
              </div>
          </li>

          <li class="nav-item px-2">
            <a class="nav-link" href="logout.php">
              <i class="fa fa-user-times">Logout</i>
            </a>
          </li>

        </ul>
    </div>
  </nav>


<?php

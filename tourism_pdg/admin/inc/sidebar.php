    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">
      <ul class="nav nav-sidebar" data-nav-type="accordion">              

        <div class="sidebar-content" >
        <!-- User menu -->
          <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
              <div class="card-body text-center">
                <a href="#">
                  <img src="../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                </a>
                <h6 class="mb-0 text-white text-shadow-dark">
                  <?php 
                    if(isset( $_SESSION['username'])){
                      echo "Hello, ";
                      echo $username = $_SESSION['username'];
                    }
                    else{
                      echo "Hello, Visitor!"; 
                    }
                  ?>
                </h6>
                <span class="font-size-sm text-white text-shadow-dark">Indonesia</span>
              </div>

            </div>          
          </div>
        </div>

        <li class="nav-item nav-item-submenu">
          <li  class="nav-link">

            <a href="../index.php" class="nav-item"><i class="icon-home4" style="color: grey"></i>
              <span style="color: grey">User Access</span>
            </a>
            <ul class="nav nav-group-sub"></ul>
          </li>
        </li>

        <li class="nav-item nav-item-submenu">
          <li  class="nav-link">

            <a href="?page=home" class="nav-item"><i class="icon-list" style="color: grey"></i>
              <span style="color: grey">List Tourism</span>
            </a>
            <ul class="nav nav-group-sub"></ul>
          </li>
        </li>

        <li class="nav-item nav-item-submenu">
          <li  class="nav-link">

            <a href="?page=fasilitas" class="nav-item"><i class="icon-book" style="color: grey"></i>
              <span style="color: grey">Facility</span>
            </a>
            <ul class="nav nav-group-sub"></ul>
          </li>
        </li>

        <li class="nav-item nav-item-submenu">
          <li  class="nav-link">

            <a href="?page=pass_change" class="nav-item"><i class="icon-key" style="color: grey"></i>
              <span style="color: grey">Change Password</span>
            </a>
            <ul class="nav nav-group-sub"></ul>
          </li>
        </li> 

        <li class="nav-item nav-item-submenu">
          <li  class="nav-link">

            <a href="?page=user_management" class="nav-item"><i class="icon-user" style="color: grey"></i>
              <span style="color: grey">Manage User</span>
            </a>
            <ul class="nav nav-group-sub"></ul>
          </li>
        </li>  

        <li class="nav-item nav-item-submenu">
          <li  class="nav-link">

            <a href="../../" class="nav-item"><i class="icon-point-left" style="color: grey"></i>
              <span style="color: grey">Dashboard</span>
            </a>
            <ul class="nav nav-group-sub"></ul>
          </li>
        </li>              
        
      </ul> 

    </div>

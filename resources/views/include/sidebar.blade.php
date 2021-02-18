<!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-buffer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Setting</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-settings menu-icon"></i>
              </a>
              <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Foods Cetagory</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Employee Cetagory</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Employee Cetagory</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Employee</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-multiple menu-icon"></i>
              </a>
              <div class="collapse" id="employee">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Registration</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Product</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-food-fork-drink menu-icon"></i>
              </a>
              <div class="collapse" id="product">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Registration</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#vendor" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Vendor</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-ticket-account menu-icon"></i>
              </a>
              <div class="collapse" id="vendor">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Registration</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#daily_shopping" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Daily Shopping</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-ticket-account menu-icon"></i>
              </a>
              <div class="collapse" id="daily_shopping">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Add Daily Bill</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">All List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Order</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-ticket-account menu-icon"></i>
              </a>
              <div class="collapse" id="order">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Create Order</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Check List</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#food" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Food Menu</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-ticket-account menu-icon"></i>
              </a>
              <div class="collapse" id="food">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Add item</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Item List</a></li>
                </ul>
              </div>
            </li>
            
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
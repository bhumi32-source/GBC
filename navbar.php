<div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="../assets/images/logo.svg" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name">company_name</p>
          <p class="email">company@email.com</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="index.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="acc">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">account_circle</i>
                Accounts
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="acc">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Outstanding Payments
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Outstanding Receivables
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Total Payments Done 
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Pending Payments
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Pending Receivables
                    </a>
                  </div>
                </nav>
              </div>
            </div>


            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="inventory">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">business</i>
                Inventory
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="inventory">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Add product
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Add category
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      View products 
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="orders">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">shopping_cart</i>
                Orders
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="orders">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Inward
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Outward
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sales">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">attach_money</i>
                Sales
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sales">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Add clients
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Add prospects
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="purchase">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">shopping_basket</i>
                Purchase
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="purchase">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Add vendors
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Add products to vendors
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="customers">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">group</i>
                Customers
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="customers">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Contact management
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Oppurtunity tracking
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Task management
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Communication tracking
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">store</i>
                Vendors
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="purchase_orders">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">receipt</i>
                Purchase orders
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="purchase_orders">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Print invoice
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="reports">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                Reports
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="reports">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                     Monthly sales report
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Monthly purchase
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Monthly total inward 
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Monthly total outward
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Invoice list
                    </a>
                  </div>
                </nav>
              </div>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="users">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">devices</i>
                Users
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="users">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="">
                      Add users
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href=""">
                      Manage users
                    </a>
                  </div>
                </nav>
              </div>
            </div>

        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="javascript:;">Logout</a>
        </div>
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Greetings Clyde!</span>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <i class="material-icons mdc-text-field__icon">search</i>
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                  <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../assets/images/faces/face1.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">user_name</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Edit profile</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-settings"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-alert-circle-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Settings</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-progress-download text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Update</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-bell"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-email-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You received a new message</h6>
                      <small class="text-muted"> 6 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-account-outline"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">New user registered</h6>
                      <small class="text-muted"> 15 min ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-alert-circle-outline"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">System Alert</h6>
                      <small class="text-muted"> 2 days ago </small>
                    </div>
                  </li> 
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                      <i class="mdi mdi-update"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">You have a new update</h6>
                      <small class="text-muted"> 3 days ago </small>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-email"></i>
                <span class="count-indicator">
                  <span class="count">3</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="../assets/images/faces/face4.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                      <small class="text-muted"> 1 Minutes ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="../assets/images/faces/face2.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                      <small class="text-muted"> 15 Minutes ago </small>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail">
                      <img src="../assets/images/faces/face3.jpg" alt="user">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                      <small class="text-muted"> 18 Minutes ago </small>
                    </div>
                  </li>                
                </ul>
              </div>
            </div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <i class="mdi mdi-arrow-down-bold-box"></i>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-lock-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Lock screen</h6>
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-logout-variant text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <h6 class="item-subject font-weight-normal">Logout</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--success">
                  <div class="card-inner">
                    <h5 class="card-title">Total Earnings</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$62,0076.00</h5>
                    <p class="tx-12 text-muted">48% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">dvr</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--danger">
                  <div class="card-inner">
                    <h5 class="card-title">Pending Payments</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$1,958,104.00</h5>
                    <p class="tx-12 text-muted">55% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">attach_money</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--primary">
                  <div class="card-inner">
                    <h5 class="card-title">Inquiry Follow-ups</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$234,769.00</h5>
                    <p class="tx-12 text-muted">87% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">trending_up</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card info-card info-card--info">
                  <div class="card-inner">
                    <h5 class="card-title">Product Updates</h5>
                    <h5 class="font-weight-light pb-2 mb-1 border-bottom">$1,200.00</h5>
                    <p class="tx-12 text-muted">87% target reached</p>
                    <div class="card-icon-wrapper">
                      <i class="material-icons">credit_card</i>
                    </div>
                  </div>
                </div>
              </div>
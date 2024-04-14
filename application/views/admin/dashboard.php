<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="styles.css"> -->

    <!-- <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/style.css"> -->
    <style>
body {
    margin: 0;
    padding: 0;
    background-color: #1d2634;
    color: #9e9ea4;
    font-family: 'Montserrat', sans-serif;
  }
  
  .material-icons-outlined {
    vertical-align: middle;
    line-height: 1px;
    font-size: 35px;
  }
  
  .grid-container {
    display: grid;
    grid-template-columns: 260px 1fr 1fr 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      'sidebar header header header'
      'sidebar main main main';
    height: 100vh;
  }
  
  /* ---------- HEADER ---------- */
  .header {
    grid-area: header;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 30px 0 30px;
    box-shadow: 0 6px 7px -3px rgba(0, 0, 0, 0.35);
  }
  
  .menu-icon {
    display: none;
  }
  
  /* ---------- SIDEBAR ---------- */
  
  #sidebar {
    grid-area: sidebar;
    height: 100%;
    background-color: #263043;
    overflow-y: auto;
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
  }
  
  .sidebar-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 30px 30px 30px;
    margin-bottom: 30px;
  }
  
  .sidebar-title > span {
    display: none;
  }
  
  .sidebar-brand {
    margin-top: 15px;
    font-size: 20px;
    font-weight: 700;
  }
  
  .sidebar-list {
    padding: 0;
    margin-top: 15px;
    list-style-type: none;
  }
  
  .sidebar-list-item {
    padding: 20px 20px 20px 20px;
    font-size: 18px;
  }
  
  .sidebar-list-item:hover {
    background-color: rgba(255, 255, 255, 0.2);
    cursor: pointer;
  }
  
  .sidebar-list-item > a {
    text-decoration: none;
    color: #9e9ea4;
  }
  
  .sidebar-responsive {
    display: inline !important;
    position: absolute;
    /*
      the z-index of the ApexCharts is 11
      we want the z-index of the sidebar higher so that
      the charts are not showing over the sidebar 
      on small screens
    */
    z-index: 12 !important;
  }
  
  /* ---------- MAIN ---------- */
  
  .main-container {
    grid-area: main;
    overflow-y: auto;
    padding: 20px 20px;
    color: rgba(255, 255, 255, 0.95);
  }
  
  .main-title {
    display: flex;
    justify-content: space-between;
  }
  
  .main-cards {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 20px;
    margin: 20px 0;
  }
  
  .card {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 25px;
    border-radius: 5px;
  }
  
  .card:first-child {
    background-color: #2962ff;
  }
  
  .card:nth-child(2) {
    background-color: #ff6d00;
  }
  
  .card:nth-child(3) {
    background-color: #2e7d32;
  }
  
  .card:nth-child(4) {
    background-color: #d50000;
  }
  
  .card-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .card-inner > .material-icons-outlined {
    font-size: 45px;
  }
  
  .charts {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 60px;
  }
  
  .charts-card {
    background-color: #263043;
    margin-bottom: 20px;
    padding: 25px;
    box-sizing: border-box;
    -webkit-column-break-inside: avoid;
    border-radius: 5px;
    box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
  }
  
  .chart-title {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  /* ---------- MEDIA QUERIES ---------- */
  
  /* Medium <= 992px */
  
  @media screen and (max-width: 992px) {
    .grid-container {
      grid-template-columns: 1fr;
      grid-template-rows: 0.2fr 3fr;
      grid-template-areas:
        'header'
        'main';
    }
  
    #sidebar {
      display: none;
    }
  
    .menu-icon {
      display: inline;
    }
  
    .sidebar-title > span {
      display: inline;
    }
  }
  
  /* Small <= 768px */
  
  @media screen and (max-width: 768px) {
    .main-cards {
      grid-template-columns: 1fr;
      gap: 10px;
      margin-bottom: 0;
    }
  
    .charts {
      grid-template-columns: 1fr;
      margin-top: 30px;
    }
  }
  
  /* Extra Small <= 576px */
  
  @media screen and (max-width: 576px) {
    .hedaer-left {
      display:none;
  }
  }
  
    </style>
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <!-- <span class="material-icons-outlined">search</span> -->
        </div>
        <div class="header-right">
        
          <a href="<?php echo base_url('index.php/admin/logout'); ?>" class="btn btn-danger">Logout</a>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand" style="color:white">
            <span class="material-icons-outlined">shopping_cart</span> ADMIN PANEL
          </div>
          <span class="material-icons-outlined" onclick="closeSide5bar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">dashboard</span>Dashboard
            </a>
          </li>

          <li class="sidebar-list-item">
          <a href="#" id="createUserLink">
              <span class="material-icons-outlined">inventory_2</span> Create User
            </a>
          </li>
          
          <li class="sidebar-list-item">
          <a href="#" id="listUserLink">
              <span class="material-icons-outlined">category</span> List User
            </a>
          </li>
         
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2 style="color:black">DASHBOARD</h2>
        </div>
      </main>
      <!-- End Main -->

    </div>

  
    ...

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
$(document).ready(function() {
    $('#createUserLink').click(function(e) {
        e.preventDefault();
        // Load create.php content into the main-container
        $('.main-container').load('<?php echo base_url('index.php/user/create'); ?>');
    });

    $('#listUserLink').click(function(e) {
        e.preventDefault();
        // Load list.php content into the main-container
        $('.main-container').load('<?php echo base_url('index.php/user/index'); ?>');
    });
});
</script>

</body>
</html>


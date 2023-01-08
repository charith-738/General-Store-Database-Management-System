<html>
  <head>
    <title>Sai Krishna Store</title>
    <meta name="viewport" content="width=device-width,initial scale=1.0" />
    <?php include "links.php" ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="main.php"><img src="img/logo2.png" alt="" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="customer.php"><h5><b>Customer Details</b></h5></a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="distributor.php"><h5><b>Distributor Details</b></h5></a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="product.php"><h5><b>Product Details</b></h5></a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="transaction.php"><h5><b>Transaction</b></h5></a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="bill.php"><h5><b>Bill Counter</b></h5></a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="profile.php"><h5><b>Profile</b></h5></a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="logout.php" class="btn btn-dark btn-lg">Logout</a>
          </form>
        </div>
      </div>
    </nav>
    <?php
      include ('book_sc_fns.php');
      // The shopping cart needs sessions, so start one
      session_start();
      if (!isset($_SESSION['Emp_id'])) {
        echo '<script>alert("You are logged out.");</script>';
        echo '<script>location.replace("login.php");</script>';
      }
      
      do_html_header("<center><h3><b>Welcome To Sai Krishna General Stores</b></h3></center>");

      echo "<h5><b>Please Choose a Category:</b></h5>";

      // get categories out of database
      $cat_array = get_categories();

      // display as links to cat pages
      display_categories($cat_array);

      do_html_footer();
    ?>
  </body>
</html>
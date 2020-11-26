<?php
include('includes/_config.php');
$page_title = "List of Our Customers";

  // list all the customers
  $sql = 'SELECT * FROM customer';

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<head>
  <?php include("includes/partials/head.php"); ?>
</head>
<body>
	<div id="wrapper">
      <?php include("includes/partials/header.php"); ?>
      <main>
        <h1><?php echo $page_title ?></h1>
        <?php foreach($customers as $customer) { ?>
          <li>Full name: <a href="customer.php?id=<?php echo $customer['id']; ?>">
          <?php echo $customer['last_name'].", ".$customer['first_name']?></a></li>
          <li>Phone: <?php echo $customer['phone'] ?> </li>
          <li>Email: <?php echo $customer['email']; ?></li>
          <div>------</div>
        <?php } ?>
        
      </main>
      <?php include("includes/partials/footer.php"); ?>
  </div>
</body>
</html>
<?php
include('includes/_config.php');
$page_title = "Customer";

if (isset($_GET['id']) && (int)$_GET['id'] > 0 && (int)$_GET['id'] < 6) {

  // list individual customer
  $sql = 'SELECT * FROM customer WHERE id = '.$_GET['id'];

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $content = 'single.php';
}else {
  $content = 'includes/error.php';
}

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
      
        <?php include($content); ?>
      
      <div>
        <a href="index.php"><-- Back to List of Customers</a>
      </div>

    </main>

    <?php include("includes/partials/footer.php"); ?>

  </div>
</body>
</html>
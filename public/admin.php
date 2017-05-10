<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "admin1";
  $dbpass = "admin1";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: ");
  }?>
<?php require_once("../includes/functions.php"); ?>
<?php
// 2. Perform database query
$query  = "SELECT * ";
$query .= "FROM subjects ";
//$query .= "WHERE visible = 1 ";
$query .= "ORDER BY position ASC";
$result = mysqli_query($connection, $query);
// Test if there was a query error
if (!$result) {
  die("Database query failed.");
}
?>
<?php include("../includes/layouts/header.php"); ?>

<div id="main">
  <div id="navigation">
    <ul class = "subjects">
      <?php
  			// 3. Use returned data (if any)
  			while($subject = mysqli_fetch_assoc($result)) {
          // output data from each row
          ?>

          <li><?php echo $subject["menu_name"]; ?></li>


  	<?php } ?>
    </ul>
  </div>
  <div id="page">
    <h2>Admin Menu</h2>
    <p>Welcome to the admin area.</p>
    <ul>
      <li><a href="manage_content.php">Manage Website Content</a></li>
      <li><a href="manage_admins.php">Manage Admin Users</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>

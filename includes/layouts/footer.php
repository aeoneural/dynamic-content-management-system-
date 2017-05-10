    <div id="footer">Copyright <?php echo date("Y"); ?>, Aygerim Sauletkhan
    <br> Senior Design Project (Widget Fictional Corp) - North American University
  </div>


	</body>
</html>
<?php
  // 5. Close database connection
	if (isset($connection)) {
	  mysqli_close($connection);
	}
?>

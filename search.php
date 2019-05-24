<?php

$connect = mysqli_connect("localhost", "root", "12345", "world");

if(isset($_POST['query'])) {
	$query = "SELECT * FROM country WHERE name LIKE '%".$_POST['query']."%'";
	$result = mysqli_query($connect, $query);
	?>
	<ul class="list-unstyled">
		<?php if(mysqli_num_rows($result) > 0): ?>
			<?php while($row = mysqli_fetch_array($result)): ?>
				<li><?php echo $row['name']; ?></li>
			<?php endwhile; ?>
		<?php else: ?>
			<li>No country found!</li>
		<?php endif; ?>
	</ul>
	<?php
}
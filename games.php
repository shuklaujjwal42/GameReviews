<?php

$page_title = "Games";

require_once ('includes/header.php');
require_once ('includes/database.php');

//select statement
$query_str = "SELECT * FROM games";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	<div class="container wrapper">

		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Games</li>
		</ul>

		<h1 class="text-center">Games</h1>

		<div class="row">
			<div class="col-xs-4 col-xs-offset-8">
				<form action="searchgames.php" method="get" class="form-inline search-form" role="form">
					<div class="input-group">
						<label class="sr-only" for="gameSearch">Search Games</label>
						<div class="input-group-addon"><i class="fa fa-search fa-lg"></i></div>
						<input type="text" name="game" placeholder="Search" id="gameSearch" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary">Go!</button>
				</form>
			</div>
		</div>


		<div class="game-list">
			<?php
			$i = 0;
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
				<?php endif; ?>
				<div class="col-xs-4">
					<div class="thumbnail">
						<div class="caption">
							<div class="text-center">
								<a href="gamedetails.php?id=<?php echo $result_row['game_id']?>">
									<img src="<?php echo $result_row['game_img'] ?>" />
								</a>
							</div>
							<h3 class="text-center">
								<?php
								echo "<a href='gamedetails.php?id=" . $result_row['game_id'] . "'>", $result_row['game_name'], "</a>";
								?>
							</h3>
						</div>
					</div>
				</div>
				<?php if ($i == 3) : ?>
				</div>
				<?php $i=0; endif; endwhile; ?>
		</div>
	</div>
	<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>
<?php 
include 'includes/book.php'; 
$books[0]->buy();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lab 9: The Bookworm Store</title>
		<link rel="stylesheet" href="css/bookworm-style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<header>
			<h1>THE BOOKWORM STORE</h1>
			<nav>
				<a href="index.php">HOME</a>
			</nav>
    	</header>

    	<section>
      		<div>
		        <h2>The BookWorm Store</h2>
		        <h4>I'm not a <span class="emphasized">bookworm</span>, I'm an <span class="emphasized">escape artist</span>.</h4>
  			</div>

  			<h4 class="decorated"><span><span class="emphasized">The Hunger Games</span></span></h4>

	  		<div id="content">
			  <?php foreach ($books as $book) { ?>

	  				<div class="column">
	  					<img src=" <?= $book->image;?> " style="width:60%">
	  					<h5> <?= $book->title;?> </h5>
	  					<h5> <?= $book->author;?> </h5>
	  					<!-- SHOW STAR RATINGS -->
						<?= $book->showRatingStars() ?>
	  					<h5><span class="emphasized"> <?= $book->checkInStock() ?> </span>
						<h5> <?= $book->price;?> </h5>
	  				</div>
					<?php } ?>
			</div>
    	</section>
	</body>
</html>

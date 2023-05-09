<?php
// Include the header and menu files
include('header.php');
include('menu.php');
?>
<body>
	<?php include 'header.php'; ?>

	<div class="container">
		<h1>ChatGPT Search Results</h1>
		<div class="results">
			<?php
// chatgpt_search_result.php

if(isset($_GET['query']) && isset($_GET['results'])) {
  $query = $_GET['query'];
  $results = json_decode($_GET['results'], true);

  // Display the query and results
  echo "<h1>Search Results for \"$query\"</h1>";
  foreach($results as $result) {
    echo "<h3>".$result['text']."</h3>";
    echo "<p>Score: ".$result['score']."</p>";
    echo "<p><a href='".$result['url']."' target='_blank'>".$result['url']."</a></p>";
  }
}
?>

		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>
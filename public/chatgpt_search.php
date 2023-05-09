<?php
// chatgpt_search.php

if(isset($_POST['query'])) {
  $query = $_POST['query'];
  $api_key = "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"; // Replace with your OpenAI API key

  $url = "https://api.openai.com/v1/engines/davinci/search";
  $headers = array(
    "Content-Type: application/json",
    "Authorization: Bearer " . $api_key
  );
  $data = array(
    "documents" => array(),
    "query" => $query,
    "max_rerank" => 10,
    "return_metadata" => false,
  );
  $data_string = json_encode($data);

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  curl_close($ch);

  $json = json_decode($result, true);

  $results = array();
  foreach($json['data'] as $data) {
    $results[] = array(
      "text" => $data['text'],
      "score" => $data['score'],
      "url" => $data['metadata']['url']
    );
  }

  // Pass the results to chatgpt_search_result.php to display
  header("Location: chatgpt_search_result.php?query=".urlencode($query)."&results=".urlencode(json_encode($results)));
  exit();
}
?>

<?php
// Include the header and menu files
include('header.php');
include('menu.php');
?>
<div class="container-fluid main-content">
<head>
  <meta charset="UTF-8">
  <title>ChatGPT Search</title>
</head>
<body>
  <h1>GPT4 Search</h1>
  <form method="post">
    <label for="query">Enter your query:</label><br>
    <input type="text" id="query" name="query" required><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</div>
	<?php include 'footer.php'; ?>
</html>

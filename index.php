<!DOCTYPE html>
<html>
<head>
	<title>Neil's Medicines</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
function search() {
  var query = document.getElementById("searchbox").value;
  if (query == "") {
    document.getElementById("result").innerHTML = "Please enter a drug name.";
    return;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "search.php?q=" + query, true);
  xhttp.send();
}
</script>
</head>
<body>
	<h1>Neil's Medicines</h1>
	<form method="post" action="search.php">
		<label for="drug-name">Drug Name:</label>
		<input type="text" id="drug-name" name="drug-name">
		<button type="submit">Search</button>
	</form>
	<div id="drug-info"></div>
</body>
</html>


<html>
<head>
<title> Submit Blog </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type=text/css href="X.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"/>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="x-light-grey">

<header class="x-container x-center x-dark-grey x-padding-32"> 
  <h1><b>SUBMIT NEW BLOG</b></h1>
 
</header> 

<div class="x-row">
<div class="x-col l12 s12">
 <div class="x-card-4 x-margin x-light-grey">
 <div class="x-container">
 
<form action=”insert.php” method=”post”>
<h3>
<div class="x-container">

POST TITLE:<br>
<input type=”text” id=”posttitle” name=”blogtitle” style="width:100%"/><br><br>
</div>

<div class="x-container">
CONTENT:<br>
<textarea id=”content” name=”content” style="width:100%" rows=5></textarea><br><br>
</div>

<div class="x-container">
AUTHOR NAME: <br>
<input type=”text” id=”authorname” name=”authorname” style="width:100%"><br><br>
</div>

<div class="x-container">
IMAGES: (Enter link to image) <br>
<input type="url" id="img" name="img" style="width:100%"><br><br>
</div>

<div class="x-container">
  <input type="submit" name="submit" value="SUBMIT"> <br>
</div>

</div>
</div>
</h3>
</form>
</div>
</div>

</body>
</html>

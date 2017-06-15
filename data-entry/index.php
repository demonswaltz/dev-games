<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title>Dev Game Data Entry Form... of Doom</title>
</head>
<body>
 <h1>To input a game please use the below form</h1>
 <p>The steps below need to be followed exactly :-)</p>
  <ul>
  <li><b>Game ID:</b><i> Enter the color and number of card you are adding</i> 
 	<ul>
  	<li>Color Codes are as follows:</li>
  		<ul>
  		<li>b=blue</li>
  		<li>o=orange</li>
  		<li>i=pink</li>
  		<li>u=purple</li>
  		<li>y=yellow</li>
  		</ul>
  	<li>There are no spaces in the game id and all letters are <b>LOWERCASE</b></li>	
	</ul> 
  </li>
  <li>Right click on the image in the publisher file and selected "save image as", you are then going to save it childrens common files under "K:\Developmental Game Cards\images" naming it the same as the game id (color code and number all lowercase no spaces!) please make sure it is saving as a png</li>
  <li><b>Name:</b><i> Title is copied off the top of the card</i></li>
  <li><b>Description:</b><i> Description is copied from the text box on the card</i></li>
  <li><b>User ID:</b><i> Your user id is the 4 digit pin number that you've picked</i> </li>
</ul> 
<form method="post" action="process.php">
<label>Game ID</label>
<input type="text" name="game_id" />
<br />
<label>Name</label>
<input type="text" name="game_name"  />
<br />
<label>Description</label>
<textarea rows="4" cols="50" name="description" > </textarea>
<br />
<label>User ID</label>
<input type="text" name="user"  />
 
<br />
<input type="submit" value="Add Game">
</form>
 
 
 
</body>
</html>
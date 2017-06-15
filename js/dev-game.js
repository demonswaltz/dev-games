var i=0;
while(i<DATA.length){
	var gameImage =  HTMLGamePic.replace("%data%",DATA[i].game_id);
	var gameTitle = HTMLGameTitle.replace("%data%", DATA[i].game_name);
	var gameDesc = HTMLDesc.replace("%data%", DATA[i].description);
	var button_id= DATA[i].game_id[0];
	var button = DATA[i].game_id;
	var button_num = button.substring(1,);
	
	console.log(button_id);
	if (button_id === "o")
		gameButtonColor= HTMLbutton.replace("%color%", "orange");
	else if (button_id === "b")
		gameButtonColor= HTMLbutton.replace("%color%", "blue");
	else if (button_id === "y")
		gameButtonColor= HTMLbutton.replace("%color%", "yellow");
	else if (button_id === "u")
		gameButtonColor= HTMLbutton.replace("%color%", "purple");
	else if (button_id === "i")
		gameButtonColor= HTMLbutton.replace("%color%", "pink");
	else if (button_id === "t")
		gameButtonColor= HTMLbutton.replace("%color%", "black");
	gameDot=gameButtonColor.replace("%data%", button_num);		
	//var gameButton=
	var webpage = gameImage.concat(gameTitle, gameDesc, gameDot); //add all elements to the webpage
	$("#website").append(webpage); //adds html elements to index.html
	webpage = '';
	i++;

	};


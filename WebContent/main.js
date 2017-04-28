var x,noWinner,turnCounter,ressetBtn,randomNumber,playerTurn,stop,scorecount;

function startGame()
{
	x=document.getElementById("message");
	ressetBtn=document.getElementById("ressetGame");
	stop=false;
	
	noWinner=false;
	turnCounter=0;
	
	document.turn="X";
	changeMoveColors(document.turn);
}

function changeMoveColors(move)
{
	var x=document.getElementById("xR");
	var y=document.getElementById("yR");
	
	if(move=="X")
	{
		x.style.backgroundColor='orange';
		y.style.backgroundColor='white';
	}
	else if(move=="O")
	{
		x.style.backgroundColor='white';
		y.style.backgroundColor='orange';
	}	
}

function nextMove(square)
{
		turnCounter++;
		
		if(!checkForWinner(document.turn) && square.innerText=="")
		{
			square.innerText= document.turn;
			
			switchTurn();	
			cpuNextMove();
		}	
}

function cpuNextMove()
{
	turnCounter++;
	
	searchTile();
	
	cpuLogic();	
}

function searchTile()
{
	for(var i=1;i<10;i++)
	{
		if(document.getElementById("s"+i).innerText=="")
		{
			randomNumber=i;
		}
	}	
}

function switchTurn()
{
	checkForEquality();
	
	if(checkForWinner(document.turn))
	{
		x.style.visibility='visible';
		x.innerText="WINNER IS "+"'"+document.turn+"'!\n TURN:"+turnCounter;
		
		ressetBtn.style.visibility='visible';
	}
	else if(noWinner)
	{
		x.style.visibility='visible';
		x.innerText="EQUALITY!";
		
		ressetBtn.style.visibility='visible';
	}	
	else
	{
		if(document.turn=="X")
		{
			document.turn="O";
			changeMoveColors(document.turn);
		}
		else{
			document.turn="X";
			changeMoveColors(document.turn);
		}

	}
	
}

function checkForWinner(move)
{
	var result=false;
	if( checkRow(1,2,3,move) ||
		checkRow(4,5,6,move) ||
		checkRow(7,8,9,move) ||
		
		checkRow(1,4,7,move) ||
		checkRow(2,5,8,move) ||
		checkRow(3,6,9,move) ||
		
		checkRow(1,5,9,move) ||
		checkRow(3,5,7,move)
	)
	{
		result=true;
	}
	
	return result;
}

function checkForEquality()
{
	if(!getBox(1)=="" && !getBox(2)=="" && !getBox(3)=="" &&
	   !getBox(4)=="" && !getBox(5)=="" && !getBox(6)=="" &&
       !getBox(7)=="" && !getBox(8)=="" && !getBox(9)=="" 
	)
	{
		noWinner=true;
	}
}

function checkRow(a , b, c, move)
{
	var result=false;
	
	if(getBox(a)==move && getBox(b)==move && getBox(c)==move)
	{
		if(move=="X")
		{
			colorBox(a).style.backgroundColor='#f25d26';
			colorBox(b).style.backgroundColor='#f25d26';
			colorBox(c).style.backgroundColor='#f25d26';
		}	
		else
		{
			colorBox(a).style.backgroundColor='#6172b7';
			colorBox(b).style.backgroundColor='#6172b7';
			colorBox(c).style.backgroundColor='#6172b7';
		}	
		
		 result=true;
	}
	return result;
}

function getBox(number)
{
	return document.getElementById("s"+number).innerText;
}

function colorBox(number)
{
	return document.getElementById("s"+number);
}

function btnResset()
{
	for(var i=1;i<10;i++)
	{
		document.getElementById("s"+i).innerText="";
		colorBox(i).style.backgroundColor="#ffffff"
		
	}
	x.style.visibility='hidden';
	ressetBtn.style.visibility='hidden';
	
	turnCounter=0;
	noWinner=false;
	
}

function cpuLogic()
{
	if(!getBox(1)=="" && !getBox(2)=="" && getBox(3)=="")
	{
		document.getElementById("s"+3).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(4)=="" && !getBox(5)=="" && getBox(6)=="")
	{
		document.getElementById("s"+6).innerText=document.turn;
		switchTurn();
	}
	else if(getBox(1)=="" && !getBox(2)=="" && !getBox(3)=="")
	{
		document.getElementById("s"+1).innerText=document.turn;
		switchTurn();
	}
	else if(getBox(4)=="" && !getBox(5)=="" && !getBox(6)=="")
	{
		document.getElementById("s"+4).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(1)=="" && getBox(2)=="" && !getBox(3)=="")
	{
		document.getElementById("s"+2).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(4)=="" && getBox(5)=="" && !getBox(6)=="")
	{
		document.getElementById("s"+5).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(1)=="" && !getBox(4)=="" && getBox(7)=="")
	{
		document.getElementById("s"+7).innerText=document.turn;
		switchTurn();
	}
	
	else if(getBox(1)=="" && !getBox(4)=="" && !getBox(7)=="")
	{
		document.getElementById("s"+1).innerText=document.turn;
		switchTurn();
	}
	else if(getBox(2)=="" && !getBox(5)=="" && !getBox(8)=="")
	{
		document.getElementById("s"+2).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(1)=="" && getBox(4)=="" && !getBox(7)=="")
	{
		document.getElementById("s"+4).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(2)=="" && getBox(5)=="" && !getBox(8)=="")
	{
		document.getElementById("s"+5).innerText=document.turn;
		switchTurn();
	}
	else if(getBox(1)=="" && !getBox(5)=="" && !getBox(9)=="")
	{
		document.getElementById("s"+1).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(1)=="" && getBox(5)=="" && !getBox(9)=="")
	{
		document.getElementById("s"+5).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(3)=="" && !getBox(5)=="" && getBox(7)=="")
	{
		document.getElementById("s"+7).innerText=document.turn;
		switchTurn();
	}
	else if(getBox(3)=="" && !getBox(5)=="" && !getBox(7)=="")
	{
		document.getElementById("s"+3).innerText=document.turn;
		switchTurn();
	}
	else if(!getBox(3)=="" && getBox(5)=="" && !getBox(7)=="")
	{
		document.getElementById("s"+5).innerText=document.turn;
		switchTurn();
	}
	else
	{
		if(!checkForWinner(document.turn))
		{
			document.getElementById("s"+randomNumber).innerText=document.turn;
			switchTurn();
		}
	}	
}











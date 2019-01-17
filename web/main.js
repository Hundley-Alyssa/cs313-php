function button1(){
	alert ("Clicked!");
}


function colorButton(){

	// var colorText = "colorInput";
	// var color = document.getElementById(colorText);

	// var divColor = "one";
	// var currentDiv = document.getElementById(divColor);

	// var x = color.value;

	// currentDiv.Color.style.backgroundColor = x;


	var color = document.getElementById("colorInput").value;

	var currentDiv = document.getElementById("one");

	currentDiv.style.backgroundColor = color;


}
// From Chris Smith's "All Form Elements" pen: https://codepen.io/chris22smith/pen/pymBWL


function printValue(sliderID, textbox) {
	 var x = document.getElementById(textbox);
	 var y = document.getElementById(sliderID);
	 x.value = y.value;
}

window.onload = function() { 
	printValue('rangeSlider', 'rangeValue');
}
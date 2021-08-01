/****************************************************************************************
 REFERENCE:
 Free Script by Mark Wilton-Jones, 13/9/2001
*****************************************************************************************
Please see http://www.howtocreate.co.uk/jslibs/ for details and a demo of this script
Please see http://www.howtocreate.co.uk/jslibs/termsOfUse.html for terms of use
_______________________________________________________________________________________*/

var contin = new Array(); //each cell will hold an array of all the countries in a continent
var numincont = new Array(0,58,1,51,24,49,36,14); //number of countries in each continent
//prepare the continent arrays
for( var z = 1; z < numincont.length; z++ ) { contin[z] = new Array(); }
//tell it to set up the select menu when the page loads
window.onload = myprep;

function myprep() {
	//Because Netscape 4 will act strangely on reloading . . .
	if( document.mainform.country_name.options.length < 60 ) { self.location.reload(); }
	//now that the document has fully loaded, take out all of the countries and put them into
	//an array representing that continent (the continent arrays)
	var y = 1; //y = number of options to bypass at the start - 1
	for( var z = 1; z < numincont.length; z++ ) {
		//each continent in turn. start at 1 because options[0] is 'Please select one'
		for( x = 1; x <= numincont[z]; x++ ) {
			//insert countries into arrays
			contin[z][x] = new Option(document.mainform.country_name.options[x+y].text,document.mainform.country_name.options[x+y].value);
		}
		//offset by the number we have already done
		y += numincont[z] + 1; //the 1 allows for the '       ------ continent name ------' options
	}
	refillme();
}

function refillme() {
	//erase the select menu then refill it with all countries from the selected continent
	//the reason I deconstruct then reconstruct is to allow non JavaScript browsers to work
	while( document.mainform.country_name.options.length ) { document.mainform.country_name.options[0] = null; }
	if( document.mainform.continent_name.selectedIndex ) {
		//they have selected a continent. insert a 'Please select one' option
		document.mainform.country_name.options[0] = new Option("Select country","");
		for( var z = 1; z < contin[document.mainform.continent_name.selectedIndex].length; z++ ) {
			//for the selected continent, put in each country_name
			document.mainform.country_name.options[z] = contin[document.mainform.continent_name.selectedIndex][z];
		}
		//give them an 'Other' option and enable the select menu (if it was disabled)
		//document.mainform.country_name.options[z] = new Option("Other (please use the box below)","Other");
		document.mainform.country_name.disabled = false;
	} else {
		//wait for them to select a continent
		document.mainform.country_name.options[0] = new Option("Please select continent","");
		document.mainform.country_name.disabled = true;
	}
	document.mainform.country_name.options[0].selected = true;
	document.mainform.other.disabled = true;
}

function ableother() {
	//If they have selected "other", enable the "other" box
	if( document.mainform.country_name.options.length > 1 && document.mainform.country_name.selectedIndex == document.mainform.country_name.options.length - 1 ) {
		document.mainform.other.disabled = false;
	} else {
		document.mainform.other.disabled = true;
	}
}

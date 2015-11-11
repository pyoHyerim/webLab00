"use strict"
window.onload = function () {
    var stack = [];
    var displayVal = "0";
    for (var i in $$('button')) {
        $$('button')[i].onclick = function () {
            var value = this.innerHTML;
		
	
			if(value.match(/[0-9]/)){
				
				if(displayVal=="0"){
					displayVal=value;
				}
				else{
					displayVal=displayVal+value;
				}
			}
			
			else if (value=='AC'){
				displayVal="0";
				stack=[];
			}
			
			else if(value=='.'){
				if(!(displayVal.match(/\.+/))){
					displayVal=displayVal+value;
				}
				
			}
			else {
				
				stack.push(displayVal+value);
				displayVal="0";
				if(value.match(/\*|\/|\^/)){
					highPriorityCalculator(stack,value);
				}
				else {
					
				}
			}
			
			document.getElementById('expression').innerHTML = stack;
			document.getElementById('result').innerHTML = displayVal;
        };
    }

			
	
};




function factorial (x) {

}
function highPriorityCalculator(s, val) {

}
function calculator(s) {
    var result = 0;
    var operator = "+";
    for (var i=0; i< s.length; i++) {
        
    }
    return result;
}

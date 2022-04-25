/*eslint-env browser*/
var myDate = new Date();
var hrs = myDate.getHours();
var name = prompt("Hello! please Enter is your name:");

if (name =="") {
        alert("Please put in your name");
    }

var age  = prompt("Please type in your age:");


var greet;
    
   

    if (hrs < 12)
        greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
        greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
        greet = 'Good Evening';
 
   
    if (age < 18)
        age = 'You are not an Adult!';
    else if (age >= 18)
        age = 'You are an Adult!';
     if (age == null) {
        alert("Please put in your name");
    }
     



document.body.innerHTML = "<h1>" + greet +"So your name is:__"+ name +"__So__" + age+ "__ BTW, Today's date is: " + myDate + " </h1>";






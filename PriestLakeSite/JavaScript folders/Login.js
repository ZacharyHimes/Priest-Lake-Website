
// JavaScript Document
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "1" && password == "2"){
window.location = "/Users/zachary/Desktop/PriestLakeSite/HomePage.html"; // Redirecting to other page.
return false;
}
	else{
		alert("Incorrect username or Password");
	}

}
function disableClick(){
        document.onclick=function(event){
          if (event.button == 2) {
            alert('Right Click Message');
            return false;
          }
        }
      }
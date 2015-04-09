
//title of page
var title = document.title;
//navigation elements
var navEle = document.getElementsByTagName("a");
//list of images for slideshow, preloaded
var images = new Array()
images[0] = new Image();
images[0].src = "../project2/assets/images/img1.png";
images[1] = new Image();
images[1].src = "../project2/assets/images/img2.png";
images[2] = new Image();
images[2].src = "../project2/assets/images/img3.png";
images[3] = new Image();
images[3].src = "../project2/assets/images/img4.png";
images[4] = new Image();
images[4].src = "../project2/assets/images/img5.png";

var currImgNum = 0;
var imgLength = images.length -1;

//change the color of the navigation item according to the page the user is on
for(i = 0 ; i < navEle.length ; i++){
	if(title === "Toronto : Home"){
		navEle[0].style.backgroundColor = "red";
	}
	else if(title === "Toronto : About"){
		navEle[1].style.backgroundColor = "red";
	}
	else if(title === "Toronto : Do" || title === "Toronto : Tour" || title === "Toronto : Nightlife"){
		navEle[2].style.backgroundColor = "red";
	}
	else if(title === "Toronto : Consume" || title === "Toronto : Eat" || title === "Toronto : Drink"){
		navEle[5].style.backgroundColor = "red";
	}
	else if(title === "Toronto : Events" || title === "Toronto : Concerts" || title === "Toronto : Festivals"){
		navEle[8].style.backgroundColor = "red";
	}
	else if(title === "Toronto : Plan"){
		navEle[11].style.backgroundColor = "red";
	}
	else if(title === "Toronto : Comment"){
		navEle[12].style.backgroundColor = "red";
	}
};

//validate comments on comments page
function validateComment(){
	var name = document.forms['commentForm']['name'].value;
	var comment = document.forms['commentForm']['comment'].value;

	var errorMsg = "";
	//validate name
	if(name === "" || name.length > 20){
		errorMsg += "Invalid Name <br/>";
	}
	if(comment == "" || comment.length > 300){
		errorMsg += "Invalid Comment";
	}

	if(errorMsg != ""){
		document.getElementById("errorDiv").innerHTML = errorMsg;
		return false;
	}
	return true;
}

function scrollImage(change){
	currImgNum = currImgNum + change;
	//if the current image number is greater than length of all the images (the array)
	if(currImgNum > imgLength){
		currImgNum = 0; // reset slider
	}
	//if the current image number is negative
	if (currImgNum < 0){
		currImgNum = imgLength; // set the slider image to be the last image, in effect going backwards
	}
	document.getElementById('slideshowImage').src = images[currImgNum].src;
}

function moveBack(){
	scrollImage(-1);
}

function moveForward(){
	scrollImage(1);
}

window.setInterval("scrollImage(1)",4000);

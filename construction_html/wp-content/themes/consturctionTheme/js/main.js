//function test() {
//    const nav = document.getElementById('thisNav');
//    nav.classList.toggle("hidden");
//}
//
//function toggleMenu() {
//  document.getElementById("hamburgerBtn").classList.toggle("open");
//  document.getElementById("primaryNav").classList.toggle("open");
//}
//var x = document.getElementById("hamburgerBtn");
//x.onclick = toggleMenu;


/*jslint browser:true */
"use strict";

//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds the links
function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("menu-main-menu").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

//try this for parent link removed
$(window).load( function() {
     $('#nav > ul:first-child > li > a').removeAttr('href');
});


let observer = new IntersectionObserver(function (items, self) {
	for (let i = 0; i < items.length; i++) {
	  if (items[i].isIntersecting) {
		let src = items[i].target.getAttribute("data-src")
		items[i].target.setAttribute("src", src)
	  }
	  self.unobserve(items[i].target)

	}
	})

	let image = document.getElementsByClassName("serviceImage")
	for (let i = 0; i < image.length; i++) {
	observer.observe(image[i])

}


let menuButton = document.querySelector('.menu-button button');
let overlay = document.querySelector('.my-overlay');

menuButton.addEventListener('click', function() {
	let sidebar = document.querySelector('.sidebar');
	sidebar.classList.toggle('sidebar-active');
	let overlay = document.querySelector('.my-overlay');
	overlay.classList.toggle('my-overlay-active');
});

overlay.addEventListener('click', function() {
	let sidebar = document.querySelector('.sidebar');
	sidebar.classList.toggle('sidebar-active');
	let overlay = document.querySelector('.my-overlay');
	overlay.classList.toggle('my-overlay-active');
});

let htmlBar = document.querySelector('.html');
let cssBar = document.querySelector('.css');
let jsBar = document.querySelector('.javascript');
let photoshopBar = document.querySelector('.photoshop');

let bars = [htmlBar, cssBar, jsBar, photoshopBar];

console.log(bars);

for(bar of bars) {
	bar.addEventListener('mouseover', function() {
		let child = this.children[0];
		console.log(child);
		child.classList.add(this.classList[0]+'-active');
	});
}

for(bar of bars) {
	bar.addEventListener('mouseout', function() {
		let child = this.children[0];
		console.log(child);
		child.classList.remove(this.classList[0]+'-active');
	});
}
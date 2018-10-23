function scr(event){
	const btn = event.currentTarget;
	const div = btn.parentNode;
	const array = div.childNodes;
	array[1].style.textDecoration = "line-through";
}
const buttons = document.querySelectorAll('button');
for(const button of buttons){
	button.addEventListener('click',scr);
}
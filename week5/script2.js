const under=document.getElementsByTagName("img")
for(let i=0;i<under.length;i++){
	under[i].addEventListener('click',function(event){
		let big = document.getElementsByTagName("img")[0]
		big.src = event.currentTarget.getAttribute("src")
		
})}
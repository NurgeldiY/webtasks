var list=[[0,0,0],[0,0,0],[0,0,0]] ;
function click(){
	for(i=0;i<3;i++){
    for(j=0;j<3;j++){
        list[i][j]=document.getElementById("s"+(i+1)+""+(j+1)).value;
    }
}
	document.getElementById("result").innerHTML=((list[0][0]*list[1][1]*list[2][2]-list[0][1]*list[1][0]*list[2][2]+list[0][2]*list[1][0]*list[2][1]-
		list[0][0]*list[1][2]*list[2][1]+list[0][1]*list[1][2]*list[2][0]-list[0][2]*list[1][1]*list[2][0]));
}
let find=document.getElementById("determinant");
find.addEventListener("click",click);
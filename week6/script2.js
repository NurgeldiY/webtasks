let countries = ["England","Kazakhstan","Russia","France"];
let cities_by_country = {"Kazakhstan":["Shymkent","Astana","Almaty","Aktau"],
"Russia":["Saint-Petersburg","Moscow","Omsk","Makhachkala"],
"England":["Manchester","London","Birmingham","Liverpool"],
"France":["Lyon","Paris","Nice","Marseille"]};

function kvl(event){
	var s1 = event.currentTarget;
	s1.innerHTML = "";
	for (i = 0; i < countries.length;i++) { 
		var el = document.createElement('option');
		el.innerHTML = countries[i];
		s1.options.add(el);
	}
	change();
	s1.removeEventListener('click',kvl);
}
function change(){
	var s1 = document.getElementById("countries");
	var s2 = document.getElementById("cities");
	var r = s1.value;
	s2.innerHTML="";
	var arr = cities_by_country[r];
	for (i = 0; i < arr.length; i++) { 
		var el = document.createElement('option');
		el.innerHTML = arr[i];
		s2.options.add(el);
	}
}

const choice = document.getElementById('countries');
choice.addEventListener('click',kvl);
   console.log(document.querySelector("#name").value)
	document.querySelector("#addStudent").addEventListener('click',function(){
		var bool = 'true'
	var Name = document.querySelector("#name").value
	var Surname =document.querySelector("#surname").value
	
	if (!Name) {
		document.querySelector("#name").classList.add("error")                
		bool='false'
	}
	else{
		document.querySelector("#name").classList.remove("error")
	}
	if (!Surname) {
		document.querySelector("#surname").classList.add("error")
		bool = 'false'
	}
	else{
		document.querySelector("#surname").classList.remove("error")
	}
	if (bool=='true') {
		var table = document.querySelector("#students")
		var row = table.insertRow(table.rows.length)

		var cell1=row.insertCell(0)
		var cell2=row.insertCell(1)
		var cell3=row.insertCell(2)

		cell1.innerHTML = document.querySelector("#name").value
		cell2.innerHTML = document.querySelector("#surname").value
		cell3.innerHTML = document.querySelector("#faculty").value
		
		document.querySelector("#name").value=""
		document.querySelector("#surname").value=""
		document.querySelector("#faculty").value=""
	}
	});
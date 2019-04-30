
function databasePreview(database){

var tableid = 'legend_'+database;
var container = document.getElementById(tableid);
var username = document.getElementById('usern');
var pass = document.getElementById('userp');
var phpconn = document.getElementById('connect');

username.value = "zukayu";
pass.value = "12345678";
phpconn.innerHTML = "$db = mysqli_connect('localhost','dbname','"+username.value+"','_____________')";

if(tableid == 'legend_world'){
	container.style.display = 'block';
	document.getElementById('legend_simpsons').style.display = 'none';
	document.getElementById('legend_imdb_small').style.display = 'none';
}else if(tableid == 'legend_simpsons'){
	container.style.display = 'block';
	document.getElementById('legend_world').style.display = 'none';
	document.getElementById('legend_imdb_small').style.display = 'none';
}else if(tableid == 'legend_imdb_small'){
	container.style.display = 'block';
	document.getElementById('legend_simpsons').style.display = 'none';
	document.getElementById('legend_world').style.display = 'none';
}else if(tableid == 'legend_other'){
	username.value = '';
	pass.value = '';
	phpconn.innerHTML = "$db = mysqli_connect('localhost','dbname','','')";
	document.getElementById('legend_imdb_small').style.display = 'none';
	document.getElementById('legend_simpsons').style.display = 'none';
	document.getElementById('legend_world').style.display = 'none';
}
	

	
}

function submitForm(){
	var query = document.getElementById('quer').value;
	var previous = document.getElementById('previousQuery');
	var option = document.createElement('option');
	var form = document.getElementById('form_id');
	var radio = document.querySelector('input[name="database"]:checked').value

	option.value = query;
	previous.appendChild(option);
	previous.style.display = 'block';
	form.submit();
	databasePreview(radio);



}
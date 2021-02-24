function base_url() {
	var pathparts = location.pathname.split('/');
	if (location.host == 'localhost') {
		var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
	}else{
		var url = location.origin; // http://stackoverflow.com
	}
	return url;
}

function editLanguage(id) {
	var name = document.getElementById('name'+id).innerText;
	var text = document.getElementById('text'+id).innerText;
	var src = base_url()+"uploads/language/"+document.getElementById('imgSrc'+id).innerText;
	document.getElementById("id").value = id;
	document.getElementById("name").value = name;
	document.getElementById("text").value = text;
	document.getElementById("img").src = src;
	//document.getElementById("file").value = "aaaa";
}

document.getElementById('file').onchange = function (evt) {
	var tgt = evt.target || window.event.srcElement,
		files = tgt.files;

	// FileReader support
	if (FileReader && files && files.length) {
		var fr = new FileReader();
		fr.onload = () => showImage(fr);
		fr.readAsDataURL(files[0]);
	}
}

function showImage(fileReader) {
	var img = document.getElementById("img");
	img.onload = () => getImageData(img);
	img.src = fileReader.result;
}

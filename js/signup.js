function maskPN(evt) {
	var txtPN = document.getElementById("txtPN");
	var chr = String.fromCharCode(evt.which);

	if ("1234567890".indexOf(chr) < 0) {
		return false;
	}
}

function maskName(evt) {
	var txtPN = document.getElementById("txtPN");
	var chr = String.fromCharCode(evt.which);

	if ("1234567890".indexOf(chr) > 0) {
		return false;
	}
}

function maskID(evt) {
	var txtID = document.getElementById("txtID");
	var chr = String.fromCharCode(evt.which);

	if ("1234567890".indexOf(chr) < 0) {
		return false;
	}
}
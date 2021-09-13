function copyToClipboard(id){
	/* Get the text field */
	const copyText = document.getElementById(id);

	/* Copy the text inside the text field */
	navigator.clipboard.writeText(copyText.textContent);

	/* Disable button with notice */
	document.getElementById(id+'-btn').innerHTML = 'ACF Key copied';
	document.getElementById(id+'-btn').disabled = true;
}
function copyToClipboard(id){
	/* Get the text field */
	const copyText = document.getElementById(id);

	/* Copy the text inside the text field */
	navigator.clipboard.writeText(copyText.textContent);

	/* Alert notice */
	alert('ACF Key copied');
}
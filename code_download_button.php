/*You embed the Javascript code to the page with the lines of code below.*/

function myDownload(){
	echo	'<script>' .
            /*You must change the ID_ANCHOR according to the ID that you have in the <a> tag.*/
			'var id_anchor = 'ID_HERE'; /* What about making the ID_ANCHOR a variable, so users don't have to edit the code?*/
			'let myDownload = document.getElementById(id_anchor);' .
			'myDownload.setAttribute("download", "download");' .
			'</script>';
}

add_action('wp_footer', 'myDownload');

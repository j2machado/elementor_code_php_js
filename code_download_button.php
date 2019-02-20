/*You embed the Javascript code to the page with the lines of code below.*/

function myDownload(){
	echo	'<script>' .
            /*You must change the ID_ANCHOR according to the ID that you have in the <a> tag.*/
			'let myDownload = document.getElementById("ID_ANCHOR");' .
			'myDownload.setAttribute("download", "download");' .
			'</script>';
}

add_action('wp_footer', 'myDownload');
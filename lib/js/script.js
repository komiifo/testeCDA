$("#cancel").click(function(){
	url = "index.php";
    $( location ).attr("href", url);
});

$("#readList").click(function(){
	url = "attribution.php";
	$( location ).attr("href", url);
});

$("#back").click(function(){
	url = "index.php";
	$( location ).attr("href", url);
});

$("#attribution").click(function(){
	url = "ficheUser.php";
	$( location ).attr("href", url);
});
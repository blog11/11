function photo(){
	$("#iframepage").attr('src',"http://localhost/blog/index.php/Admin/Photo/index");
}

function deletephoto(){
	$("#iframepage").attr('src',"http://localhost/blog/index.php/Admin/Photo/delete");
	$("#iframepage").css('height','900px');
}

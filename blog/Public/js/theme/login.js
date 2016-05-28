$(function () {
	$('#ngehe').bazeModal();

});
function init(){
		$("#password").val('');
		$("#password").attr('type','password');	
	}
function change(){
	var pwd=$("#password").val();
	if (pwd=='') {
		$("#password").attr('type','text');
		$("#password").val('请输入密码');
	}
}
function commit(){
	var username=$("#username").val(),
		password=$("#password").val();
	if (username=="") {
		alert("请输入用户名");
	}
	if (password=="") {
		laert("请输入密码");
	}
}
function check(){
	if ($(".check").is(":checked")) {
		$("#username").attr("readonly",true);
		$("#password").attr("readonly",true);
		$(".check").attr("readonly",true);
	}else{
		$("#username").attr("readonly",false);
		$("#password").attr("readonly",false);
		$(".check").attr("readonly",false);	
	}
}

function validate(){
	if($(".check").is(":checked")){
		return true;
	}
	var username=$("#username").val();
	var password=$("#password").val();
	var captcha=$("#vali").val();
	if(username=='请输入用户名'){
		alert('username is null');
		return false;
	}else if(password=='请输入密码'){
		alert('password is null');
		return false;
	}else if(captcha=='验证码'){
		alert('captcha is null');
		return false;
	}
}

function getPro(proid){
	$.post('http://localhost/blog/index.php/Home/Login/getCityByProid',{'proid':proid},function(result){
		var str="";
		$('.selcity').empty();
		$.each(result,function(x,y){
			str+="<option value='" + y.id + "'>"+y.name+"</option>";
		});
		$('.selcity').append(str);
	});
}

function checkUsername(username){
	$.post('http://localhost/blog/index.php/Home/Register/checkUsername',{'username':username},function(result){
		$('.usernamelistError').empty();
		//不重复的用户名
		if(result.result==0){
			//提示此用户名可用
			$('.usernamelistError').append("<span style='color:green;'>此用户名可用<span>");
		}else{
			//提示用户名不可用
			$('.usernamelistError').append("<span style='color:red;'>此用户名不可用<span>");
		}
	});
}

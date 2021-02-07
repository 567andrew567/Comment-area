function login() {
	alert("目前無法登入!!!");
}

function error() {
	alert("error!!!");
}

//get_question
$(function get_question(){
	$.ajax({
		url: "assets/php/get_question.php",
		data:{
			question_code: 1
		},
		type: "POST",
		datatype: "html",
		success: function(result){
			alert(result);
		},
		error: function(){
			alert("get_question fail");
		}
	});
});
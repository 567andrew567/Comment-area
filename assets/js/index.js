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
		dataType: 'JSON',
		success: function(result){
			// alert(result[0].answer);
			$("#question_title").html("<p>"+result[0].question_title+"</p>");
			$("#question").html("<p>"+result[0].question+"</p>");
			$("#answer").html("<p>"+result[0].answer+"</p>");
		},
		error: function(){
			alert("get_question fail");
		}
	});
});
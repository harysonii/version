$(document).ready(function(){

$('a').on('click', function(e){
	e.preventDefault();
	var pageRef = "http://"$(this).attr('href');
	
	callPage(pageRef)
	
});

function callPage(pageRefInput){
$.ajax ({
	url: pageRefInput,
	type: "GET",
	dataType: 'text',
	
	success: function(response) {
		$('.content').html(response);
		}
	});
	}
	
$(".hh").on("click", function() {
	$(".ui.dropdown").dropdown();
});	
});
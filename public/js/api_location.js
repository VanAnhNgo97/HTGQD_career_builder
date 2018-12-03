//https://maps.googleapis.com/maps/api/distancematrix/json?origins=21.0085545,105.8567828&destinations=21.0085846,106.8532637&key=AIzaSyAW2pY3LY8gO-W2KT6KX2SAIZ3hvAk8Zz4\

function get_distance(a, b){
	var link_api = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=" + a + 
				"&destinations=" + b + "&key=AIzaSyAW2pY3LY8gO-W2KT6KX2SAIZ3hvAk8Zz4";
	$.get(
		link_api,
		function(data){
			console.log(data);
		}
	);
}
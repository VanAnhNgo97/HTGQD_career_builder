
$('#btnSearch').on('click',function(){
	var location=$('#location').val();
    // alert('Hệ thống đang tìm kiếm. Vui lòng đợi trong giây lát.');
    $.ajax({
        url: $('#btnSearch').attr('getLocations'),
        method: 'post',
        data:{
            _token: $('#_token').val(),
            gender:$('#gender').val(),
            experience:$('#experience').val(),
            age:$('#age').val()
        }
    }).done(function(data){
        if (data==1) {
            alert('Thông tin bạn vừa nhập chưa đủ hoặc không có công ty nào phù hợp. Vui lòng sửa lại yêu cầu.')
        } else {
            calculateDistances(location, data);
        }
    });
});

function calculateDistances(origin, destinations){
    var full_id = [];
    var full_locations = [];
    var full_distances = [];

    var id_company = new Array();
    var locations_comp = new Array();

    var n_loc = 0;
    for(var id in destinations){
        n_loc = n_loc + 1;
    }

    for(var id in destinations){
        full_id.push(id);
        full_locations.push(destinations[id]);
        id_company.push(id);
        locations_comp.push(destinations[id]);
        if(id_company.length > 24){
            calculateDistance([origin], locations_comp).then().done(function (distances) {
                full_distances = full_distances.concat(distances); 
            });


            id_company = [];
            locations_comp = [];
        }
    }
    if(id_company.length > 0){
        calculateDistance([origin], locations_comp).then().done(function (distances) {
            full_distances = full_distances.concat(distances);
        });
        id_company = [];
        locations_comp = [];
    }
    setTimeout(function () {
        // console.log(full_distances);
        distances = [];
        for(var i=0; i < full_id.length; i++){
            distances[full_id[i]] = full_distances[i].distance.value; 
        }
        console.log(distances);
        // distances có dạng array với key là id của công ty, values là khoảng cách
        // +++++++++++++++++++++ code ajax gửi distances lên server tại đây +++++++++++++++++++
        $('#khoangcachs').val(distances);
        $('#searchFormRightCol').submit();

    }, 3000);
    
}

function calculateDistance(origins, destinations){
    if(origins.length > 25 || destinations.length > 25){
        throw "out of range!";
    }
    var service = new google.maps.DistanceMatrixService;
    var dfd = $.Deferred();
    service.getDistanceMatrix({
        origins: origins,
        destinations: destinations,
        travelMode: 'DRIVING',
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
        }, function(response, status) {    
        if (status !== 'OK') {
                // alert('Error was: ' + status);
                dfd.reject(status);
            } else {
                var originList = response.originAddresses;
                var destinationList = response.destinationAddresses;
                dfd.resolve(response.rows[0].elements);
            }
        }
    );
    return dfd.promise();
}
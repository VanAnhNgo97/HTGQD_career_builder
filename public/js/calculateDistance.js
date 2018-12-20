var geocoder, location1, location2;

function initialize() {
    geocoder = new GClientGeocoder();
}

function calculateDistance()
{
    try
    {
        var glatlng1 = new GLatLng(location1.lat, location1.lon);
        var glatlng2 = new GLatLng(location2.lat, location2.lon);
        var miledistance = glatlng1.distanceFrom(glatlng2, 3959).toFixed(1);
        var kmdistance = (miledistance * 1.609344).toFixed(1);
        return kmdistance;
    }
    catch (error)
    {
        alert(error);
    }
}

$(document).ready(function(){
    initialize();
})

$('#btnSearch').on('click',function(){
	var location=$('#location').val();
    // alert(location);
    // geocoder.getLocations(location, function (response) {
    //     if (!response || response.Status.code != 200)
    //     {
    //         alert("Sorry, we were unable to geocode the first address 1");
    //     }
    //     else
    //     {
    //         location1 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
    //         var khoangcachs=new Array();
    //         $.ajax({
    //             url: $('#btnSearch').attr('getLocations'),
    //             method: 'post',
    //             data:{
    //                 _token: $('#_token').val(),
    //                 gender:$('#gender').val(),
    //                 experience:$('#experience').val(),
    //                 age:$('#age').val()
    //             }
    //         }).done(function(data){
    //                 for(var key in data){
    //                     var location_name=data[key];
    //                     console.log(location_name);
    //                     geocoder.getLocations(data[key], function (response) {
    //                         if (!response || response.Status.code != 200)
    //                         {
    //                             alert("Sorry, we were unable to geocode the second address 2");
    //                         }
    //                         else
    //                         {
    //                             location2 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
    //                             var kmdistance=calculateDistance();
    //                             // console.log(key+' khoang cach giua '+location+' va '+data[key]+' : '+kmdistance);
    //                             // console.log('----');
    //                             console.log(data[key]);
    //                         }
    //                     });
    //                 }
    //             });
    //     }
    // });

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
        calculateDistances(location, data);
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
        console.log(full_distances);
        distances = [];
        for(var i=0; i < full_id.length; i++){
            distances[full_id[i]] = full_distances[i].distance.value; 
        }

        // distances có dạng array với key là id của công ty, values là khoảng cách
        // +++++++++++++++++++++ code ajax gửi distances lên server tại đây +++++++++++++++++++


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
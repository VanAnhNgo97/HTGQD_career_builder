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
    alert(location);
    geocoder.getLocations(location, function (response) {
        if (!response || response.Status.code != 200)
        {
            alert("Sorry, we were unable to geocode the first address 1");
        }
        else
        {
            location1 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
            var khoangcachs=new Array();
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
                    for(var key in data){
                        var location_name=data[key];
                        console.log(location_name);
                        geocoder.getLocations(data[key], function (response) {
                            if (!response || response.Status.code != 200)
                            {
                                alert("Sorry, we were unable to geocode the second address 2");
                            }
                            else
                            {
                                location2 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
                                var kmdistance=calculateDistance();
                                // console.log(key+' khoang cach giua '+location+' va '+data[key]+' : '+kmdistance);
                                // console.log('----');
                                console.log(data[key]);
                            }
                        });
                    }
                });
        }
    });
});
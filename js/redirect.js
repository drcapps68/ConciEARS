    
    
    $(document).ready(function() {
       
        $('#yesRide').on("click", sendData);
        
    });
    
    
    function sendData()
    {
        var ride_id = document.getElementById("hiddenData").innerHTML;
        
        $.ajax({
            type: "POST",
            url: "addRide",
            data: {rideId : ride_id}
            
            }).done(function(response) {
                var rideInfo = response.split("a");
                var rideCount = rideInfo[0];
                var timeStamp = rideInfo[1];

                document.getElementById("totalcount").innerHTML = "You have rode this ride " + rideCount + " times";
                document.getElementById("timeStamp").innerHTML = "The last time you rode this ride was: " + timeStamp ;
            });
        
           // .fail(function() {
           //     alert( "error" );
           // })
           //.always(function() {
           //      alert( "complete" );
           // });
           
    }
    
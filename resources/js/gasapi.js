// window.addEventListener("load", httpGet);

window.onload = function(){

    var xmlHttp = new XMLHttpRequest();
    
    xmlHttp.open( "GET", "https://api.oilpriceapi.com/v1/prices/latest", false ); // false for synchronous request
    xmlHttp.setRequestHeader("Authorization","Token fda51e339029aa2c0265d9e9877cd7bd");
    xmlHttp.setRequestHeader("Content-Type","application/json");
    xmlHttp.send(null);
     var obj = JSON.parse(xmlHttp.responseText);

     oilcreated = obj.data.created_at;
     oildate = oilcreated.substring(0, 9);
     oiltime = oilcreated.substring(11, 19);
    document.getElementById("oilprice").innerHTML  = obj.data.price*3.75;
         document.getElementById("oildate").innerHTML  = oildate + " "+ oiltime;

    }




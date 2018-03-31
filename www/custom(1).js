if(localStorage.name != undefined)
    {
        document.myForm.usr.value = localStorage.name;
    }

if(localStorage.date != undefined)
    {
        document.myForm.usrdate.value = localStorage.date;
    }

/*Creation of JSON*/
if(localStorage.getItem("endorsements") == undefined)
{
    var object = {"endorsements":[

    ]}

    localStorage.setItem("endorsements", JSON.stringify(object));
}

/*Fill in Edorsement Table*/
var object = JSON.parse(localStorage.endorsements);
if(object.endorsements[0] != undefined)
{
    for (i in object.endorsements)
    {
        document.getElementById("endorsTable").insertAdjacentHTML("beforeend", "<tr><td>"+object.endorsements[i].name+"</td><td>"+object.endorsements[i].date+"</td></tr>");
    }
}

/*Sort table by name*/
document.getElementById("sortname").addEventListener("click", function(){
    /*Create JSON from local storage*/
    var sorted = JSON.parse(localStorage.endorsements);
    if(sorted.endorsements[0] != undefined)
    {
        sorted.endorsements.sort(function(a,b) {
        var aname = a.name.toLowerCase();
        var bname = b.name.toLowerCase();

        if ( aname < bname )
            return -1;
        if ( aname > bname )
            return 1;
        return 0;
        } );
        document.getElementById("endorsTable").innerHTML = "";
        for (i in sorted.endorsements)
        {
            document.getElementById("endorsTable").insertAdjacentHTML("beforeend", "<tr><td>"+sorted.endorsements[i].name+"</td><td>"+sorted.endorsements[i].date+"</td></tr>");
        }
    }

});

/*Sort table by date*/
document.getElementById("sortdate").addEventListener("click", function(){
    /*Create JSON from local storage*/
    var sorted = JSON.parse(localStorage.endorsements);
    if(sorted.endorsements[0] != undefined)
    {
        sorted.endorsements.sort(function(a,b) {
        if ( a.date < b.date )
            return -1;
        if ( a.date > b.date )
            return 1;
        return 0;
        } );
        document.getElementById("endorsTable").innerHTML = "";
        for (i in sorted.endorsements)
        {
            document.getElementById("endorsTable").insertAdjacentHTML("beforeend", "<tr><td>"+sorted.endorsements[i].name+"</td><td>"+sorted.endorsements[i].date+"</td></tr>");
        }
     }
    
});

/*Store name in localStorage*/
document.myForm.usr.addEventListener("input", function(){
    localStorage.setItem("name", document.myForm.usr.value);
}
);

/*store date in localStorage*/
document.myForm.usrdate.addEventListener("input", function(){
    localStorage.setItem("date", document.myForm.usrdate.value);
}
);

/*Submit button*/
document.myForm.addEventListener("submit", function(){
    
     /*only run if there are stored values*/
    if(Boolean(localStorage.name && localStorage.date)){
    
    
    /*change string to JSON*/    
    var object = JSON.parse(localStorage.endorsements);
    var item = {"name" :localStorage.name, "date": localStorage.date }

    /*add to JSON file*/
    object.endorsements.push(item);

    /*JSON gets stringified*/
    localStorage.setItem("endorsements", JSON.stringify(object));
}
});




if(localStorage.name != undefined)
    {
        document.myForm.usr.value = localStorage.name;
    }

if(localStorage.date != undefined)
    {
        document.myForm.usrdate.value = localStorage.date;
    }

if(localStorage.comment != undefined)
    {
        document.myForm.endorsecomment.value = localStorage.comment;
    }



/*Creation of JSON*/
if(localStorage.getItem("endorsements") == undefined)
{
    var object = [

    ]

    localStorage.setItem("endorsements", JSON.stringify(object));
}

/*Fill in Edorsement Table*/
fillJsonTable();
window.setInterval(function(){
  fillJsonTable();
}, 5000);

function fillJsonTable(){
    $.getJSON( "js/endorsements.json", function( data ) {
  document.getElementById("endorsTable").innerHTML = "";
  for (i in data)
    {
        document.getElementById("endorsTable").insertAdjacentHTML("beforeend", "<tr><td>"+data[i].name+"</td><td>"+data[i].date+"</td><td>"+data[i].comment+"</td></tr>");
    }
    localStorage.endorsements = JSON.stringify(data);
})};

function fillLocalTable(){
    var object = JSON.parse(localStorage.endorsements);
    if(object[0] != undefined)
    {
        document.getElementById("endorsTable").innerHTML = "";
        for (i in object)
        {
            document.getElementById("endorsTable").insertAdjacentHTML("beforeend", "<tr><td>"+object[i].name+"</td><td>"+object[i].date+"</td><td>"+object[i].comment+"</td></tr>");
        }
}};

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

/*store comment in localStorage*/
document.myForm.endorsecomment.addEventListener("input", function(){
    localStorage.setItem("comment", document.myForm.endorsecomment.value);
}
);

/*Submit with modal*/
document.getElementById("confirm").addEventListener("click", function(event){
    
     /*only run if there are stored values*/
    if(Boolean(localStorage.name && localStorage.date && localStorage.comment)){
    
    
    /*change string to JSON*/    
    var object = JSON.parse(localStorage.endorsements);
    var item = {"name" :localStorage.name, "date": localStorage.date, "comment": localStorage.comment }

    /*add to JSON file*/
    object.push(item);

    /*JSON gets stringified*/
    localStorage.setItem("endorsements", JSON.stringify(object));
    }
    
    fillLocalTable();

});

/*GUP FUNCTION!!*/
function gup(name){
    name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+name+"=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.href);
    if(results == null)
            return "";
    else
        return results[1];
}

/*Password matching check*/
function check(){
    if (document.getElementById('passwordR').value==document.getElementById('confirmPassword').value){
    document.getElementById('submit').disabled = false;
    }
    else {
     document.getElementById('submit').disabled = true;
    }
}
/*Password matching message*/
function checkMessage(){
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('passwordR');
    var pass2 = document.getElementById('confirmPassword');
    //Store the Confimation Message Object ...
    var message = document.getElementById('message');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass1.style.backgroundColor = goodColor;
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass1.style.backgroundColor = badColor;
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  



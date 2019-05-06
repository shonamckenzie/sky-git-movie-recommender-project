

// funtion to get the data from file https://www.w3schools.com/xml/dom_httprequest.asp
function getData(value) {
    var moodList = ['Agitated', 'Calm', 'Happy', 'Sad', 'Tired', 'Wide Awake', 'Scared', 'Fearless'];
    var xhttp = new XMLHttpRequest(); //get data after page has loaded
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            mood(this, moodList[value]);        // Action to be performed when the document is read;call mood function
        }
    };
    xhttp.open("GET", "uploads/programmes.xml", true);
    xhttp.send();
}

// function to retrieve image and name for selected Mood https://www.ajax-tutor.com/160/get-data-from-responsexml/
function mood(data, selectedMood) {
    var xml = data.responseXML; //responseXML returns xml doc and assign to xml
    var parent = xml.getElementsByTagName("programme"); //get element collection
    var count =1;             
    for (var i = 0; i < parent.length; i++) {
        if (parent[i].getElementsByTagName("mood")[0].childNodes[0].nodeValue === selectedMood && count < 12) {
             var card = "<img class='card-img-top h-75' src=" + parent[i].getElementsByTagName("imagePath")[0].childNodes[0].nodeValue + ">" +
                    "<div class='card-body'> <p class='card-title text-center'>" + parent[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</p></div>";
            document.getElementById(count).innerHTML = card;
            count += 1;

        }
    }

}




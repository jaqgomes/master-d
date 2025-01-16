$.ajax({
    url: "https://api.nasa.gov/planetary/apod?api_key=9CeaQg2uPmNIpdrA7nBgHffiag66tPTWWdJS928i",
    success: function (whatyougot) {
        document.getElementById("image").innerHTML = "<img src ='" + whatyougot.url + "'/>";

        document.getElementById("copyright").innerHTML = "Por: " + whatyougot.copyright;

        document.getElementById("title").innerHTML = whatyougot.title;

        document.getElementById("explanation").innerHTML = whatyougot.explanation;
    }
});
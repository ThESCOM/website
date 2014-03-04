// Slideshow
// a = index des Artikels
// l = Anzahl der Artikel in Slideshow
var articles = document.querySelectorAll("#overview > article"), a = 0, l = articles.length, slideshow;

// Interval 4000 = alle 4 sec rufe Funktion auf
slideshow = setInterval(function() {
    for (i = 0; i < l; i++) {
        articles[i].style.opacity = i==a ? 1 : 0;
    }
    a++;
    if (a==l){
        a=0;
    }
}, 17000);

// Nach 5 Minuten Slideshow beenden
setTimeout(function() {
    clearInterval(slideshow);
}, 5*60*1000);

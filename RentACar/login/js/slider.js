var curslide = 0;
var totslide = 0;
var slideint = "";
var slidetim = 3000;

function triggerslider()
{
    $("#newslider").find(".banner").each(function(){ totslide++; });
    if(totslide>1) {
        slideint = setTimeout("slide()", slidetim);
    }
}

function slide()
{
    var next = parseInt(parseInt(curslide)+parseInt(1));
    if(next>=totslide) { next = 0; }
    
    $("#bdiv"+curslide).fadeOut("slow");
    $("#bdiv"+next).fadeIn("slow", function(){
        curslide = next;
        slideint = setTimeout("slide()", slidetim);
    });
}

var curmarquee = 0;
var totmarquee = 0;
var marqueeint = "";
var marqueetim = 2500;

function triggermarquee()
{
    $("#logosinner").find("span").each(function(){ totmarquee++; });
    totmarquee = totmarquee-3;
    marqueeint = setTimeout("marqueenow()", marqueetim);
}

function marqueenow()
{
    var next = parseInt(parseInt(curmarquee)+parseInt(1));
    if(next>=totmarquee) { next = 0; }
    
    $("#logosinner").animate({marginLeft:-(next*105)+"px"}, 500, function(){
        curmarquee = next;
        marqueeint = setTimeout("marqueenow()", marqueetim);
    });
}

var curhomeslide = 0;
var tothomeslide = 0;
var homeslideint = "";
var homeslidetim = 5000;

function triggerhomeslide()
{
    $(".vdiv").each(function(){ tothomeslide++; });
    tothomeslide = tothomeslide-3;
    homeslideint = setTimeout("homeslidenow()", homeslidetim);
    
    $("#onecikanhome").mouseover(function(){
        clearTimeout(homeslideint);
        homeslideint = setTimeout("homeslidenow()", homeslidetim);
    });
}

function homeslidenow()
{
    var next = parseInt(parseInt(curhomeslide)+parseInt(1));
    if(next>=tothomeslide) { next = 0; }
    
    $("#vitrincontainer").animate({marginLeft:-(next*250)+"px"}, 500, function(){
        curhomeslide = next;
        homeslideint = setTimeout("homeslidenow()", homeslidetim);
    });
}

function homeslidesol()
{
    var next = parseInt(parseInt(curhomeslide)-parseInt(1));
    if(next<0) { return false; }
    
    $("#vitrincontainer").animate({marginLeft:-(next*250)+"px"}, 500, function(){
        curhomeslide = next;
        
        clearTimeout(homeslideint);
        homeslideint = setTimeout("homeslidenow()", homeslidetim);
    });
}

function homeslidesag()
{
    var next = parseInt(parseInt(curhomeslide)+parseInt(1));
    if(next>=tothomeslide) { return false; }
    
    $("#vitrincontainer").animate({marginLeft:-(next*250)+"px"}, 500, function(){
        curhomeslide = next;
        
        clearTimeout(homeslideint);
        homeslideint = setTimeout("homeslidenow()", homeslidetim);
    });
}
function openNav() 
{
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("search").disabled = true;
    document.getElementById("search").style.backgroundColor = "rgb(152,152,152)";
    document.getElementById("btn").disabled = true;
    document.getElementById("btn").style.backgroundColor = "rgb(152,152,152)";
    document.getElementById("btn").style.borderColor = "#000000";

    document.getElementById("food").style.filter = "grayscale(100%)";
    document.getElementById("beauty").style.filter = "grayscale(100%)";
    document.getElementById("fashion").style.filter = "grayscale(100%)";
    document.getElementById("sports").style.filter = "grayscale(100%)";
    document.getElementById("tv").style.filter = "grayscale(100%)";
    document.getElementById("fitness").style.filter = "grayscale(100%)";
    document.getElementById("travel").style.filter = "grayscale(100%)";


    document.getElementById("main1").style.filter = "grayscale(100%)";
    document.getElementById("main2").style.filter = "grayscale(100%)";
    document.getElementById("main3").style.filter = "grayscale(100%)";
    document.getElementById("main4").style.filter = "grayscale(100%)";
    document.getElementById("main5").style.filter = "grayscale(100%)";
    document.getElementById("main6").style.filter = "grayscale(100%)";
    document.getElementById("main7").style.filter = "grayscale(100%)";
    document.getElementById("main8").style.filter = "grayscale(100%)";
    document.getElementById("main9").style.filter = "grayscale(100%)";
    document.getElementById("main10").style.filter = "grayscale(100%)";
    document.getElementById("main11").style.filter = "grayscale(100%)";
    document.getElementById("main12").style.filter = "grayscale(100%)";
    document.getElementById("main13").style.filter = "grayscale(100%)";
    document.getElementById("main14").style.filter = "grayscale(100%)";
    document.getElementById("main15").style.filter = "grayscale(100%)";
    document.getElementById("main16").style.filter = "grayscale(100%)";
    document.getElementById("main17").style.filter = "grayscale(100%)";
    document.getElementById("main18").style.filter = "grayscale(100%)";
    document.getElementById("main19").style.filter = "grayscale(100%)";
    document.getElementById("main20").style.filter = "grayscale(100%)";



    document.getElementById("main1").style.transform = "scale(1)";
    document.getElementById("main2").style.transform = "scale(1)";
    document.getElementById("main3").style.transform = "scale(1)";
    document.getElementById("main4").style.transform = "scale(1)";
    document.getElementById("main5").style.transform = "scale(1)";
    document.getElementById("main6").style.transform = "scale(1)";
    document.getElementById("main7").style.transform = "scale(1)";
    document.getElementById("main8").style.transform = "scale(1)";
    document.getElementById("main9").style.transform = "scale(1)";
    document.getElementById("main10").style.transform = "scale(1)";
    document.getElementById("main11").style.transform = "scale(1)";
    document.getElementById("main12").style.transform = "scale(1)";
    document.getElementById("main13").style.transform = "scale(1)";
    document.getElementById("main14").style.transform = "scale(1)";
    document.getElementById("main15").style.transform = "scale(1)";
    document.getElementById("main16").style.transform = "scale(1)";
    document.getElementById("main17").style.transform = "scale(1)";
    document.getElementById("main18").style.transform = "scale(1)";
    document.getElementById("main19").style.transform = "scale(1)";
    document.getElementById("main20").style.transform = "scale(1)";


}




function closeNav() 
{
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("search").disabled = false;
    document.getElementById("search").style.backgroundColor = "";
    document.getElementById("btn").style.backgroundColor = "";
    document.getElementById("btn").style.borderColor = "";


    document.getElementById("food").style.filter = "grayscale(0%)";
    document.getElementById("beauty").style.filter = "grayscale(0%)";
    document.getElementById("fashion").style.filter = "grayscale(0%)";
    document.getElementById("sports").style.filter = "grayscale(0%)";
    document.getElementById("tv").style.filter = "grayscale(0%)";
    document.getElementById("fitness").style.filter = "grayscale(0)";
    document.getElementById("travel").style.filter = "grayscale(0%)";


    document.getElementById("main1").style.filter = "grayscale(0%)";
    document.getElementById("main2").style.filter = "grayscale(0%)";
    document.getElementById("main3").style.filter = "grayscale(0%)";
    document.getElementById("main4").style.filter = "grayscale(0%)";
    document.getElementById("main5").style.filter = "grayscale(0%)";
    document.getElementById("main6").style.filter = "grayscale(0%)";
    document.getElementById("main7").style.filter = "grayscale(0%)";
    document.getElementById("main8").style.filter = "grayscale(0%)";
    document.getElementById("main9").style.filter = "grayscale(0%)";
    document.getElementById("main10").style.filter = "grayscale(0%)";
    document.getElementById("main11").style.filter = "grayscale(0%)";
    document.getElementById("main12").style.filter = "grayscale(0%)";
    document.getElementById("main13").style.filter = "grayscale(0%)";
    document.getElementById("main14").style.filter = "grayscale(0%)";
    document.getElementById("main15").style.filter = "grayscale(0%)";
    document.getElementById("main16").style.filter = "grayscale(0%)";
    document.getElementById("main17").style.filter = "grayscale(0%)";
    document.getElementById("main18").style.filter = "grayscale(0%)";
    document.getElementById("main19").style.filter = "grayscale(0%)";
    document.getElementById("main20").style.filter = "grayscale(0%)";  
}

function closeWin()
{
    var conf=confirm("Are you sure, you want to quit??");
    if(conf==true)
    {
        close();
    }
}
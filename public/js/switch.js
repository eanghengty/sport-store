var Logform = document.getElementById("Logform");
       var Regform = document.getElementById("Regform");
       var line = document.getElementById("line");
    
            function reg(){
                Regform.style.transform = "translateX(0px)";
                Logform.style.transform = "translateX(0px)";
                line.style.transform ="translateX(60px)";
            }

            function log(){
                Regform.style.transform = "translateX(360px)";
                Logform.style.transform = "translateX(360px)";
                line.style.transform ="translateX(-60px)";
                line.style.backgroundColor = "#00B1FF";
            }
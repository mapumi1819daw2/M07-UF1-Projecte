

var element = null;
var cont =0 ;
var llista = Array();

$(function() {
    $("td").on("click", function (){
        element = $(this).attr("id");
        var productes = null;

        var comptador = 0;
        console.log(element);
        $("#f"+element).css({"bgcolor":"#30A6E6"});

        llista[cont++] = element;

   productes = document.getElementById("productes");
   comptador = productes.text;

   productes.text = ++comptador;
        console.log("Comptador: "+comptador);

    });



    /*$("#cistell").on("click", function(){
       var q = llista.length;
       
       $.session.set("q", q);
      
        for(var i = 0; i< llista.length; i++){
            $.session.set(i, llista[i]);
            console.log("sessio ["+llista[i]+"] "+$.session.get(i));
       
        }

            window.open("comanda.php");
        
    });*/




    
});



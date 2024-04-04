$(document).ready(function(){
    $("#mes1").hide();
    $("#mes2").hide();
    $("#mes3").hide();
    $("#mes4").hide();
    $("#mes5").hide();
    $("#mes6").hide();
    $("#mes7").hide();

    function validation ()
    {
        var lenom = $("#nom").val();
        var leprenom = $("#prenom").val();
        var ddn=$("#ddn").val();
        var cp=$("#cp").val();
        var adr=$("#adresse").val();
        var vil=$("#vil").val();
        var email=$("#exampleFormControlInput1").val();
        envoie=true;
    
        if (lenom === "")
        {
            envoi = false;
            $("#mes1").show();
        }
        else 
        { 
            $("#mes1").hide();
        };
    
    }

    $("#btn").click(function(e)
    {
  
        e.preventDefault();
        validation ();
    
    });
    
});
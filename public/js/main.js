$(document).ready(function(){
    $(".menu").click(function(){
        $(".keep").toggleClass("width");
    });

    $("#single-book").change(function(){
        if($(this).val() == 2){
            $("#copiaUnica").css("display","none");
            $("#cantEjemplar").css("display","initial");
        }
    })
    
    $("#add-autor").click(function(){
        var autor, tipo;
        if($("#autor-select").val() != null && $("#autor-type").val() != null){
            autor = $("#autor-select").val();
            tipo  = $("#autor-type").val();  
            $("#list-autors #tbody").append("<tr>"+
                                                "<td>"+ autor +"</td>"+
                                                "<td>"+ tipo +"</td>"+
                                                "<td><a href='javascript:void(0)' class='delautor material-icons' id='quitar_" + autor.replace(" ", "_") + "_" + tipo + "'>clear</a></td>"+
                                            "</tr>"
            ); 
        }
    });
    
    $(".delautor").click(function(){
        alert("golo");
    });
    
    $("#doc-user").keyup(function(){
        $('#pass-user').val(($('#doc-user').val()));
    }); 

    //Function which allows only the entry numbers
    $('.justNumbers').keypress(function(e){
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 48) || (keynum == 56))
            return true;
        return /\d/.test(String.fromCharCode(keynum));
    }); 
});


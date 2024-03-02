$(data_search());

function data_search(sql){
    $.ajax({
        url: '../list_cargament.php',
        type: 'POST',
        dataType: 'html',
        data: {sql: sql},
    })
    .done(function(answer){
        $("#table_id").html(answer);
    })
    .fail(function(){
        console.log("error");
    })
}

$(document).on('keyup', '#search'), function(){
    var valor = $(this).val();
    if(valor != ""){
        data_search(valor);
    }else{
        data_search();
    }
}
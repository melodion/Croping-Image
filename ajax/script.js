
function add() {
    var type        = $("#id_type").val();
    var name        = $("#id_name").val();
    var description = $("#id_description").val();
    var param       = $("#param").val();
    var val_x       = $("#id_val_x").val();
    var val_y       = $("#id_val_y").val();
    var val_w       = $("#id_val_w").val();
    var val_h       = $("#id_val_h").val();
    var action      = $("#id_action").val();
    var html        = $("#id_datas").val();
    var enc         = html.replace(/</g,"&lt;").replace(/>/g,"&gt;");

    var datas       = enc;

    $.post("controller/add.php", {
        type: type,
        name: name,
        description: description,
        param:param,
        val_x: val_x,
        val_y: val_y,
        val_w: val_w,
        val_h: val_h,
        action: action,
        datas: datas

    }, function (data) {
        //alert(data);
        if (data==="false") {
            $("#notif").html('<div class="alert alert-warning" role="alert"><i class="fa fa-times"></i> Add Failed !</div>');
            setTimeout(function(){ $("#notif").html(''); }, 1000);
        }else{
            $("#id_description").val("");
            $("#id_name").val("");
            $("#id_action").val("");
            $("#id_datas").val("");
            read();
            setTimeout(function(){ 
                $("#list_"+data).animate({"background-color":"#d4edda"},1000);
                $("#list_"+data).animate({"background-color":"#FFF"},2000).removeAttr('style');
                $("#notif").html('');  
            }, 100);
       }
       
   });
    return false;
}

function hapus(Key) {
    var id=Key;
    $.post("controller/delete.php", {
        id: id
    },
    function (data) {
        $("#list_"+id).animate({"background-color":"#f8d7da"},1000);
        $("#list_"+id).animate({"background-color":"#FFF"},1000);
         setTimeout(function(){ read(); }, 1000);
       
   });

}

$('#id_type').on('change', function() {
    var type = $(this).val();
    if (type==='Keyboard' || type==='keyboard') {
        $("#id_action").prop('readonly', true);
    }else{
       $("#id_action").val("");
       $("#id_action").prop('readonly', false);
   }
});

$('#id_name').on('change', function() {
    var name = $(this).val();
    $.post("controller/get_action.php", {
        name: name
    }, function (data) {
        $("#id_action").val(data);

    });
    return false;
});


function read() {
    $.get("controller/read.php", {}, function (data, status) {
      $(".records_content").html(data);
  });
}


function hapusSemua(){
   $.post("controller/hapus_semua.php", {
    param: "Hapus" }, function (data) {
    if(data == "false"){
        $("#notif").html('<div class="alert alert-warning" role="alert"><i class="fa fa-times"></i> Delete All Failed !</div>');
        setTimeout(function(){ $("#notif").html(''); }, 1000);
    }else{
        read();
    }
});
   return false;
}

$(document).ready(function () {
    read();
});





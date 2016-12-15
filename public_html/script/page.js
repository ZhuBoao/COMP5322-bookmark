var addBtnEvent = function(){
    $("#addUrlBtn").click(function(){
        $.post("add_bms_ajax.php",{"new_url":$("#url")[0].value},function(rtn){
            if(rtn == "true"){
                window.location.reload();
            }
            else{
                window.location.assign("error.php?code=4001")
            }
        })
    })
};

var modalBtnEvent = function(){
    $(".modalBtn").click(function(){
        $("#addModal").modal();
    });
};

var registerBtn = function(){
    modalBtnEvent();
    addBtnEvent();
};

registerBtn();
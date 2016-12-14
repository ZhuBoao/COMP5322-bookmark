var addBtnEvent = function(){
    $("addBtn").click(function(){
        $.post("add_bm_form.php",function(){

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
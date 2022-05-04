$(document).ready(function(){
    var get = null;
    $(".test").hover(function(){
        $("#dropdown").show();
        get = this.text;
    });
    $("#b").click(function(){
        $.ajax({
            type: 'POST',
            url: 'view/product.php',
            data: {gender: this.text, category: get},
            success:function(data){
                console.log(data);
            }
        })
    })

});

function hidedropdown(){
    $(document).ready(function(){
            $("#dropdown").hide();
    });
}
$(document).ready(function(){
    var get = null;
    $(".test").hover(function(){
        $("#dropdown").show();
        get = this.text;
    });
    $(".b").click(function(){
        $.ajax({
            type: 'POST',
            url: 'view/product.php',
            data: {category: this.text, gender: get},
            success:function(data){
                console.log(data);
                window.location.href = "view/product.php";
            }
        })
    })

});

function hidedropdown(){
    $(document).ready(function(){
            $("#dropdown").hide();
    });
}
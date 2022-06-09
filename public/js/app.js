$(document).ready(function(){
    var get = null;
    $(".test").hover(function(){
        $("#dropdown").slideDown("fast");
        get = this.text;
    });
    $(".b").click(function(){
        var t = this.text;
        $.ajax({
            type: 'POST',
            url: 'http://localhost/Alpha/scripts/product-model.php',
            data: {category: this.text, gender: get},
            success:function(data){
                console.log(get.trim() + " " +t.trim());               
                window.location.href = "http://localhost/Alpha/view/product.php";
            }
           
        })
        

    })

   

});

$(".tag-product").click(function(){

    $.ajax({
        type: 'POST',
        url: 'http://localhost/Alpha/view/review-product.php',
        data: {product: this.text},
        success:function(data){
            console.log(data);
            window.location.href = "http://localhost/Alpha/view/review-product.php"
        }
    });
})




var btn = $('#btn-modal');

$('#btn-modal').click(function(){
    $('#modal').show();
})


$('#close').click(function(){
    $('#modal').hide();
})



function hidedropdown(){
    $(document).ready(function(){
            $("#dropdown").hide();
    });
}
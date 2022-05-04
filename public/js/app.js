$(document).ready(function(){
    $("#test").hover(function(){
        $("#dropdown").show();
        console.log(this.text);
    });
    $("#test2").hover(function(){
        $("#dropdown").show();
        console.log(this.text);
    });
    $("#test3").hover(function(){
        $("#dropdown").show();
        console.log(this.text);
    });

    $("#boxing").hover(function(){
        $("#dropdown").show();
        console.log(this.text);
    });
    $("#running").hover(function(){
        $("#dropdown").show();
        console.log(this.text);
    });
  

});

function hidedropdown(){
    $(document).ready(function(){
            $("#dropdown").hide();
    });
}
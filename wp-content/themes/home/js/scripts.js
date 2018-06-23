var notHome;
$(document).ready(function(){
    $("<div/>").load("design .designWrapper", function(){
                $('head').append('<link rel="stylesheet" type="text/css" href="wp-content/themes/design/style.css">');
                $(".wrapper").append(this);
                $(".designWrapper").unwrap();
                $("<div/>").load("photography .photoWrapper", function(){
                    $(".wrapper").append(this);
                    $(".photoContainer").unwrap();
                    
                });
    });
    
    $(document.body).append($('.allModal'));
    notHome = false;
});

$("#home").click(function(){
    $('.homeContainer').stop(true,false).animate({
        left: '30%'
    }, 1500, function(){
        $(".designHead").hide();
        $(".container").hide();
        ;});  
    notHome = false;
}); 
$("#design").click(function(){
    $(window).resize();
    if(notHome){
        
        $('.homeContainer').stop(true,false).animate({
            left: '30%'
        }, 1500, function(){
            $('.container').hide();
            $(".featured").stop(true,false).show();
            $('.homeContainer').stop(true,false).animate({
                left: '130%'
                }, 1500);
            $('.designHead').show();
            $('.designContainer').show();
        });
    }else{
        notHome = true;
        $(".featured").show();
        $('.homeContainer').stop(true,false).animate({
            left: '130%'
        }, 1500);
        $('.designHead').show();
        $('.designContainer').show();
    }
});
$("#photography").click(function(){
    if(notHome){
        
        $('.homeContainer').stop(true,false).animate({
            left: '30%'
        }, 1500, function(){
            $(".pageHead").hide();
            $(".container").hide();
            $(".featured").stop(true,false).show();
            $('.homeContainer').stop(true,false).animate({
                left: '130%'
                }, 1500);
            $('.photoHead').show();
            $('.photoContainer').show();
        });
    }else{
        notHome = true;
        $(".featured").show();
        $('.homeContainer').stop(true,false).animate({
            left: '130%'
        }, 1500);
        $('.photoHead').show();
        $('.photoContainer').show();
    }});      

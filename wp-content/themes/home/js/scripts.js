var notHome;
$(document).ready(function(){
    $("<div/>").load("design .designContainer", function(){
                $('head').append('<link rel="stylesheet" type="text/css" href="wp-content/themes/design/style.css">');
                $(".wrapper").append(this);
                $(".designContainer").unwrap();
                
    });
    $("<div/>").load("photography .photoContainer", function(){
        $('head').append('<link rel="stylesheet" type="text/css" href="wp-content/themes/design/style.css">');
        $(".wrapper").append(this);
        $(".photoContainer").unwrap();
        
    });
    $(document.body).append($('.allModal'));
    notHome = false;
});

$("#home").click(function(){
    $('.homeContainer').stop(true,false).animate({
        left: '30%'
    }, "slow", function(){
    $('.designContainer').stop(true,false).animate({
        opacity: '0'
    }, 1);
    $('.photoContainer').stop(true, false).animate({
        opacity: '0'
    }, 1);});  
    notHome = false;
}); 
$("#design").click(function(){
    if(notHome){
        
        $('.homeContainer').stop(true,false).animate({
            left: '30%'
        }, "slow", function(){
            $('.photoContainer').stop(true, false).animate({
                opacity: '0'
            }, 1);
            $(".featured").stop(true,false).show();
            $('.homeContainer').stop(true,false).animate({
                left: '130%'
                }, "slow");
            $('.designContainer').stop(true,false).animate({
                opacity: '1'
                }, 1);
        });
    }else{
        notHome = true;
        $(".featured").show();
        $('.homeContainer').stop(true,false).animate({
            left: '130%'
        }, "slow");
        $('.designContainer').stop(true,false).animate({
            opacity: '1'
        }, 1);
    }
});
$("#photography").click(function(){
    if(notHome){
        $('.homeContainer').stop(true,false).animate({
            left: '30%'
        }, "slow", function(){
            $('.designContainer').stop(true, false).animate({
                opacity: '0'
            }, 1);
            $(".featured").stop(true,false).show();
            $('.homeContainer').stop(true,false).animate({
                left: '130%'
                }, "slow");
            $('.photoContainer').stop(true,false).animate({
                opacity: '1'
                }, 1);
        });
        
    }else{
        notHome = true;
        $(".featured").show();
        $('.homeContainer').stop(true,false).animate({
            left: '130%'
        }, "slow");
        $('.photoContainer').stop(true,false).animate({
            opacity: '1'
        }, 1);
    }
});          

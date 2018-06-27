var notHome;
$(document).ready(function(){
    $("<div/>").load("design .designWrapper", function(){
                $('head').append('<link rel="stylesheet" type="text/css" href="wp-content/themes/design/style.css">');
                $(".wrapper").append(this);
                $(".designWrapper").unwrap();
                $("<div/>").load("photography .photoWrapper", function(){
                    $(".wrapper").append(this);
                    $(".photoContainer").unwrap(); 
                    $("<div/>").load("podcast .podcastWrapper", function(){
                        $(".wrapper").append(this);
                        $(".podcastContainer").unwrap();
                        $("<div/>").load("journal .journalWrapper", function(){
                            $(".wrapper").append(this);
                            $(".journalContainer").unwrap(); 
                            $('body').css('pointer-events', 'all');
                            $("#loading").remove();
                            $(".wrapper").css('filter', 'blur(0)');
                            $(".navWrapper").css('filter', 'blur(0)');
                        }); 
                    });
                });
    });
    
    $(document.body).append($('.allModal'));
    notHome = false;
});

$("#home").click(homeClick);
$("#design").click(designClick);
$("#photography").click(photoClick);
$("#podcast").click(podcastClick);
$("#journal").click(journalClick);

function homeClick(){
    history.pushState("/", "/", "/");
    $('.homeContainer').stop(true,false).animate({
        left: '30%'
    }, 1500, function(){
        $(".pageHead").hide();
        $(".container").hide();
        ;});  
    notHome = false;
}; 

function designClick(){
    history.pushState("design", "design", "/design/");
    $(window).resize();
    if(notHome){
        
        $('.homeContainer').stop(true,false).animate({
            left: '30%'
        }, 1500, function(){
            $(".pageHead").hide();
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
};


function photoClick(){
    history.pushState("photography", "photography", "/photography/");
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
    }
};

function podcastClick(){
    history.pushState("podcast", "podcast", "/podcast/");
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
            $('.podcastHead').show();
            $('.podcastContainer').show();
        });
    }else{
        notHome = true;
        $(".featured").show();
        $('.homeContainer').stop(true,false).animate({
            left: '130%'
        }, 1500);
        $('.podcastHead').show();
        $('.podcastContainer').show();
    }
};   


function journalClick(){
    history.pushState("journal", "journal", "/journal/");
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
            $('.journalHead').show();
            $('.journalContainer').show();
        });
    }else{
        notHome = true;
        $(".featured").show();
        $('.homeContainer').stop(true,false).animate({
            left: '130%'
        }, 1500);
        $('.journalHead').show();
        $('.journalContainer').show();
    }
};                 

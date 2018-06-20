<!DOCTYPE html>
<html lang="en">

<head>
    <title>Boyu Zhang</title>
	<meta charset="utf-8">

	
    <!-- I'm honestly not sure if bootstrap even uses jquery but the tutorial said to put this here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    

    <!-- load bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"href="wp-content/themes/home/style.css">
</head>

<body>
<div class="navWrapper">
    <div class="container-fluid navContainer">
                <div class="container">
                    <div class="row nav">
                        <div class="col-md-12 active" id="Home" style="z-index:5">
                            <div class="white" >
                                <div class="front">
                                    <h3>Home</h3>
                                </div>
                                <div class="back">
                                    <p>BLAHBLAH BLAH BLAH BLAH BLAH BLAHBLAH</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row nav">
                            <div class="col-md-12" id="design" style="z-index:5">
                            <div class="white" >
                                <div class="front">
                                    <h3>Design</h3>
                                </div>
                                <div class="back">
                                    <p>BLAHBLAH BLAH BLAH BLAH BLAH BLAHBLAH</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row nav">
                        <a href="photography">
                            <div class="col-md-12">
                                <div class="white">
                                    <div class="front">
                                        <h3>Photography</h3>
                                    </div>
                                    <div class="back">
                                        <p>BLAHBLAH BLAH BLAH BLAH BLAH BLAHBLAH</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row nav">
                        <a href="podcasts">
                            <div class="col-md-12">
                                <div class="white">
                                    <div class="front">
                                        <h3>Podcast</h3>
                                    </div>
                                    <div class="back">
                                    <p>BLAHBLAH BLAH BLAH BLAH BLAH BLAHBLAH</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row nav">
                        <a href="journal">
                            <div class="col-md-12">
                                <div class="white">
                                    <div class="front">
                                        <h3>Journal</h3>
                                    </div>
                                    <div class="back">
                                        <p>BLAHBLAH BLAH BLAH BLAH BLAH BLAHBLAH</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
</div>
    <div class="wrapper">
        <div class="container-fluid home">
                    <h3>Boyu Zhang</h3>
                    <p>I'm currently a graphic design student trying to start my career</p>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $("<div/>").load("design .designContainer", function(){
                    $('head').append('<link rel="stylesheet" type="text/css" href="wp-content/themes/design/style.css">');
                    $(".wrapper").append(this);
                    $(".designContainer").unwrap();
                    
        });
        
    });
    $("#design").click(function(){
        $(".featured").show();
        $('.home').animate({
            left: '130%'
        }, "slow");
        $('.designContainer').animate({
            opacity: '1'
        }, 1000);
    });        
    $("#Home").click(function(){
        $('.home').animate({
            left: '30%'
        }, "slow").delay(1000);
        $('.designContainer').animate({
            opacity: '0'
        }, 1000);   
    });        
    </script>
</body>
</html>
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
    <link rel="stylesheet" href="wp-content/themes/design/style.css">
</head>

<body>
        <div class="container-fluid designContainer">
            <div class="container">
                <?php
                $count = 0; 
                while(have_posts()) : the_post();
                    if($count == 0){?>
                        <div class="row">
                            <a data-toggle="modal" data-target="#imgModal<?php echo get_the_ID()?>" style="z-index:10">
                                <div class="col-lg-4">
                                    <div class="imgContainer">
                                        <img class="featured" src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                     </div>
                                </div> 
                            </a>
                            <div class="modal fade allModal" id="imgModal<?php echo get_the_ID()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span class="close" name="betaClose" data-dismiss="modal">&times;</span>
                                                <img src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                                <h2>Hello</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php $count++;
                    }else if($count % 2 == 0){
                        ?>
                        <a data-toggle="modal" data-target="#imgModal<?php echo get_the_ID()?>" style="z-index:10">
                                <div class="col-lg-4">
                                    <div class="imgContainer">
                                        <img class="featured" src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                    </div>
                                </div> 
                            </a>
                            <div class="modal fade allModal" id="imgModal<?php echo get_the_ID()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span class="close" name="betaClose" data-dismiss="modal">&times;</span>
                                                <img class="modalImg" src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                                <h2>Hello</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $count = 0;
                    }else{
                        ?>
                        <a data-toggle="modal" data-target="#imgModal<?php echo get_the_ID()?>" style="z-index:10">
                                <div class="col-lg-4">
                                    <div class="imgContainer">
                                        <img class="featured" src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                    </div>
                                </div> 
                            </a>
                            <div class="modal fade allModal" id="imgModal<?php echo get_the_ID()?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <span class="close" name="betaClose" data-dismiss="modal">&times;</span>
                                                <img src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                                <h2>Hello</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        $count++;
                    }
                endwhile;
                    ?>
        </div>
    </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
            $(".designContainer ").fadeIn("slow");
            $(".featured").fadeIn("slow");
            $("#photography").click(function(){
                $(".wrapper").fadeOut("slow", function(){
                    $(".wrapper").remove();
                    $("body").load("photography");
                    });
            });
    </script>
</body>

</html>
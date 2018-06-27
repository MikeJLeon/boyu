<script>
    window.location.href = "../";
</script>
<div class="designWrapper">
    <div class="pageHead designHead">
        <h2>Design</h2>
    </div>
    <div class="container designContainer">
            <?php
            $count = 0; 
            while(have_posts()) : the_post();
                if($count == 0){?>
                    <div class="row imgRow">
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
                                            <img src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                            <br>
                                            <span class="title">Title:<?php the_title(); ?></span>
                                            <br>
                                            <span class="title">Date:<?php echo get_the_date(); ?></span>
                                            <br>
                                            <span class="title">Summary:<?php echo get_post_meta(get_the_ID(), "summary")[0]; ?></span>
                                            
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
                                        <img src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                        <br>
                                        <span class="title">Title:<?php the_title(); ?></span>
                                        <br>
                                        <span class="title">Date:<?php echo get_the_date(); ?></span>
                                        <br>
                                        <span class="title">Summary:<?php echo get_post_meta(get_the_ID(), "summary")[0]; ?></span>
                                        
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
                                            <img src="<?php echo the_post_thumbnail_url(" large "); ?>">
                                            <br>
                                            <span class="title">Title:<?php the_title(); ?></span>
                                            <br>
                                            <span class="title">Date:<?php echo get_the_date(); ?></span>
                                            <br>
                                            <span class="title">Summary:<?php echo get_post_meta(get_the_ID(), "summary")[0]; ?></span>
                                            
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
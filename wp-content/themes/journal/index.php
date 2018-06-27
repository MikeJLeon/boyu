<script>
    window.location.href = "../";
</script>
<div class="journalWrapper">
    <div class="pageHead journalHead">
        <h2>Journal</h2>
    </div>
    <div class="container journalContainer">
            <?php
            $count = 0; 
            while(have_posts()) : the_post();
            endwhile;
                ?>
    </div>
</div>
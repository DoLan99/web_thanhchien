<div class="main_ct_left f-mpc">
    <div class="fadeOut owl-carousel owl-theme slider">
        <?php foreach ($slides as $slide): ?>
        <div class="item">
            <a href="<?php 
            if($slide->link != null || $slide->link != ''){
                echo $slide->link;
            }else{
                echo "#";
            }
         ?>">
            <img src="<?php echo frontend() ?>images/carousel/<?php echo $slide->image ?>" alt="">
        </a>
        </div>
        <?php endforeach ?>
    </div>
</div>
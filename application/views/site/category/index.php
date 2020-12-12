<div class="lnews_left">
    <h3 class="rs">Tải Game</h3>
        <!-- <div class="main_dl_qr spr">
    <img src="https://cdn.smobgame.com/templates/cokiemtruyenky/images/qrcode0.jpg">
</div> -->
	<div class="cf">
	    <a href="https://apps.apple.com/us/app/th%C3%A0nh-chi%E1%BA%BFn-mobile/id1513122231" class="spr main_dl-btdl main_dl-ios"></a>
	    <a href="https://play.google.com/store/apps/details?id=com.thanhchien3q.congthanh" data-href="" class="spr main_dl-btdl main_dl-gg"></a>    
	</div>
    </div>
<div class="lnews_right">
    <ul class="rs lnews_right_lst cf">
        <li class="<?php echo $slug == 'tin-moi' ? 'active' : '' ?>"><a href="<?php echo base_url() ?>tin-moi">Tin mới</a></li>
		<?php foreach ($categories as $category): ?>
			<li class="<?php echo $slug == $category->slug ? 'active' : '' ?>">
				<a href="<?php echo base_url() . $category->slug ?>">
					<?php echo $category->title ?>
				</a>
			</li>
		<?php endforeach ?>
    </ul>
    <div class="lnews_right_ct">
        <ul class="rs lstNews">
        	<?php foreach ($products_by_category as $product): ?>
            <li>
				<a href="<?php  echo base_url() . $slug . '/' . $product->slug ?>">
					<span class="nThumb"><img src="<?php echo public_url() . 'images/product/' .$product->image ?>" alt=""></span>
					<div class="khungbebe"> 
<!-- 						<img src="http://localhost/game_chien_thuat/public/site_theme/images/ThongTin/khungbe.png" alt="" width="105px" height="84px" > -->
					</div>
					<span class="f-title texthide"> 
						<?php echo $product->title ?>	
					</span>
					<span class="date">
						<?php
							$date = date_create($product->create_at);
							echo date_format($date,"d/m/Y");
						?>
					</span>
					<span class="detail"> 
						<?php echo $product->description ?>	
					</span>
				</a>
			</li>
			<?php endforeach ?>
		</ul>
        <div class="pagination">
            <ul class="rs tc box-page pRel">
                <?php if ($number_page > 1): ?>
					
					<?php if ($page > 2 && $page <= $number_page ): ?>
						<li class="prev">
							<a href="<?php echo base_url() . $slug ?>/trang-<?php echo $page - 1 ?>" rel="prev"></a>
						</li>
					<?php else: ?>
							<li class="prev"></li>
					<?php endif ?>


					<?php for($i = 1; $i<=$number_page; $i++){ ?>
						<?php if ($page == $i): ?>
							<li class="current"><?php echo $i ?></li>
						<?php else: ?>
							<li>
								<a href="<?php echo base_url() . $slug ?>/trang-<?php echo $i ?>"><?php echo $i ?></a>
							</li>
						<?php endif ?>
					<?php } ?>
							
					<?php if ($page >= 1  && $page < $number_page ): ?>
						<li class="next">
							<a href="<?php echo base_url() . $slug ?>/trang-<?php echo $page + 1 ?>" rel="next"></a>
						</li>
					<?php else: ?>
						<li class="next"></li>
					<?php endif ?>

				<?php endif ?>                    
            </ul>
        </div>
    </div>
</div>
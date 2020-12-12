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
    <div class="breadcrumb-b3 cf">
        <div >
            <a href="<?php echo base_url() ?>" itemprop="url">
                <span itemprop="title">Trang chủ </span>
            </a>
            /
        </div>
        <div >
            <a href="<?php echo base_url() . $slug_category ?>" itemprop="url">
                <span itemprop="title"><?php echo $title_category ?></span>
            </a>
            /
        </div>
        <div >
            <span itemprop="title"><?php echo $product_detail->title ?></span>
        </div>
        <span class="fadetext"></span>
    </div>
    <div class="lnews_right_ct">
        <article class="box-detail" itemscope="" itemtype="http://schema.org/Article">
            <div class="box-tittle">
                <h1 class="focus rs" itemprop="name">
                    <?php echo $product_detail->title ?>                    
                </h1>
                <div class="fb-like" data-href="<?php echo base_url(). $slug_category.'/'.$product_detail->slug ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                <span class="m-Itime"> 
                	<?php
						$date_product_detail = date_create($product_detail->create_at);
						echo date_format($date_product_detail,"d/m/Y");
					?>	
				</span>

            </div>
            <div class="dataBody" itemprop="articleBody">
                <?php echo $product_detail->detail ?>
         	</div>
            <div class="dataTag" itemprop="articleTag">
                <span>Tags:
                <?php 
					$tags = explode(', ', $product_detail->tags);
					foreach ($tags as &$tag) {
						echo "<a href='".base_url().$slug_category.'/'.$tag."'>".$tag."</a>";
					}
				?> 
                </span>
            </div>
            <div class="box-cmfb">
            	<div class="fb-comments" data-colorscheme="dark" data-href="<?php echo base_url(). $slug_category.'/'.$product_detail->slug ?>" data-numposts="5" data-width="100%">	
            	</div>
            </div>
        </article>
        <div class="box-other">
            <h2 class="rs s-boxTitle">Tin khác</h2>
            <ul class="rs lstOther">
                <?php foreach ($list_products as $list_product): ?>
					<li>
						<a href="<?php echo base_url() . $list_product->slug_category .'/' . $list_product->slug ?>">
							<span class="f-title texthide"><?php echo $list_product->title ?></span>
							<span class="date"><?php echo $list_product->create_at ?></span>
						</a>
					</li>
				<?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
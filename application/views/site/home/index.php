<div class="main_dl f-mpc">
        <span class="main_dl-ico" style="background: url('<?php echo frontend() ?>images/icon2.png') 0 0 no-repeat"></span>
        <h2 class="rs main_dl-name">Game Thành Chiến Mobile</h2>
    <div class="cf">
        <a href="https://apps.apple.com/us/app/th%C3%A0nh-chi%E1%BA%BFn-mobile/id1513122231" class="spr main_dl-btdl main_dl-ios"></a>
        <a href="https://play.google.com/store/apps/details?id=com.thanhchien3q.congthanh" data-href="" class="spr main_dl-btdl main_dl-gg"></a>    

    </div>
    </div>
<!--     <div class="main_bt f-mmb cf">
        <a href="https://tamquocvuonggia.vn/huong-dan/he-thong-vip-va-dac-quyen" class="main_bt_btn main_bt_vip ">
            <img data-src="https://cdn.smobgame.com/templates/tqvuonggia/images/v1.png" class="lazyload">
        </a>
        <a href="https://playfun.vn/giftcode/tam-quoc-vuong-gia" class="main_bt_btn main_bt_code ">
            <img data-src="https://cdn.smobgame.com/templates/tqvuonggia/images/c1.png" class="lazyload">
        </a>
        <a href="https://nap.funtap.vn/tam-quoc-vuong-gia" class="main_bt_btn main_bt_the ">
            <img data-src="https://cdn.smobgame.com/templates/tqvuonggia/images/n1.png" class="lazyload">
        </a>
    </div> -->
    <div class="main_ct cf">
        <div class="banner_khung">
            <img src="<?php echo frontend() ?>images/khung_Banner.png" alt="" width=100% height="315px" >             
        </div>
        <!-- BEGIN Carousel -->
        <?php $this->load->view('site/home/carousel_home'); ?>
        <!-- END Carousel -->
        

        <div class="main_ct_right">
            <div class="navtabs">
                <ul class="rs cf">
                    <li class="tab1"><a data-href="#tab1" data-tab=".tab1" data-src="/tin-moi">Tin mới</a></li>
                    <li class="tab4"><a data-href="#tab4" data-tab=".tab4" data-src="/tin-tuc">Tin tức</a></li>
                    <li class="tab2"><a data-href="#tab2" data-tab=".tab2" data-src="/su-kien">Sự kiện</a></li>
                    <li class="tab3"><a data-href="#tab3" data-tab=".tab3" data-src="/huong-dan">Hướng dẫn</a></li>

    <!--                 <li class="tab9 f-mpc"><a data-href="#tab9" data-tab=".tab9">HD SGC</a></li> -->

                </ul>
                <a href="javascript:void(0)" class="spr readmore-tab"></a>
            </div>
            <div class="tabs-container">
                <div class="tab-content" id="tab1">
                    <ul class="rs list-posts">
                        <?php foreach ($tin_moi_s as $tin_moi): ?>
                        <li>
                            <a href="<?php echo base_url() . $tin_moi->slug_category .'/' . $tin_moi->slug ?>">
                                <?php echo $tin_moi->title ?>
                            </a>
                            <span class="date">
                                <?php
                                    $date_tin_moi = date_create($tin_moi->create_at);
                                    echo date_format($date_tin_moi,"d/m/Y");
                                ?>
                            </span>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="tab-content" id="tab4" style="display:none">
                    <ul class="rs list-posts">
                        <?php foreach ($tin_tuc_s as $tin_tuc): ?>
                        <li>
                            <a href="<?php echo base_url() . 'tin-tuc/' . $tin_tuc->slug ?>">
                                <?php echo $tin_tuc->title ?>
                            </a>
                            <span class="date">
                                <?php
                                $date_tin_tuc = date_create($tin_tuc->create_at);
                                echo date_format($date_tin_tuc,"d/m/Y");
                                ?>
                            </span>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="tab-content" id="tab2" style="display:none">
                    <ul class="rs list-posts">
                        <?php foreach ($su_kien_s as $su_kien): ?>
                        <li>
                            <a href="<?php echo base_url() . 'su-kien/' . $su_kien->slug ?>">
                                <?php echo $su_kien->title ?>
                            </a>
                            <span class="date">
                                <?php
                                $date_su_kien = date_create($su_kien->create_at);
                                echo date_format($date_su_kien,"d/m/Y");
                                ?>

                            </span>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="tab-content" id="tab3" style="display:none">
                    <ul class="rs list-posts">
                        <?php foreach ($su_kien_s as $su_kien): ?>
                        <li>
                            <a href="<?php echo base_url() . 'su-kien/' . $su_kien->slug ?>">
                                <?php echo $su_kien->title ?>
                            </a>
                            <span class="date">
                                <?php
                                $date_su_kien = date_create($su_kien->create_at);
                                echo date_format($date_su_kien,"d/m/Y");
                                ?>

                            </span>
                        </li>
                        <?php endforeach ?>                                    
                    </ul>
                </div>
<!--             <div class="tab-content" id="tab9" style="display:none">
    <div class="navtabs">
        <ul class="rs cf">
            <li class="tab1 active"><a href="javascript:void(0);">Hướng dẫn Funcard</a></li>
        </ul>
    </div>
    <ul class="rs list-posts">
        <li><a href="https://funcard.vn/huong-dan-mua-the-funcard-online/huong-dan-mua-tai-dai-ly-uy-quyen-trong-nuoc-va-quoc-te-nhat-han-dai-my" target="_blank">Mua thẻ online tại Đại lý ủy quyền chính thức</a></li>
        <li><a href="https://funcard.vn/huong-dan-mua-the-funcard-online/huong-dan-mua-the-tai-cac-trang-web-ung-dung-thuong-mai-dien-tu-shopee-tiki-momo-viettelpay" target="_blank">Mua thẻ online tại trang web/ứng dụng thương mại điện tử (whypay.vn, 365.vtcpay.vn…)</a></li>
        <li><a href="https://funcard.vn/cua-hang#sieu-thi-cua-hang-tien-loi" target="_blank">Funcard.vn - Đặt là có - ship thẻ tận nhà Toàn Quốc</a></li>
        <li><a href="https://funcard.vn/huong-dan-mua-the-funcard-offline/huong-dan-tim-diem-ban-the-tren-toan-quoc" target="_blank">Tra cứu điểm bán thẻ - Funcard chính thức phủ sóng trên 10.000 điểm bán trên Toàn Quốc. </a></li>
        <li><a href="https://funcard.vn/huong-dan-nap-the-funcard/nap-tai-nap-funtap-vn" target="_blank">Hướng dẫn nạp thẻ Funcard</a></li>
    </ul>
</div> -->
            </div>
        </div>
    </div>

<div class="main_2">
    <!-- BEGIN MAIN 2 -->
        <?php $this->load->view('site/home/main2'); ?>
    <!-- END MAIN 2 -->
</div>
<div class="main_ba f-mpc">
    <div class="main_3-title"></div>
    <div id="accordion" class="fixCen cf">
        <div class="panelx panel1 active">
            <div class="pink"></div>
            <div class="panelContent p1"></div>
        </div>
        <div class="panelx panel2">
            <div class="pink"></div>
            <div class="panelContent p1"></div>
        </div>
        <div class="panelx panel3">
            <div class="pink"></div>
            <div class="panelContent p1"></div>
        </div>
        <div class="panelx panel4">
            <div class="pink"></div>
            <div class="panelContent p1"></div>
        </div>
        <div class="panelx panel5">
            <div class="pink"></div>
            <div class="panelContent p1"></div>
        </div>
    </div>
</div>
<div class="f-mmb main_bb">
    <div class="main_3-title"></div>
    <?php $this->load->view('site/home/carousel'); ?>
</div>
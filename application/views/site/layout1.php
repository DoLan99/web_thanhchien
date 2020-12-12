
<!DOCTYPE html>
<html lang="vi">
<head>
    <?php $this->load->view('site/head'); ?>			
</head>
<body class="pageNews">
<!-- 	<div class="ads-wrapper">
	<div name="funtap-ads"
		 data-app-key="WebLanding.tam-quoc-vuong-gia"
		 data-inventory-code="WebLanding.tam-quoc-vuong-gia.Inventory2"
		 style="max-width: 768px; margin: 0px auto;"></div>
	</div> -->
	<div id="loading" style="display: none" class="f-loading cnt"></div>
	    <div class="f-container">
        <div class="overlay"></div>
    <header class="header">
        <?php $this->load->view('site/header'); ?>
    </header>
    <main class="main fixCen cf">
        <?php $this->load->view($temp); ?>    
    </main>
    </div>

<!-- 	<div name="funtap-ads"
		 data-app-key="WebLanding.tam-quoc-vuong-gia"
		 data-inventory-code="WebLanding.tam-quoc-vuong-gia.Inventory1"
		 style="width: 100%; max-width: 351px; height: 61px; position: relative; background-color: transparent; display: inline-block;"
		 class="banner-bottom">     
    </div>

	<div id='5ee83ff6d0c77900107e9656' class='banner-bottom'>  
    </div> -->
    <script src='https://storage.googleapis.com/prod-adsfun/scripts/index-v3.bundle.js' type='text/javascript'>
        
    </script>
    <style>
	@media (min-width: 768px){
		.ads-wrapper {
			display: none;
		}
	}
    </style>
    <footer class="footer">
        <?php $this->load->view('site/footer'); ?>
    </footer>
    <div class="box-cnhd cf">
        <a href="https://www.facebook.com/thanhchienvietnam" target="_blank" class="btn-cnm btn-cnm3">Giftcode</a>
        <a href="http://onelink.to/p8ba6v" target="_blank" class="btn-cnm btn-cnm41">Tải game</a>
        <a href="https://pay.vntac.vn/recharge" target="_blank" class="btn-cnm btn-cnm5">Nạp tiền</a>
        <a href="https://www.facebook.com/thanhchienvietnam" target="_blank" class="btn-cnm btn-cnm6">Hỗ Trợ</a>
    </div>
    <div class="background-video">
        <div class="modal-video">
            <iframe src="https://www.youtube.com/embed/Vsnmxf9XyMI" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>       
            </iframe>
        </div>
    </div>    
    <?php $this->load->view('site/footerjs'); ?>
	</body>
</html>

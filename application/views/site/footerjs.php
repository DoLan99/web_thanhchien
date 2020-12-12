<script type="text/javascript" src="<?php echo frontend() ?>js/jquery-3.5.1.min.js">   
</script>
<script type="text/javascript" src="<?php echo frontend() ?>uncommon/all-bootrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo frontend() ?>uncommon/navtop-login/js/all.js"></script>
<script type="text/javascript" src="<?php echo frontend() ?>js/owl.carousel2.2.js"></script>
<script type="text/javascript" src="<?php echo frontend() ?>js/lazysizes.min.js"></script>
<script type="text/javascript" src="<?php echo frontend() ?>js/main.js"></script>
<style>
  .sidebar-right1 {
    position: fixed;
    top: 20%;
    right: 15px;
    width: 217px;
    height: 424px;
    background: url('<?php echo frontend('images/bg-sidebar.png') ?>');
    padding: 75px 17px 10px;
    text-align: center;
    z-index: 1;
    transition: right 1s ease-in-out;
  }
  .like-share-fb {
    margin-top: 5px;
  }
  .sb-social {
    margin-top: 10px;
  }
  .btn-optimize {
    display: inline-block;
    width: 24px;
    height: 46px;
    background: url('<?php echo frontend('images/sb-bg-arrow.png') ?>');
    position: absolute;
    top: 80px;
    left: -12px;
    padding: 7px 5px;
  }
  .sb-arrow {
    display: block;
    width: 16px;
    height: 29px;
    background: url('<?php echo frontend('images/sb-arrow-right.png') ?>');
  }
  .to-open .sb-arrow {
    background: url('<?php echo frontend('images/sb-arrow-left.png') ?>');
  }
  .d-block {
    display: block!important;
  }
  .btn-taigame {
    height: 50px;
    color: #fff;
    text-align: center;
    margin-top: 1px;
    line-height: 50px;
  }
  .blink {
    animation: blink 1.2s linear infinite;
  }
  .btn-naptien {
    height: 50px;
    color: #fff;
    text-align: center;
    line-height: 50px;
  }
</style>

    <!-- <div class="fixed-box">
        <a href="https://playfun.vn/giftcode/tam-quoc-vuong-gia" class="giftcode">Giftcode</a>
        <a href="https://playfun.vn/ho-tro/" class="hotro" target="_blank">Mua thẻ</a>
        <a href="https://nap.funtap.vn/tam-quoc-vuong-gia" class="napthe" target="_blank">Nạp thẻ</a>
        <a href="javascript:void(0)" class="spr_gc toggle-box open"></a>
    </div> -->
    <div class="sidebar-right1">
        <a href="javascript:void(0)" class="btn-optimize">
          <span class="sb-arrow"></span>
        </a>
        <a href="#" class="d-block">
          <img src="<?php echo frontend('images/icon_right.png') ?>" alt="">
        </a>
        <a href="http://onelink.to/twdruz" class="btn-taigame d-block">Tải game
        </a>
        <a href="https://pay.vntac.vn/recharge" class="btn-naptien d-block blink" target="_blank">Nạp tiền
        </a>
        <div class="like-share-fb">
          <div class="fb-like" data-href="https://www.facebook.com/tranvuongtruyenky" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true">
          </div>
        </div>
        <div class="sb-social">
          <a href="/"><img src="<?php echo frontend('images/sb-icon-home.png') ?>" alt=""></a>
          <a href="https://www.facebook.com/tranvuongtruyenky" target="_blank">
            <img src="<?php echo frontend('images/sb-icon-fb.png') ?>" alt="">
          </a>
          <a href="https://www.youtube.com/embed/Vsnmxf9XyMI" target="_blank">
            <img src="<?php echo frontend('images/sb-icon-yt.png') ?>" alt="">
          </a>
        </div>
        <a href="#cont-header" class="backtotop">TOP</a>
    </div>
    <script> 
      $(document).ready(function () {  
        $('.btn-optimize').click(function () { 
          $(this).toggleClass('to-open'); 
          if($(this).hasClass('to-open')){ 
            $('.sidebar-right1').css('right', '-196px'); 
          }else{ 
            $('.sidebar-right1').css('right', '15px'); 
          } 
        }); 
      }); 
    </script>		
<!-- <div id="adpop" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="box-adpop cnt">
		<a href="javascript:void(0)" class="mdl-close" data-dismiss="modal" aria-label="Close">x</a>

		<a href="https://banghoi.playfun.vn/?redirected=true" target="_blank">
            <img src="https://cdn.smobgame.com/templates/62/5fa1379f6e3ef.png" >
        </a>
	</div>
</div> -->

<script>
    $(window).on('load', function(){
        var id = Cookies.get('35.201.190.202');
        if (typeof id === 'undefined' || typeof id != 'string'){
            $('#adpop').modal('show');
        }
    });
    $(document).ready(function() {
        var inFifteenMinutes = new Date(new Date().getTime() + 180 * 60 * 1000);
        $('#adpop').on('hidden.bs.modal', function (e) {
            Cookies.set('35.201.190.202', 'in_view', { expires: inFifteenMinutes })
        });
        $('.box-adpop a').click(function() {
            $('#adpop').modal('hide');
        })
    });
</script>
<div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="173047716714401"
    logged_in_greeting="Chúa Công cần hỗ trợ vấn đề gì ạ?"
    logged_out_greeting="Chúa Công cần hỗ trợ vấn đề gì ạ?">
    </div>
    <script src="<?php echo frontend() ?>js/jquery-yys-slider.js" async></script>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = './connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=415180942295616';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1384737661727585');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1384737661727585&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-824268859"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-824268859');
</script>
<div class="modal fade" id="cms" tabindex="-1" role="dialog" aria-labelledby="cms" aria-hidden="true">
    <div class="box-cms">
        <a href="javascript:void(0);" class="closeModal" data-dismiss="modal">&times;</a>
        <p class="rs">Coming Soon! </p>
    </div>
</div>
$(document).ready(function(){
    if ($('.slider').length > 0){
        $('.slider').owlCarousel({
            loop:true,
            autoplay: true,
            autoplayTimeout:5000,
            singleItem: true,
            transitionStyle : "fade",
            items:1,
            nav:false
        });
    }
    // var height = $('.lnews_right').height();
    // $('.lnews_left').css({
    //     'height': height
    // });
    // if ($('.dataBody img').length > 0){
    //     $('.dataBody img').each(function(){
    //         if ($(this).attr('src').indexOf('http:') == 0){
    //             var src = $(this).attr('src').replace('http:','https:');
    //             $(this).attr('src',src);
    //         }
    //     })
    // }
    $('.tab_content').hide();
      $('.tab_content:first').show();
      $('.tabs li:first').addClass('active');
      $('.tabs li').click(function(event) {
        $('.tabs li').removeClass('active');
        $(this).addClass('active');
        $('.tab_content').hide();

        var selectTab = $(this).find('a').attr("data-href");

        $(selectTab).fadeIn();
      });
    
    $('#trailer').on('show.bs.modal', function (e) {
        $('#f-video').append('<iframe width="800" height="450"  src="https://www.youtube.com/embed/Rk8RHFhdEF8?rel=0&amp&autoplay=1;showinfo=0" frameborder="0" allowfullscreen></iframe>')
    });
    $('#trailer').on('hidden.bs.modal', function (e) {
        $('#f-video  iframe').remove();
    });
    if ($('.navtabs').length > 0){
        $(function(){
            $('.navtabs li').first().addClass('active');
            $('.tabs-container .tab-content').first().show();
            var $src = $('.navtabs li').first().children('a').attr('data-src');
            $('.navtabs').children('.readmore-tab').attr('href',$src);

            $('.navtabs li').find('a').on('click',function(){
                if(!$(this).closest('li').hasClass('active')) {
                    $('.navtabs').find('li').removeClass('active');
                    $src = $(this).attr('data-src');
                    var $tab = $(this).attr('data-tab');
                    $('.navtabs ul').children($tab).addClass('active');
                    $('.navtabs').children('.readmore-tab').attr('href',$src);
                    $('.tabs-container').find('.tab-content').hide();
                    var $selected_tab = $(this).attr("data-href");
                    $($selected_tab).show();
                }
                return false;
            })
        });
    }
    $('.nav-icon').click(function(){
        $(".overlay").fadeToggle(200);
        $(this).toggleClass('open');
        $('body').toggleClass('open')
    });
    $('.overlay').on('click', function(){
        $(".overlay").fadeToggle(200);
        $(".nav-icon").toggleClass('open');
        $('body').toggleClass('open');
        open = false;
    });
    $(window).resize(); 
});
$(".toggle-box").click(function () {
        if ($(".toggle-box").hasClass("open")) {
            $(".fixed-box").stop().animate({"right": "-210px"}, 500);
            $(".toggle-box").removeClass("open");
        }
        else {
            $(".fixed-box").stop().animate({"right": "0"}, 500);
            $(".toggle-box").addClass("open");
        }
    });
    $(window).resize();
$(window).resize(function () {
    var widthWindow = $(this).width();
    if (widthWindow > 1025) {
        window.state = 'mto';
    } else if (widthWindow <= 1024) {
        window.state = 'mthuong';
    }  else if (widthWindow > 960) {
        window.state = 'mtab';
    }
    fullpageInit();
    slider();
});
function slider(){
    $('.owl-hero').owlCarousel({
        autoPlay: 8000,
        pagination: false,
        nav:true,
        items:1,
        loop:true
    });
}
function fullpageInit () {
    switch (window.state) {
        case 'mto':
            activePanel = $("#accordion .panelx:first");
            $(activePanel).addClass('active');
            $("#accordion").delegate('.panelx', 'click', function(e){
                if( ! $(this).is('.active') ){
                    $(activePanel).animate({width: "119px"}, 500);
                    $(this).animate({width: "664px"}, 500);
                    $('#accordion .panelx').removeClass('active');
                    $(this).addClass('active');
                    activePanel = this;
                };
            });
            break;
        case 'mthuong':
            activePanel = $("#accordion .panelx:first");
            $(activePanel).addClass('active');
            $("#accordion").delegate('.panelx', 'click', function(e){
                if( ! $(this).is('.active') ){
                    $(activePanel).animate({width: "119px"}, 500);
                    $(this).animate({width: "524px"}, 500);
                    $('#accordion .panelx').removeClass('active');
                    $(this).addClass('active');
                    activePanel = this;
                };
            });
            break;
    }
}

$(document).ready(function($) {
  $('.char-item').hide();
  $('.char-item:first').show();
  $('.sl:first').addClass('active');
  $('.more').attr('href',$('.sl:first').attr("data-url"));
  $('.sl').click(function(event) {
    $('.sl').removeClass('active');
    $('.more').attr('href','');
    var url = $(this).attr("data-url");
    $('.more').attr('href',url);
    $(this).addClass('active');

    $('.char-item').hide();

    var select = $(this).attr("data-href");

    $(select).fadeIn();
  });
});

function parseJson(result) {
    data = (typeof  result === "object") ? result : JSON.parse(result);
    return data;
}
$(document).ready(function(){
    $('.main_dl_bxh').click(function(){
        getRank();
    });
});
function getRank(){
    $.ajax({
        type: "get",
        url: 'https://tamquocvuonggia.vn/TamQuocVG/getRankPowerVG',
        dataType: "json",
        async: false,
        context: this,
        success: function(result) {
            var dataResult = parseJson(result);
            if (dataResult.status != 200) {
                return false;
            }
            listRank = dataResult.data;
            $('#view-rank').html('');
            listRank.forEach(function(value,key) {
                // console.log(key);
                var viewRank = "<tr><td>"+ parseInt(key+1) +"</td><td>" +value.name+ "</td><td>" +value.serverName+ "</td><td>" +value.power+ "</td></tr>";
                $('#view-rank').append(viewRank);
            });
        },
        error: function(){
            $('#view-rank').html('');
        }
    });
}


$('.icon-modal-video').click(function(){
    $('.background-video').addClass('open-modal')
})

$('.background-video').click(function(){
    $(this).removeClass('open-modal')
})
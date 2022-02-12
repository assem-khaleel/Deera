$(document).ready(function(){

    $('.selectyze2').Selectyze({
        theme : 'mac'
    });


});


// You can also use "$(window).load(function() {"
$(function () {

    // Slideshow 1
    $("#slider1").responsiveSlides({
        auto: true,
        pager: false,
        nav: false,
        speed: 1500,
        timeout:4E3,
        namespace: "centered-btns"
    });
});

$(document).ready(function(){
    $('.carousel').carousel({
        pause: "false",
        interval : 13000,

    });
});




// $('#imageId').attr('src','/assets/website/images/emad/');


function showDropdownIcon() {
	$('.actions_area.full-width ul').show();
    $("#downArrowForMenuShopDetail").show();
    $("#upArrowForMenuShopDetail").hide();
}

$('.actions_area.full-width').prepend('<div id="showbt" onclick="hideDropdownIcon();">'+$('#menuItemShopName').text()+' <img id="downArrowForMenuShopDetail" src="/assets/website/images/mobile/accor.png"></div>');

//$('.logo img').attr('src','/assets/website/images/mobile/logo.png');


function hideDropdownIcon() {
	$('.actions_area.full-width ul').hide();
    $("#downArrowForMenuShopDetail").hide();
    $("#upArrowForMenuShopDetail").show();
}

$('.actions_area.full-width').prepend('<div id="hidebt" onclick="showDropdownIcon();"><img  id="upArrowForMenuShopDetail"   style="display:none;" src="/assets/website/images/mobile/accorUP.png"></div>');




			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
				showLeft = document.getElementById( 'showLeft' ),
				showRight = document.getElementById( 'showRight' ),
				showTop = document.getElementById( 'showTop' ),
				showBottom = document.getElementById( 'showBottom' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showBottom.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuBottom, 'cbp-spmenu-open' );
				disableOther( 'showBottom' );
			};
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}
				if( button !== 'showTop' ) {
					classie.toggle( showTop, 'disabled' );
				}
				if( button !== 'showBottom' ) {
					classie.toggle( showBottom, 'disabled' );
				}
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}

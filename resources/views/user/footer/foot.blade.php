<!--jQuery-->
<script src="{{ asset('user/js/jquery-2.2.3.min.js') }}"></script>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

	<!--search jQuery-->
	<script src="{{ asset('user/js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('user/js/classie-search.js') }}"></script>
	<!--<script src="{{ asset('user/js/demo1-search.js') }}"></script> -->
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="{{ asset('user/js/minicart.js') }}"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>

	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>

	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->
	<!-- carousel -->
	<!-- price range (top products) -->
	<script src="{!! asset('user/js/jquery-ui.js') !!}"></script>
		<script>
			//<![CDATA[
			$(window).load(function () {
				var max = $("#end_price").val();
				var min = $("#start_price").val();
				var max_range = $("#end_price_range").val();
				var min_range = $("#start_price_range").val();
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: max_range,
					values: [min, max],
					slide: function (event, ui) {
						$("#amount").val( ui.values[0] +" VND" + " - " + ui.values[1]+ " VND");
						$("#start_price").val(ui.values[0]);
						$("#end_price").val(ui.values[1]);
					}
				});
				$("#amount").val( $("#slider-range").slider("values", 0)+" VND" + " - " + $("#slider-range").slider("values", 1)+ " VND" );

			}); //]]>
		</script>
	<!--// Count-down -->
	<script src="{{ asset('user/js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->
		<!-- single -->
		<script src="{!! asset('user/js/imagezoom.js') !!}"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="{!! asset('user/js/easy-responsive-tabs.js') !!}"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="{!! asset('user/js/jquery.flexslider.js') !!}"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="{{ asset('user/js/move-top.js') }}"></script>
    <script src="{{ asset('user/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear'
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="{{ asset('user/js/bootstrap.js') }}"></script>
	<!-- js file -->
	<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110867918123999");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110867918123999");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
   <!-- Messenger Plugin chat Code -->
   <div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "110867918123999");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>
<div style ="">


<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v12.0'
	});
  };

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script>
			function saveSearch(){
				$('#form-search').submit();
			}
</script>
<script type="text/javascript">
    $('#keywords').keyup(function(){
        var query = $(this).val();
     // alert(query);
          if(query != '')
            {
             var _token = $('input[name="_token"]').val();

             $.ajax({
              url:"{{route('user.autocomplete_ajax')}}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#search_ajax').fadeIn();
                $('#search_ajax').html(data);
              }
             });

            }else{
                $('#search_ajax').fadeOut();
            }
    });

    $(document).on('click', '.li_search_ajax', function(){
        $('#keywords').val($(this).text());
        $('#search_ajax').fadeOut();
    });
</script>
<script>
        $("#submitBinhLuan").click(function(){
            $.ajax({
                url: "{{route('postComment')}}",
                type: 'POST',
                data:{
                    "_token":'{{csrf_token()}}',
                    "idKH": $("#inputid_user").val(),
                    "HoTen":$("#inputname").val(),
                    "idSach":$("#inputid_sanpham").val(),
                    "NoiDung":$("#inputcontent").val(),
                    "TrangThai":$("#inputtrangthai").val(),
                    },
             }).done(function(reponse){
				$("#inputcontent").val('');
				document.getElementById('duyetbinhluan').hidden = false;
                alertify.success(reponse);
             });
        });
    </script>
	<script>
		function AddCart(e){
			var soluong = $('#So_Luong_SP').val();

			if(soluong != null){
				var num = soluong;
			}

			else{
				var num = 1;
			}
                $.ajax({
                    url: "{{ route('account.addcart') }}",
                    type:'POST',
                    data: {Id_Sach: e, So_Luong: num, _token: '{{ csrf_token() }}' },
                    success: function(data) {
						toastr.success('???? th??m s???n ph???m v??o gi??? h??ng');
						$(".count").html(data);
                    }
                });
		}
	</script>


<script>

	function UpdateCart(id, slmax){

			var soluong = $('#So_Luong' + id).val();
			if(soluong > 0 && soluong <= 50){
				var num = soluong;
				$.ajax({
                    url: "{{ route('account.updatecart') }}",
                    type:'POST',
                    data: {Id_Cart: id, So_Luong: num, _token: '{{ csrf_token() }}' },
                    success: function(data) {
						//alertify.alert(data);
						//$(".count").html(data);
						toastr.success('C???p nh???t th??nh c??ng');
						setTimeout(function(){ 	location.reload(); }, 2000);

						//aletify.success(data);
                    }
                });
			}
			else if(soluong>slmax){
				toastr.warning('S??? l?????ng s???n ph???m trong kho kh??ng ?????');
			}
			else if(soluong>50){
				toastr.warning('S??? l?????ng kh??ng ???????c v?????t qu?? 50 s???n ph???m');
			} else if(soluong==0){
            toastr.warning('S??? l?????ng kh??ng ???????c nh??? h??n 0');
           }

		}
		function DeleteCart(id){


                $.ajax({
                    url: "{{ route('account.cartdelete') }}",
                    type:'DELETE',
                    data: {Id_Cart: id, _token: '{{ csrf_token() }}' },
                    success: function(data) {
						//alertify.alert(data);
						//$(".count").html(data);
						toastr.success('Xo?? s???n ph???m th??nh c??ng');
						setTimeout(function(){ 	location.reload(); }, 2000);


						//aletify.success(data);
                    }
                });
		}
	</script>
	<script>
		function Favorite(e){
                $.ajax({
                    url: "{{ route('user.accountheart') }}",
                    type:'POST',
                    data: {IdSach: e, _token: '{{ csrf_token() }}' },
                    success: function(data) {
						toastr.success('Th??m s???n ph???m y??u th??ch th??nh c??ng');
						setTimeout(function(){ 	location.reload(); }, 2000);
                    }
                });
		}
		function DeleteFavorite(e){
			var tablefavorite = document.getElementById("favorite-book");
                $.ajax({
                    url: "{{ route('user.deleteheart') }}",
                    type:'POST',
                    data: {id: e, _token: '{{ csrf_token() }}' },
                    success: function(data) {
						toastr.success('Xo?? s??ch th??nh c??ng...!');
						setTimeout(function(){ 	location.reload(); }, 2000);
                    }
                });
		}
		function InputCoupon(){
			$('#coupon-error').attr('hidden', true);
		}
		function CheckDiscount(){
			var code = $('#coupon').val();
			var priceOriginal = parseInt($('#priceOriginal').val());
			var feeship = parseInt($('#fee_ship').val());
                $.ajax({
                    url: "{{ route('user.check-discount') }}",
                    type:'POST',
                    data: {code: code, priceOriginal: priceOriginal, _token: '{{ csrf_token() }}' },
                    success: function(data) {
						if(data == false){//m?? code sai

							$('#coupon-error').attr('hidden', false); //hi???n th??? th??ng b??o m?? code sai
						}else{//m?? code ????ng
							$('#div_num_discount').attr('hidden', false); //hi???n th??? s??? ti???n gi???m
							$('#num_discount').html(formatVND(data));//hi???n th??? s??? ti???n gi???m
							$('#total-money').html(formatVND(calculateMoney(data))); //t??nh to??n l???i t???ng ti???n (calculateMoney), fomart ti???n (formatVND)
							disableCheckCoupon(); //kh??ng cho nh???p ti???p. hi???n n??t h???y
						}

						//$('#num_discount').value = data;
                    }
                });
		}
		function calculateMoney(coupon){
			var priceOriginal = parseInt($('#priceOriginal').val()); //l???y gi?? g???c t??? th??? input ???n
			var feeship = parseInt($('#fee_ship').val()); //l???y ship t??? th??? input ???n
			var c = parseInt(coupon);
			return priceOriginal - c + feeship;

		}
		function formatVND(money){ //h??m format ti???n
			var formatter = new Intl.NumberFormat('it-IT', {
				style: 'currency',
				currency: 'VND',

				});

		return formatter.format(money).replace('VND', 'VN??');
		}
		function disableCheckCoupon(){
			$('#btn_check_coupon').attr('hidden', true);  //???n n??t ki???m tra code
			$('#coupon').attr('disabled', true);  //k cho nh???p th??? input code
			$('#btn_remove_coupon').attr('hidden', false); //hi???n n??t h???y
		}
		function EnableCheckCoupon(){ //onClick c???a nut h???y
			$('#btn_check_coupon').attr('hidden', false); // hi???n n??t ki???m tra code
			$('#coupon').attr('disabled', false); // cho nh???p th??? input code
			$('#btn_remove_coupon').attr('hidden', true); //???n n??t h???y

			var priceOriginal = parseInt($('#priceOriginal').val());
			var feeship = parseInt($('#fee_ship').val()); //l???y ship t??? th??? input ???n
			$('#total-money').html(formatVND(priceOriginal + feeship)); //set l???i gi?? g???c
			$('#div_num_discount').attr('hidden', true); //???n th??? s??? ti???n gi???m gi??

		}

		</script>

<script>
	function InvalidMsg(textbox) {
    if (textbox.value === '') {
        textbox.setCustomValidity('Vui L??ng Nh???p ?????a Ch???');
    } else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    } else {
       textbox.setCustomValidity('');
    }

    return true;
}
</script>

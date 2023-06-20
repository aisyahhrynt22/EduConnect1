
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>AgenMGM</title>

	<link rel="stylesheet" href="https://studentdesk.uai.ac.id/file/shell/amanda/css/style.default-3.css?a=12" type="text/css" />
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery.cookie.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery.flot.min.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/plugins/jquery.slimscroll.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/custom/general.js"></script>
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/shell/amanda/js/custom/dashboard.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="https://studentdesk.uai.ac.id/shell/amanda/js/plugins/excanvas.min.js"></script><![endif]-->
	<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="https://studentdesk.uai.ac.id/file/shell/amanda/css/style.ie9.css"/>
<![endif]-->
	<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="https://studentdesk.uai.ac.id/file/shell/amanda/css/style.ie8.css"/>
<![endif]-->
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

	<!-- Notyfy -->
	<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/js/notyfy/jquery.notyfy.js"></script>
	<link rel="stylesheet" href="https://studentdesk.uai.ac.id/file/js/notyfy/jquery.notyfy.css" />
	<link rel="stylesheet" href="https://studentdesk.uai.ac.id/file/js/notyfy/themes/default.css" />

	<style>
		.notyfy_wrapper.notyfy_primary {
			background: none repeat scroll 0 0 #d10707;
			border: medium none;
		}

		.vernav2 {
			top: unset;
		}

		#notifikasi_tagihan {
			/* animation properties */
			-moz-transform: translateX(100%);
			-webkit-transform: translateX(100%);
			transform: translateX(100%);

			-moz-animation: my-animation 15s linear infinite;
			-webkit-animation: my-animation 15s linear infinite;
			animation: my-animation 15s linear infinite;
		}

		/* for Firefox */
		@-moz-keyframes my-animation {
			from {
				-moz-transform: translateX(100%);
			}

			to {
				-moz-transform: translateX(-100%);
			}
		}

		/* for Chrome */
		@-webkit-keyframes my-animation {
			from {
				-webkit-transform: translateX(100%);
			}

			to {
				-webkit-transform: translateX(-100%);
			}
		}

		@keyframes my-animation {
			from {
				-moz-transform: translateX(100%);
				-webkit-transform: translateX(100%);
				transform: translateX(100%);
			}

			to {
				-moz-transform: translateX(-100%);
				-webkit-transform: translateX(-100%);
				transform: translateX(-100%);
			}
		}
	</style>
	<script>
		idleTime = 23;
		var pesan = '';
		timerIncrement();
		$(document).ready(function() {
			var idleInterval = setInterval('timerIncrement()', 1800000); // 3 minute
			$(this).mousemove(function(e) {
				idleTime = 23; //durasi 20 menit +itersi
			});
			$(this).keypress(function(e) {
				idleTime = 23;
			});
		});

		function timerIncrement() {
			$.ajax({
				type: 'post',
				url: 'https://studentdesk.uai.ac.id/login/update_last_activity',
				data: {
					et: idleTime,
					user_id: '0102520053'
				},
				dataType: 'json',
				success: function(dt) {
					idleTime = dt.last_time;
					if (dt.jml_message > 0 && pesan != dt.last_restricted) {
						$("#notyfy_container_bottomRight").remove();
						pesan = dt.last_restricted;
						var n = notyfy({
							text: dt.last_restricted,
							type: 'primary',
							dismissQueue: true,
							layout: 'bottomRight',
							theme: 'defaultTheme',
							buttons: [{
								addClass: '1stdbtn 1btn_red',
								text: 'Tutup',
								onClick: function($noty) {
									$noty.close();
									hide_notif();
								}
							}]
						});


					}
				}
			});
			var namaurl = 'main';
			// sudah habis waktunya
			if (idleTime <= 0 && namaurl != 'login') {
				window.location.replace('https://studentdesk.uai.ac.id/login/logout');
			}
		}

		function hide_notif() {
			//alert("123");
			$.ajax({
				type: 'post',
				url: 'https://studentdesk.uai.ac.id/login/hide_notif',
				data: {
					user_id: '0102520053'
				},
				dataType: 'json',
				success: function() {

				}
			});
		}
	</script>
</head>

<body class="withvernav">
		<div class="bodywrapper">
		<div class="topheader">
			<div class="left">
				<h1 class="logo"><span>Agen</span></h1>

				<br clear="all" />

			</div>
			<!--left-->

			<div class="right">
				<div class="notification">

										

				</div>
				<div class="userinfo">
					<span>0102520053 || Ainut Toriqun Najah</span>
				</div>
				<!--userinfo-->

				<div class="userinfodrop">
					<div class="avatar">
						<a href="#" id='divFotoAvatar'><img src="https://studentdesk.uai.ac.id/file/images/mhs/0102520053.jpg?r=679176690" width="90" /></a>

					</div>
					<!--avatar-->
					<div class="userdata">
						<h4>Ainut Toriqun Najah</h4><br>
						<span class="email">0102520053 | Informatika 2020</span>
						<span class="email"></span>
						<ul>
							<li><a href="https://studentdesk.uai.ac.id/biodata/LihatBiodata">Lihat Biodata</a></li>
							<li><a href="https://studentdesk.uai.ac.id/login/logout">Log Out</a></li>
						</ul>
					</div>
					<!--userdata-->
				</div>
				<!--userinfodrop-->
			</div>
			<!--right-->
		</div>
		<!--topheader-->


		<div class="header">
			<ul class="headermenu">
								<li  class="current" ><a href="https://studentdesk.uai.ac.id/"><span class="icon icon-flatscreen"></span>Dashboard</a></li>

				
				<li><a href='https://studentdesk.uai.ac.id/ijazah'><span class='icon icon-chart'></span>Pengambilan Ijazah</a></li><li><a href='https://studentdesk.uai.ac.id/permintaan/FormulirPermintaan'><span class='icon icon-message'></span>Permintaan Surat</a></li><li><a href='https://studentdesk.uai.ac.id/krs/JadwalKuliahProdi'><span class='icon icon-schedule'></span>Jadwal Kuliah Prodi</a></li><li><a href='https://studentdesk.uai.ac.id/krs/ChatOnline'><span class='icon icon-chat'></span>Chat Online</a></li><li><a href='https://studentdesk.uai.ac.id/baca_quran'><span class='icon icon-quran'></span>Test Baca Al-Quran</a></li><li><a href='https://studentdesk.uai.ac.id/akademik/PusatDownload'><span class='icon icon-download'></span>Pusat Download</a></li><li><a href='https://studentdesk.uai.ac.id/kkn' target='_blank'><span class='icon icon-schedule'></span>KKN</a></li><li><a href='https://studentdesk.uai.ac.id/bimbingan_ta' target='_blank'><span class='icon icon-pencil'></span>BIMBINGAN TA</a></li><li><a href='https://studentdesk.uai.ac.id/mbkm' target='_blank'><span class='icon icon-chart'></span>MBKM</a></li>			</ul>

			<div class="headerwidget">
				<div class="earnings">

					<div class="one_fourth alignright">
						<h4>&Sigma; SKS A/B/C</h4>
						<h2>112</h2>
					</div>
					<!--one_half-->

					<div class="one_fourth last alignright">
						<h4>IPK<br />&nbsp;</h4>
						<h2>3.60</h2>
					</div>
					<!--one_half-->
					<div class="one_fourth last alignright">
						<h4>Nilai UET</h4>
												<h2><a href='https://studentdesk.uai.ac.id/UAIEnglishTest/nilai' style='color:#F6E4A5;'><u></u></a></h2>
					</div>
					<!--one_half last-->

					<div class="one_fourth last alignright">
						<h4>Nilai Tilawah</h4>
												<h2><a href='https://studentdesk.uai.ac.id/baca_quran' style='color:#F6E4A5;'><u></u></a></h2>
					</div>
					<!--one_half last-->


				</div>
				<!--earnings-->
			</div>
			<!--headerwidget-->
		</div>
		<!--header-->
					<div class="vernav2 iconmenu">
				<ul>
					<li><a href="https://studentdesk.uai.ac.id/main/HalamanUtama" class="gallery">Halaman Utama</a></li>
					<li><a href="https://studentdesk.uai.ac.id/akademik/RingkasanAkademik" class="gallery">Profil</a></li>
					<li><a href='https://studentdesk.uai.ac.id/baca_quran' class='elements'>Pendapatan</a></li>
					<li><a href='https://studentdesk.uai.ac.id/UAIEnglishTest/uet' class='elements'>Informasi</a></li>
					<li><a href='https://studentdesk.uai.ac.id/UAIEnglishTest/uet' class='elements'>Bantuan</a></li>

		<div class="centercontent">
			<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/js/jquery.blockUI.js"></script>

<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="https://studentdesk.uai.ac.id/file/js/magnific-popup/magnific-popup.css">

<!-- Magnific Popup core JS file -->
<script src="https://studentdesk.uai.ac.id/file/js/magnific-popup/jquery.magnific-popup.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		// https://dimsemenov.com/plugins/magnific-popup/
		/* hide cara lama dody@5okt
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: 'title'
			}
		});

		$("#first_popup").click();
		*/
		$('#open-popup').magnificPopup({
			items: [
				// {
				// src: 'https://studentdesk.uai.ac.id/file/WhatsApp Image 2022-05-23.jpeg',
				// title: "<a style='color:yellow;text-decoration:underline;' href='http://program-pmm.id/' target='_blank'>http://program-pmm.id/</a> Join WAG: <a href='https://chat.whatsapp.com/BdWiUUShgwE6lq6u7m8NgB' target='_blank' style='color:yellow;text-decoration:underline;' >https://chat.whatsapp.com/BdWiUUShgwE6lq6u7m8NgB</a>"
				// },
				{
					src: 'https://studentdesk.uai.ac.id/file/POP UP tahap 3 sem genap 22-23.png',
					title: 'UAI'
				},
				{
					src: 'https://studentdesk.uai.ac.id/file/Pengumuman Popup Studentdesk 050623.jpeg',
					title: 'UAI'
				},
				{
					src: 'https://studentdesk.uai.ac.id/file/Kawasan Berbusana Rapih dan Dilarang Merokok.jpg',
					title: 'UAI'
				}
				// {
				// src: 'https://studentdesk.uai.ac.id/file/WhatsApp Image 2022-05-23.jpeg',
				// title: "<a style='color:yellow;text-decoration:underline;' href='http://program-pmm.id/' target='_blank'>http://program-pmm.id/</a> Join WAG: <a href='https://chat.whatsapp.com/CRq2owhgIawDl8I6u5B8cN' target='_blank' style='color:yellow;text-decoration:underline;' >https://chat.whatsapp.com/CRq2owhgIawDl8I6u5B8cN</a>"
				// }
				/*,{
					src: 'https://studentdesk.uai.ac.id/main/DownloadFileAttachment/f6a4f71e72dfe084f2d4b5bf96963e02/ok.jpeg',
					title: 'UAI'
				}*/
			],
			gallery: {
				enabled: true
			},
			type: 'image' // this is a default type
		});
		$("#open-popup").click();
	});
</script>
<button id="open-popup" style="display:none;"></button>
<style>
	#back-top {
		position: fixed;
		bottom: 30px;
		margin-left: 850px;
	}

	#back-top a {
		width: 108px;
		display: block;
		text-align: center;
		font: 11px/100% Arial, Helvetica, sans-serif;
		text-transform: uppercase;
		text-decoration: none;
		color: #bbb;

		/* transition */
		-webkit-transition: 1s;
		-moz-transition: 1s;
		transition: 1s;
	}

	#back-top a:hover {
		color: #000;
	}

	/* arrow icon (span tag) */
	#back-top span {
		width: 108px;
		height: 108px;
		display: block;
		margin-bottom: 7px;
		background: #ddd url('https://studentdesk.uai.ac.id/file/images/up-arrow.png') no-repeat center center;

		/* rounded corners */
		-webkit-border-radius: 15px;
		-moz-border-radius: 15px;
		border-radius: 15px;

		/* transition */
		-webkit-transition: 1s;
		-moz-transition: 1s;
		transition: 1s;
	}

	#back-top a:hover span {
		background-color: #777;
	}
</style>

<script>
	var Document = {
		param: {
			dataperpage: 1, // jumlah data per halaman
			query: '',
			curpage: 0,
			numpage: 0,
			id: 0
		},
		url: 'https://studentdesk.uai.ac.id/main/loadDataPengumuman',
		setPage: function(n) {
			this.param.curpage = n;
			this.loadData();
			return false;
		},
		prevPage: function() {
			if (this.param.curpage > 0) {
				this.param.curpage--;
				this.loadData();
			}
			return false;
		},
		nextPage: function() {
			if (this.param.curpage < this.param.numpage) {
				this.param.curpage++;
				this.loadData();
			}
			return false;
		},
		loadData: function() {
			$.ajax({
				url: Document.url,
				type: 'POST',
				dataType: 'json',
				data: jQuery.param(Document.param),
				beforeSend: function() {
					/*$.blockUI({ message: 'Processing, please wait...', css: {
						border: 'none',
						padding: '15px',
						backgroundColor: '#000',
						'-webkit-border-radius': '10px',
						'-moz-border-radius': '10px',
						opacity: .5,
						color: '#fff'
					} });*/
				},
				success: function(d) {
					//$.unblockUI();
					Document.param.numpage = d.numpage;
					var t = '',
						dt = {};
					for (var i = 0; i < d.data.length; i++) {
						dt = d.data[i];
						var bgcolor = "";

						t += "<li>" +
							"<div class='updatethumb'><img src='https://studentdesk.uai.ac.id/file/images/user.png' /></div>" +
							"<div class='updatecontent'>" +
							"<div class='top' style='border-bottom:dotted 1px;font-size:16px;'>" +
							"<b><span class='user' style='font-size:16px;'>" + dt.judul + "</span><br/>" + dt.name + " :: Tanggal: " + dt.tanggal + " </b>" +
							"</div>" +
							dt.attachment +
							"<div class='text'>" + dt.pengumuman + "</div>" +
							"</div>" +
							"</li>";
					}
					$('.updatelist').html(t);
					$('.prodhead_menu').html(d.pagination);
				}
			});

			/*
			$.blockUI({ message: "<img width='650' src= 'https://studentdesk.uai.ac.id/file/images/KuliahPerdanaMahasiswa.JPG' />", css: {
					border: 'none',
					padding: '15px',
					'-webkit-border-radius': '10px',
					'-moz-border-radius': '10px',
					top:'10%',
					color: '#fff'
				} });
			
			setInterval('$.unblockUI();', 10000);
			*/

		}
	}

	$(document).ready(function() {

		Document.loadData();


		// hide #back-top first
		$("#back-top").hide();

		// fade in #back-top
		$(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 100) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});

			// scroll body to 0px on click
			$('#back-top a').click(function() {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});


	});
</script>
<div class="pageheader notab">
	<h1 class="pagetitle">Agen Member Get Member</h1>
	<span class="pagedesc">Selamat datang Agen Member Get Member</span>

	<a href='https://studentdesk.uai.ac.id/ktm' class="stdbtn btn_red">Pengajuan Cetak KTM</a>
	<span class="pagedesc"><a href='https://studentdesk.uai.ac.id/jadwal/KehadiranKuliah' class="stdbtn" style='background:#84d384;'>Perkuliahan dimulai 6 maret. Info detail, klik disini</a></span>

	
</div>
<!--pageheader-->

<!--contentwrapper-->		</div><!-- centercontent -->
	</div>
	<!--bodywrapper-->
</body>

</html>
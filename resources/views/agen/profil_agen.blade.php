
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>AGEN Member Get Meber</title>

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
			var namaurl = 'biodata';
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
				<h1 class="logo"><span>StudentDesk</span></h1>

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
						<a href="#" id='divFotoAvatar'><img src="https://studentdesk.uai.ac.id/file/images/mhs/0102520053.jpg?r=1066526546" width="90" /></a>

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
					<li><a href="https://studentdesk.uai.ac.id/akademik/RingkasanAkademik" class="gallery">Ringkasan Akademik</a></li>

										<li ><a href="#fbiodata" class="editor">Biodata</a>
						<span class="arrow"></span>
						<ul id="fbiodata">
							<li><a href="https://studentdesk.uai.ac.id/biodata/LihatBiodata">Lihat Biodata</a></li>
							<li><a href="https://studentdesk.uai.ac.id/biodata/UbahPassword">Ganti Password</a></li>
						</ul>
					</li>
					
												<li ><a href="#fkeuangan" class="elements">Keuangan</a>
							<span class="arrow"></span>
							<ul id="fkeuangan">
								<li><a href="https://studentdesk.uai.ac.id/keuangan/Tagihan">Tagihan</a></li>
																	<li><a href="https://studentdesk.uai.ac.id/keuangan/RiwayatPembayaranKuliah">Riwayat Pembayaran</a></li>
															</ul>
						</li>



					
										<li ><a href="#fkuliah" class="tables">Perkuliahan</a>
						<span class="arrow"></span>
						<ul id="fkuliah">
							<li><a href="https://studentdesk.uai.ac.id/main/DownloadFileAttachment/c9e1074f5b3f9fc8ea15d152add07294/Kaldik_2022-2023.pdf/pdw">Kalender Akademik 2022-2023</a></li>
							
								<li><a href='https://studentdesk.uai.ac.id/jadwal/JadwalKuliah'>Jadwal Kuliah</a></li>
								
								<li><a href='https://studentdesk.uai.ac.id/jadwal/KehadiranKuliah'>Kehadiran Kuliah</a></li>
								<li><a href='https://studentdesk.uai.ac.id/jadwal/JadwalKuliahPengganti'>Jadwal Kuliah Pengganti</a></li><li><a href='https://studentdesk.uai.ac.id/krs/JadwalKuliahProdi'>Jadwal Kuliah Prodi</a></li>						</ul>
					</li>

										<li ><a href="#fnilai" class="elements">Nilai</a>
						<span class="arrow"></span>
						<ul id="fnilai">
							<li><a href="https://studentdesk.uai.ac.id/akademik/DaftarNilaiSemesterAktif">Daftar Nilai Semester Aktif</a></li>
							<li><a href="https://studentdesk.uai.ac.id/akademik/DaftarNilaiPerSemester">Daftar Nilai per Semester</a></li>
							<li><a href="https://studentdesk.uai.ac.id/akademik/DaftarNilaiKeseluruhan">Daftar Nilai Keseluruhan</a></li>
							<li><a href="https://studentdesk.uai.ac.id/akademik/kurikulum">Kurikulum</a></li>
						</ul>
					</li>

					
						<li ><a href="#flayanan" class="elements">Layanan</a>
							<span class="arrow"></span>
							<ul id="flayanan">
								<li><a href="https://studentdesk.uai.ac.id/permintaan/FormulirPermintaan">Permintaan Surat</a></li>
								<li><a href="https://studentdesk.uai.ac.id/permintaan_cuti">Pengajuan Cuti Akademik</a></li>
								<li><a href="https://studentdesk.uai.ac.id/permintaan_keluar">Pengajuan Keluar Studi</a></li>
								<li><a href="https://studentdesk.uai.ac.id/ijazah">Pengambilan Ijazah</a></li>
							</ul>
						</li>

					
					
					<li><a href='https://studentdesk.uai.ac.id/krs/ChatOnline' class='elements'>Chat Online</a></li>
										<li><a href='https://studentdesk.uai.ac.id/rekamjejak' class='elements'>Rekam Jejak</a></li>
					<li><a href='https://studentdesk.uai.ac.id/baca_quran' class='elements'>Test Baca Al-Quran</a></li>
					<li><a href='https://studentdesk.uai.ac.id/UAIEnglishTest/uet' class='elements'>UAI English Test (UET)</a></li>

															<!--
				<li  ><a href="#fuet" class="elements">UAI English Test (UET)</a>
					<span class="arrow"></span>
					<ul id="fuet">
													<li><a href="UAIEnglishTest/placementtest">Placement Test</a></li>
																			<li><a href="UAIEnglishTest/matrikulasi">Matrikulasi</a></li>
												<li><a href="UAIEnglishTest/uet">Pendaftaran</a></li>
					</ul>
				</li>
				-->
					
						<li ><a href="#fsidang" class="elements">Pendaftaran Sidang</a>
							<span class="arrow"></span>
							<ul id="fsidang">
								<li><a href="https://studentdesk.uai.ac.id/proposal/PendaftaranSidang">Sidang Proposal</a></li>
								<li><a href="https://studentdesk.uai.ac.id/sidang/PendaftaranSidang">Sidang Skripsi</a></li>
							</ul>
						</li>

										<li><a href='https://studentdesk.uai.ac.id/akademik/PusatDownload' class='elements'>Pusat Download</a></li>
					<li ><a href="#fpelanggaran" class="elements">Pelanggaran</a>
						<span class="arrow"></span>
						<ul id="fpelanggaran">
							<li><a href="https://e-lang.uai.ac.id/login" target="_blank">Buat Laporan Pelanggaran</a></li>
							<li><a href="https://studentdesk.uai.ac.id/pelanggaran/riwayat">Riwayat Pelanggaran</a></li>
						</ul>
					</li>
				</ul>
				<a class="togglemenu"></a>
				<br /><br />
			</div>
			<!--leftmenu-->


		


		<div class="centercontent">
			<script type="text/javascript" src="https://studentdesk.uai.ac.id/file/js/jquery.blockUI.js"></script>
<script>
	$(document).ready(function() {

		$('#editBiodata').on("click", function() {

			var telp = $("#ftelp").attr("telp");
			var hp = $("#fhp").attr("hp");
			var email = $("#femail").attr("email");

			$("#ftelp").html('<input id="mhstelp" name="mhstelp" size="27" type="text" class="medium" style="width:150px;" value="' + telp + '"  placeholder="Telepon ..."/>');
			$("#fhp").html('<input id="mhshp" name="mhshp" size="27" type="text" class="medium" style="width:150px;" value="' + hp + '" placeholder="Handphone ..." />');
			$("#femail").html('<input id="mhsemail" name="mhsemail" size="27" type="text" class="medium" style="width:315px;" value="' + email + '" placeholder="Email ..." />');

			$(this).hide();
			$("#saveBiodata").show();
		});

		$('#saveBiodata').on("click", function() {

			var telp = $("#mhstelp").val();
			var hp = $("#mhshp").val();
			var email = $("#mhsemail").val();
			$.ajax({
				type: "POST",
				url: "https://studentdesk.uai.ac.id/biodata/saveBiodata",
				data: {
					'telp': telp,
					'hp': hp,
					'email': email
				},
				dataType: "json",
				beforeSend: function() {
					$.blockUI({
						message: 'Processing, please wait...',
						css: {
							border: 'none',
							padding: '15px',
							backgroundColor: '#000',
							'-webkit-border-radius': '10px',
							'-moz-border-radius': '10px',
							opacity: .5,
							color: '#fff'
						}
					});
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert(errorThrown);
					$.unblockUI();
				},
				success: function(data) {
					$.unblockUI();
					if (data.status == "OK") {
						alert("Data berhasil disimpan");

						$("#saveBiodata").hide();
						$("#editBiodata").show();

						$("#ftelp").html(telp);
						$("#fhp").html(hp);
						$("#femail").html(email);

						$("#ftelp").attr('telp', telp);
						$("#fhp").attr('hp', hp);
						$("#femail").attr('email', email);
					} else {
						alert(data.pesan);
					}
				}
			});
			return false;
		});

		$('#edit').on("click", function() {
			window.location.replace("https://studentdesk.uai.ac.id/biodata/LihatBiodata/d7324203462872e3b12b1f57ba079d10");
			return false;
		});
	});
</script>

<div class="pageheader notab">
	<h1 class="pagetitle">Biodata
			</h1>
	<span class="pagedesc">&nbsp;</span>
</div>
<!--pageheader-->

<div id="contentwrapper" class="contentwrapper">

	
	<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb overviewtable2">
		<thead>
			<tr>
				<th class="head0" colspan=3></th>
			</tr>
		</thead>
		<tbody>
			<tr style="padding:4px;">
				<td style="width:150px;padding-top:2px;padding-bottom:2px;" rowspan=12>
					<img src="https://studentdesk.uai.ac.id/file/images/mhs/0102520053.jpg?r=1145790766" width="180" />				</td>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Nama</td>
				<td style="padding-top:2px;padding-bottom:2px;"><b>Ainut Toriqun Najah</b></td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">NIM</td>
				<td style="padding-top:2px;padding-bottom:2px;">0102520053</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Program Studi</td>
				<td style="padding-top:2px;padding-bottom:2px;">Informatika</td>
			</tr>
						<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Peminatan</td>
				<td style="padding-top:2px;padding-bottom:2px;"></td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Pembimbing Akademik</td>
				<td style="padding-top:2px;padding-bottom:2px;">Riri Safitri</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Jalur Masuk</td>
				<td style="padding-top:2px;padding-bottom:2px;">Beasiswa Alumni</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Status Akademik</td>
				<td style="padding-top:2px;padding-bottom:2px;">
					Aktif				</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Alamat</td>
				<td style="padding-top:2px;padding-bottom:2px;">jl. Kemajuan IV no.68 rt 05/04, petukangan selatan.</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">Kota, Kode Pos</td>
				<td style="padding-top:2px;padding-bottom:2px;">, 12270</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">No. Telepon</td>
				<td style="padding-top:2px;padding-bottom:2px;" id="ftelp" telp="0">0</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">No. Handphone</td>
				<td style="padding-top:2px;padding-bottom:2px;" id="fhp" hp="081388518191">081388518191</td>
			</tr>
			<tr>
				<td style="width:150px;padding-top:2px;padding-bottom:2px;">E-Mail</td>
				<td style="padding-top:2px;padding-bottom:2px;" id="femail" email="Yudha@uai.ac.id">Yudha@uai.ac.id</td>
			</tr>
			
					</tbody>
	</table>
	<br clear="all" />

	<div class="contenttitle2 nomargintop">
		<h3>SMU Asal</h3>
	</div>
	<!--contenttitle-->
	<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb overviewtable2">
		<thead>
			<tr>
				<th class="head1" width="210px"></th>
				<th class="head1"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama SMU</td>
				<td></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>SMU IPS</td>
			</tr>
			<tr>
				<td>Tahun Lulus</td>
				<td>2020</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td></td>
			</tr>
			<tr>
				<td>Propinsi</td>
				<td></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td></td>
			</tr>
			<tr>
				<td>Status SMU</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<br />


	<div class="contenttitle2 nomargintop">
		<h3>Data Orang Tua</h3>
	</div>
	<!--contenttitle-->
	<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablecb overviewtable2">
		<colgroup>
			<col class="con1" />
			<col class="con1" />
			<col class="con1" />
		</colgroup>
		<thead>
			<tr>
				<th class="head1" width="210"></th>
				<th class="head1">Ayah</th>
				<th class="head1">Ibu</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>Jontri Asman</td>
				<td>Masruroh</td>
			</tr>
			<tr>
				<td>Keadaan</td>
				<td>Masih Hidup</td>
				<td>Masih Hidup</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>LAIN-LAIN</td>
				<td>TIDAK BEKERJA</td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir</td>
				<td>SMTA</td>
				<td>SMP</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>Islam</td>
				<td>Islam</td>
			</tr>
			<tr>
				<td>Kewarganegawaan</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>Jl. Kemajuan IV no.68 rt 05/04, petukangan selatan.</td>
				<td>Jl. Kemajuan IV no.68 rt 05/04, petukangan selatan.</td>
			</tr>
			<tr>
				<td>Kota</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Propinsi</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td>12207</td>
				<td>12207</td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>No. Handphone</td>
				<td>081287974585</td>
				<td>-</td>
			</tr>
			<tr>
				<td>Alamat Email</td>
				<td>-</td>
				<td>-</td>
			</tr>
		</tbody>
	</table>
	<br />

</div>
<!--contentwrapper-->

<br clear="all" />		</div><!-- centercontent -->
	</div>
	<!--bodywrapper-->
</body>

</html>
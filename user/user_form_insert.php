<?php
require_once '../template/header.php';
require_once '../inc/config.php';
require_once '../inc/function.php';
?>

<!--<script>
	$(document).ready(function() {
		$("#form_insert").validate({
			rules : {
				password : " ",
				passwordc : {
					equalTo : "#password"
				}
			}
		});
	}); 
</script>-->
		<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>


<div class="container">

	<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>

	<br />
	<br />
	
	<form action="user_act_insert.php" method="post">

	
	<table class="table table-bordered table-striped">

	<tr>
    <td><b>Konselor</b></td>
    <td><label for="konselor_pasien"><input type="text" name="konselor_pasien" id="konselor_pasien" placeholder="Nama Konselor" class=" " maxlength="20"/>
		</label>
	</td>
	
    <td><b>Tanggal Konseling</b></td>
	<td><label for="tgl_konseling"><input type="text" name="tgl_konseling" id="tgl_konseling" placeholder="Tanggal Konseling" class=" " maxlength="20"/>
		</label>
	</td></tr>
	
  <tr>
    <td><b>Nama</b></td>
	<td><label for="nama_pasien"><input type="text" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" class=" " maxlength="20"/>
		</label>
	</td>    
	<td><b>Umur</b></td>
	<td><label for="umur_pasien"><input type="text" name="umur_pasien" id="umur_pasien" placeholder="Umur Pasien" class=" " maxlength="20"/>
		</label>
	</td>    
	<td><b>TTL</b></td>
	<td><label for="ttl_pasien"><input type="text" name="ttl_pasien" id="ttl_pasien" placeholder="TTL" class=" " maxlength="20"/>
		</label>
	</td>  
	</tr>
	
	<tr>
    <td><b>Alamat</b></td>
	<td><label for="alamat_pasien"><input type="text" name="alamat_pasien" id="alamat_pasien" placeholder="Alamat" class=" " maxlength="50"/>
		</label>
	</td>    
	<td><b>No Tlp</b></td>
	<td><label for="notelp_pasien"><input type="text" name="notelp_pasien" id="notelp_pasien" placeholder="No Telepon" maxlength="15"/>
		</label>
	</td>     
	</tr>
	
  <tr>
    <td><b>Jenis Kelamin</b></td>
	<td><label for="kelamin_pasien">
	<input type="radio" name="kelamin_pasien" value="Laki-laki"  > Laki-laki</input><br>
	<input type="radio" name="kelamin_pasien" value="Perempuan"  > Perempuan</input><br>
	<input type="radio" name="kelamin_pasien" value="Transgender"  > Transgender</input>
		</label>
	</td>  
  </tr>
  
  <tr>
    <td><b>Alasan ingin tes</b></td>
	<td><label for="alasan_tes">		
	<input type="radio" name="alasan_tes" value="Ingin tahu saja"  > Ingin tahu saja</input><br>
	<input type="radio" name="alasan_tes" value="Mumpung gratis"  > Mumpung gratis</input><br>
	<input type="radio" name="alasan_tes" value="Untuk berkerja"  > Untuk berkerja</input><br>
	<input type="radio" name="alasan_tes" value="Merasa memiliki gejala"  > Merasa memiliki gejala</input><br>
	<input type="radio" name="alasan_tes" value="Akan menikah"  > Akan menikah</input><br>
	<input type="radio" name="alasan_tes" value="Merasa beresiko"  > Merasa beresiko</input><br>
	<input type="radio" name="alasan_tes" value="Dirujuk dari tempat lain"  > Dirujuk dari tempat lain</input><br>
	</label>
	</td>  
	</tr>
	
  <tr>
    <td><b>Tahu adanya VCT dari</b></td>
	<td><label for="tahu_vct">
	<input type="radio" name="tahu_vct" value="Brosur"  > Brosur</input><br>
	<input type="radio" name="tahu_vct" value="Koran"  > Koran</input><br>
	<input type="radio" name="tahu_vct" value="TV"  > TV</input><br>
	<input type="radio" name="tahu_vct" value="Dokter"  > Dokter</input><br>
	<input type="radio" name="tahu_vct" value="Teman"  > Teman</input><br>
	<input type="radio" name="tahu_vct" value="LSM lain"  > LSM lain</input><br>
	<input type="radio" name="tahu_vct" value="Poster/pengumuman"  > Poster/pengumuman</input><br>

		</label>
	</td>  
	</tr>
	
  <tr>
    <td><b>Pertama kali dengar HIV/AIDS</b></td>
	<td><label for="dengar_hiv"><input type="text" name="dengar_hiv" id="dengar_hiv" placeholder="Dengar HIV" class=" " maxlength="20"/>
		</label>
	</td>    
	<td><b>Dari</b></td>
	<td><label for="dengar_dari"><input type="text" name="dengar_dari" id="dengar_dari" placeholder="Dari" class=" " maxlength="20"/>
		</label>
	</td>
	  </tr>
	  
  <tr>
    <td><b>Pengetahuan tentang HIV/AIDS</b></td>
	<td><label for="pengetahuan_hiv">
	<input type="radio" name="pengetahuan_hiv" value="Cukup"  > Cukup</input><br>
		<input type="radio" name="pengetahuan_hiv" value="Kurang"  > Kurang</input><br>
	<input type="radio" name="pengetahuan_hiv" value="Sama sekali tidak tahu"  > Sama sekali tidak tahu</input><br>

		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Risiko Penularan</b></td>
	<td><label for="risk_penularan">
		<input type="radio" name="risk_penularan" value="Seksual"  > Seksual</input><br>
	<input type="radio" name="risk_penularan" value="Alat medis"  > Alat medis</input><br>
	<input type="radio" name="risk_penularan" value="Narkoba (IDU)"  > Narkoba (IDU)</input><br>
	<input type="radio" name="risk_penularan" value="Transfusi Darah"  > Transfusi Darah</input><br>
	<input type="radio" name="risk_penularan" value="Perinatal"  > Perinatal</input><br>
	<input type="radio" name="risk_penularan" value="Tato /tindik / akupuntur"  > Tato /tindik / akupuntur</input><br>
	<input type="radio" name="risk_penularan" value="Terpecik darah"  > Terpecik darah</input><br>
		<input type="radio" name="risk_penularan" value="Homoseksual"  > Homoseksual</input><br>


		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Pasangan sex</b></td>
	<td><label for="pasangan_sex">
	<input type="radio" name="pasangan_sex" value="Tetap"  > Tetap</input><br>
	<input type="radio" name="pasangan_sex" value="Tidak tetap"  > Tidak tetap</input><br>

		</label>
	</td>    
	<td><b>Kelamin Pasangan</b></td>
	<td><label for="kelamin_pasangan">
	<input type="text" name="kelamin_pasangan" id="kelamin_pasangan" placeholder="Kelamin pasangan" class=" " maxlength="20"/>
		</label>
	</td>  
	</tr>
	
  <tr>
    <td><b>Terakhir Berisiko</b></td>
	<td><label for="terakhir_risk"><input type="text" name="terakhir_risk" id="terakhir_risk" placeholder="Terakhir Beresiko" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Suku Bangsa</b></td>
<td><label for="suku_bangsa">
<input type="text" name="suku_bangsa" id="suku_bangsa" placeholder="Suku bangsa" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Agama</b></td>
<td><label for="agama_pasien"><input type="text" name="agama_pasien" id="agama_pasien" placeholder="Agama" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Status Perkawinan</b></td>
<td><label for="status_perkawinan">
	<input type="radio" name="status_perkawinan" value="Menikah"  > Menikah</input><br>
	<input type="radio" name="status_perkawinan" value="Belum menikah"  > Menikah</input><br>
	<input type="radio" name="status_perkawinan" value="Duda / Janda"  > Duda / Janda</input><br>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Pendidikan Terakhir</b></td>
<td><label for="pendidikan_terakhir"><input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan terakhir" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Pekerjaan</b></td>
<td><label for="pekerjaan_pasien"><input type="text" name="pekerjaan_pasien" id="pekerjaan_pasien" placeholder="Pekerjaan pasien" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Tindak Lanjut</b></td>
<td><label for="tindak_lanjut">
	<input type="radio" name="tindak_lanjut" value="Pemberian Informasi HIV/AIDS, "  > Pemberian Informasi HIV/AIDS</input><br>
	<input type="radio" name="tindak_lanjut" value="Merujuk ke Laboratorium, "  > Merujuk ke Laboratorium</input><br>
	<input type="radio" name="tindak_lanjut" value="Merujuk ke bagian PMS, "  > Merujuk ke bagian PMS</input><br>	
	<input type="radio" name="tindak_lanjut" value="Merujuk ke bagian kebidanan, "  > Merujuk ke bagian kebidanan</input><br>
	<input type="radio" name="tindak_lanjut" value="Merujuk ke konsultasi perkawinan, "  > Merujuk ke konsultasi perkawinan</input><br>
	<input type="radio" name="tindak_lanjut" value="Merujuk ke penanganan IDU, "  > Merujuk ke penanganan IDU</input><br>
	<input type="radio" name="tindak_lanjut" value="Merujuk ke fasilitas dukungan, "  > Merujuk ke fasilitas dukungan</input><br>
	<input type="radio" name="tindak_lanjut" value="Klien Menolak, "  > Klien Menolak</input><br>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Lama Konseling</b></td>
<td><label for="lama_konseling">
	<input type="radio" name="lama_konseling" value="< 15 menit"  > < 15 menit</input><br>
	<input type="radio" name="lama_konseling" value="< 30 menit"  > < 30 menit</input><br>
	<input type="radio" name="lama_konseling" value="> 30 menit"  > > 30 menit</input><br>
		</label>
	</td> </tr>
	
  <tr>
    <td><b>Kesimpulan Status Risiko</b></td>
<td><label for="status_risk">
	<input type="radio" name="status_risk" value="Rendah"  > Rendah</input><br>
	<input type="radio" name="status_risk" value="Sedang"  > Sedang</input><br>
	<input type="radio" name="status_risk" value="Tinggi"  > Tinggi</input><br>
		</label>
	</td>   </tr>
	
  <tr>
    <td><b>Keluhan yang dirasakan saat ini</b></td>
<td><label for="keluhan_pasien">
	<input type="radio" name="keluhan_pasien" value="Demam, "  > Demam</input><br>
	<input type="radio" name="keluhan_pasien" value="Diare, "  > Diare</input><br>
	<input type="radio" name="keluhan_pasien" value="Candidasis / Sariawan, "  > Candidasis / Sariawan</input><br>	
	<input type="radio" name="keluhan_pasien" value="Batuk / TB Paru, "  > Batuk / TB Paru</input><br>
	<input type="radio" name="keluhan_pasien" value="TB Estra Paru, "  > TB Estra Paru</input><br>
	<input type="radio" name="keluhan_pasien" value="Penurunan Kesadaran, "  > Penurunan Kesadaran</input><br>
	<input type="radio" name="keluhan_pasien" value="Hepatitis, "  > Hepatitis</input><br>
	<input type="radio" name="keluhan_pasien" value="Penurunan Berat Badan, "  > Penurunan Berat Badan</input><br>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Situasi dan Kondisi saat Konseling</b></td>
<td><label for="situasi_konseling">
	<input type="radio" name="situasi_konseling" value="Klien panik / emosional"  > Klien panik / emosional</input><br>
	<input type="radio" name="situasi_konseling" value="Klien tenang dan mampu mengendalikan diri"  > Klien tenang dan mampu mengendalikan diri</input><br>
	<input type="radio" name="situasi_konseling" value="Klien sangat tertutup"  > Klien sangat tertutup</input><br>
	<input type="radio" name="situasi_konseling" value="Klien terbuka dan lancar berkomunikasi"  > Klien terbuka dan lancar berkomunikasi</input><br>
		</label>
	</td> </tr>
  </table>
  
		<!--<div class="control-group">
			<label for="username">Username  <input type="text" name="username" id="username" placeholder="Username" class=" " maxlength="20"/>
			</label>
		</div>

		<div class="control-group">
			<label for="password">Password : </label>
			<div class="controls">
				<input type="password" name="password" id="password" placeholder="Password" class=" " maxlength="20"/>
			</div>
		</div>

		<?
		if (isset($_GET['konfirmasi'])) {
			echo "<div id='form_alert' style='color:#DD1144' class='alert alert-success'>";
			echo "<a class='close' data-dismiss='alert' href='#'>x</a>Data berhasil disimpan!";
			echo "</div>";
		}
		?>-->

		<div class="control-group">
			<button type="submit" class="btn btn-primary">
				<i class="icon icon-plus"></i> Simpan
			</button>
			<button type="reset" class="btn btn-warning">
				<i class="icon icon-refresh"></i> Batal
			</button>
		</div>
	</form>
	
	



</div>
<?php
include '../template/footer.php';
?>
</body>
</html>
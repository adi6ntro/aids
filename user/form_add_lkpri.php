<?php
require_once '../template/header.php';
?>

<!--<script>
	$(document).ready(function() {
		$("#form_insert").validate({
			rules : {
				password : "required",
				passwordc : {
					equalTo : "#password"
				}
			}
		});
	}); 
</script>-->

<div class="container">

	<h2>LEMBAR KEGIATAN PENILAIAN RISIKO INDIVIDU</h2>
                <p><i>( Harus dilengkapi oleh konselor. Termasuk dalam HO11. )</i></p>
                

	<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>

	<br />
	<br />
	
	<form action="" method="post" id="form_insert" name="form_insert">
	
	<table class="table table-bordered table-striped">

	<tr>
        <td></td>
        <td><b>KODE KLIEN : </b>
        <td><label for="kode_klien"><input type="text" name="kode_klien" id="kode_klien" placeholder="Kode Klien" class="required" maxlength="20"/>
		</label>
	</td></td>
	
    <tr>
    <td>1.</td>
    <td>Klien mempunyai pasangan tetap :</td>
        <td><label for="punya_pasangan">
        <input type="radio" name="punya_pasangan" value="Ya" required> Ya</input><br>
        <input type="radio" name="punya_pasangan" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
  </tr>
  
  <tr>
    <td>2.</td>
    <td>Status Pasangan Tetap :</td>
<td><label for="status_pasangan">
        <input type="radio" name="status_pasangan" value="HIV Positif" required> HIV Positif</input><br>
        <input type="radio" name="status_pasangan" value="Tak diketahui" required> Tak Diketahui</input><br>
                <input type="radio" name="status_pasangan" value="HIV Negatif" required> HIV Negatif</input><br>

        </label>
		</td>
		  </tr>
		  
  <tr>
    <td>3.</td>
    <td>Tanggal terakhir tes darah :</td>
<td><label for="tanggal_tesdarah"><input type="text" name="tanggal_tesdarah" id="tanggal_tesdarah" placeholder="Tanggal tes darah" class="required" maxlength="20"/>
		</label>
	</td>  
	  </tr>
	  
  <tr>
    <td>4.</td>
    <td>Klien / pasangannya terindikasi riwayat Infeksi Menular Seksual (IMS) :</td>
<td><label for="indikasi_pasangan_ims">
        <input type="radio" name="indikasi_pasangan_ims" value="Ya" required> Ya</input><br>
        <input type="radio" name="indikasi_pasangan_ims" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
		  </tr>
  <tr>
  
    <td>5.</td>
    <td>Dibutuhkan terapi rujukan :</td>
<td><label for="terapi_rujukan_ims">
        <input type="radio" name="terapi_rujukan_ims" value="Ya" required> Ya</input><br>
        <input type="radio" name="terapi_rujukan_ims" value="Tidak" required> Tidak</input><br>
        </label>
		</td>  </tr>
		
  <tr>
    <td>6.</td>
    <td>Klien / pasangannya melaporkan gejala TB :</td>
<td><label for="gejala_tb">
        <input type="radio" name="gejala_tb" value="Ya" required> Ya</input><br>
        <input type="radio" name="gejala_tb" value="Tidak" required> Tidak</input><br>
        </label>
		</td>   </tr>
		
  <tr>
    <td>7.</td>
    <td>Dibutuhkan terapi rujukan :</td>
<td><label for="terapi_rujukan_tb">
        <input type="radio" name="terapi_rujukan_tb" value="Ya" required> Ya</input><br>
        <input type="radio" name="terapi_rujukan_tb" value="Tidak" required> Tidak</input><br>
        </label>
		</td>    </tr>
		
  <tr>
    <td>8.</td>
    <td>Pajanan di tempat kerja :</td>
<td><label for="pajanan_tpt_kerja">
        <input type="radio" name="pajanan_tpt_kerja" value="Ya" required> Ya</input><br>
        <input type="radio" name="pajanan_tpt_kerja" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_pajanan"><input type="text" name="tgl_pajanan" id="tgl_pajanan" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="jend_pajanan">
        <input type="radio" name="jend_pajanan" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_pajanan" value="Tidak" required> Tidak</input><br>
        </label>
		</td>   </tr>
		
  <tr>
    <td>9.</td>
    <td>Tatoo, luka gores :</td>
    <td><label for="tato_luka">
        <input type="radio" name="tato_luka" value="Ya" required> Ya</input><br>
        <input type="radio" name="tato_luka" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_tato"><input type="text" name="tgl_tato" id="tgl_tato" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="jend_tato">
        <input type="radio" name="jend_tato" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_tato" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
  </tr>
  
  <tr>
    <td>10.</td>
    <td>Produk darah :</td>
    <td><label for="produk_darah">
        <input type="radio" name="produk_darah" value="Ya" required> Ya</input><br>
        <input type="radio" name="produk_darah" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_produk_darah"><input type="text" name="tgl_produk_darah" id="tgl_produk_darah" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="jend_produk_darah">
        <input type="radio" name="jend_produk_darah" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_produk_darah" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
		</tr>
		
  <tr>
    <td>11.</td>
    <td>Seks Vaginal :</td>
    <td><label for="seks_vagina">
        <input type="radio" name="seks_vagina" value="Ya" required> Ya</input><br>
        <input type="radio" name="seks_vagina" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_vagina"><input type="text" name="tgl_vagina" id="tgl_vagina" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="jend_vagina">
        <input type="radio" name="jend_vagina" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_vagina" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
		  </tr>
    
  <tr>
    <td>12.</td>
    <td>Seks Oral :</td>
    <<td><label for="seks_oral">
        <input type="radio" name="seks_oral" value="Ya" required> Ya</input><br>
        <input type="radio" name="seks_oral" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_oral"><input type="text" name="tgl_oral" id="tgl_oral" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="terapi_rujukan_tb">
        <input type="radio" name="jend_oral" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_oral" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
		  </tr>
		  
  <tr>
    <td>13.</td>
    <td>Seks Anal :</td>
    <td><label for="seks_anal">
        <input type="radio" name="seks_anal" value="Ya" required> Ya</input><br>
        <input type="radio" name="seks_anal" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_anal"><input type="text" name="tgl_anal" id="tgl_anal" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="jend_anal">
        <input type="radio" name="jend_anal" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_anal" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
		</tr>
		
  <tr>
    <td>14.</td>
    <td>Bergantian alat suntik :</td>
    <td><label for="ganti_suntik">
        <input type="radio" name="ganti_suntik" value="Ya" required> Ya</input><br>
        <input type="radio" name="ganti_suntik" value="Tidak" required> Tidak</input><br>
        </label>
		</td> 
		    <td>Tanggal :</td>
<td><label for="tgl_suntik"><input type="text" name="tgl_suntik" id="tgl_suntik" placeholder="Tanggal" class="required" maxlength="20"/>
		</label>
	</td>  
	    <td>Periode Jendela :</td>
<td><label for="jend_suntik">
        <input type="radio" name="jend_suntik" value="Ya" required> Ya</input><br>
        <input type="radio" name="jend_suntik" value="Tidak" required> Tidak</input><br>
        </label>
		</td>
		</tr>
		
  <tr>
    <td>15.</td>
    <td>Diketahui klien berisiko dengan ODHA :</td>
<td><label for="risk_odha">
        <input type="radio" name="risk_odha" value="Ya" required> Ya</input><br>
        <input type="radio" name="risk_odha" value="Tidak" required> Tidak</input><br>
        </label>
		</td>  </tr>
		
  <tr>
    <td>16.</td>
    <td>Klien hamil :</td>
<td><label for="pasien_hamil">
        <input type="radio" name="pasien_hamil" value="Ya" required> Ya</input><br>
        <input type="radio" name="pasien_hamil" value="Tidak" required> Tidak</input><br>
        </label>
		</td>   </tr>
		
  <tr>
    <td>17.</td>
    <td>Tahap kehamilan :</td>
<td><label for="tahap_hamil">
        <input type="radio" name="tahap_hamil" value="Trisemester I" required> Trisemester I</input><br>
        <input type="radio" name="tahap_hamil" value="Trisemester II" required> Trisemester II</input><br>
        <input type="radio" name="tahap_hamil" value="Trisemester III" required> Trisemester III</input><br>
        </label>
		</td>   </tr>
		
  <tr>
    <td>18.</td>
    <td>Klien atau pasangan menggunakan kontrasepsi secara teratur :</td>
<td><label for="kontrasepsi_teratur">
        <input type="radio" name="kontrasepsi_teratur" value="Ya" required> Ya</input><br>
        <input type="radio" name="kontrasepsi_teratur" value="Tidak" required> Tidak</input><br>
        </label>
		</td>   </tr>
		
    <tr>
        <td>Klien perlu tes saat ini : <?php echo " ".$rows['perlu_tes']; ?></td>
    </tr>
        <tr></tr>
    <tr></tr>
    <tr>
        <td>Klien membutuhkan tes ulang karena pajanan dalam masa jendela : <?php echo " ".$rows['tesulang_jend']; ?></td>
    </tr>
  </table>
  
		<!--<div class="control-group">
			<label for="username">Username  <input type="text" name="username" id="username" placeholder="Username" class="required" maxlength="20"/>
			</label>
		</div>

		<div class="control-group">
			<label for="password">Password : </label>
			<div class="controls">
				<input type="password" name="password" id="password" placeholder="Password" class="required" maxlength="20"/>
			</div>
		</div>-->

		<?
		if (isset($_GET['konfirmasi'])) {
			echo "<div id='form_alert' style='color:#DD1144' class='alert alert-success'>";
			echo "<a class='close' data-dismiss='alert' href='#'>x</a>Data berhasil disimpan!";
			echo "</div>";
		}
		?>

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
</body>
</html>
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

<?php
$nama_pasien=$_GET['id_pasien'];
$query="SELECT * FROM data_pasien WHERE id_pasien =$nama_pasien";
$result=mysql_query($query) or die(mysql_error());

//proses menampilkan data
$rows=mysql_fetch_array($result);
?>
<div class="container">

	<a class="btn btn-success" href="../user/user_form_view.php"> <i class="icon icon-arrow-left"></i> Back</a>

	<br />
	<br />
	
	<form action="user_act_update.php?id_pasien=<?php echo $nama_pasien ?>" method="post">

	
	<table class="table table-bordered table-striped">

	<tr>
    <td><b>Konselor</b></td>
    <td><label for="konselor_pasien"><input type="text" name="konselor_pasien" id="konselor_pasien" value="<?php echo $rows['konselor_pasien']?>" class=" " maxlength="20"/>
		</label>
	</td>
	
    <td><b>Tanggal Konseling</b></td>
	<td><label for="tgl_konseling"><input type="text" name="tgl_konseling" id="tgl_konseling" value="<?php echo $rows['tgl_konseling']?>" class=" " maxlength="20"/>
		</label>
	</td></tr>
	
  <tr>
    <td><b>Nama</b></td>
	<td><label for="nama_pasien"><input type="text" name="nama_pasien" id="nama_pasien" value="<?php echo $rows['nama_pasien']?>" class=" " maxlength="20"/>
		</label>
	</td>    
	<td><b>Umur</b></td>
	<td><label for="umur_pasien"><input type="text" name="umur_pasien" id="umur_pasien" value="<?php echo $rows['umur_pasien']?>" class=" " maxlength="20"/>
		</label>
	</td>    
	<td><b>TTL</b></td>
	<td><label for="ttl_pasien"><input type="text" name="ttl_pasien" id="ttl_pasien" value="<?php echo $rows['ttl_pasien']?>" class=" " maxlength="20"/>
		</label>
	</td>  
	</tr>
	
	<tr>
    <td><b>Alamat</b></td>
	<td><label for="alamat_pasien"><input type="text" name="alamat_pasien" id="alamat_pasien" value="<?php echo $rows['alamat_pasien']?>" class=" " maxlength="50"/>
		</label>
	</td>    
	<td><b>No Tlp</b></td>
	<td><label for="notelp_pasien"><input type="text" name="notelp_pasien" id="notelp_pasien" value="<?php echo $rows['notelp_pasien']?>" maxlength="15"/>
		</label>
	</td>     
	</tr>
	
    
  
	
  
  <tr>
    <td><b>Pertama kali dengar HIV/AIDS</b></td>
	<td><label for="dengar_hiv"><input type="text" name="dengar_hiv" id="dengar_hiv" value="<?php echo $rows['dengar_hiv']?>" class=" " maxlength="20"/>
		</label>
	</td>    
	<td><b>Dari</b></td>
	<td><label for="dengar_dari"><input type="text" name="dengar_dari" id="dengar_dari" value="<?php echo $rows['dengar_dari']?>" class=" " maxlength="20"/>
		</label>
	</td>
	  </tr>
	  
  
  <tr>
    <td><b>Terakhir Berisiko</b></td>
	<td><label for="terakhir_risk"><input type="text" name="terakhir_risk" id="terakhir_risk" value="<?php echo $rows['terakhir_risk']?>" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Suku Bangsa</b></td>
<td><label for="suku_bangsa">
<input type="text" name="suku_bangsa" id="suku_bangsa" value="<?php echo $rows['suku_bangsa']?>" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Agama</b></td>
<td><label for="agama_pasien"><input type="text" name="agama_pasien" id="agama_pasien" value="<?php echo $rows['agama_pasien']?>" class=" " maxlength="20"/>
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
<td><label for="pendidikan_terakhir"><input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" value="<?php echo $rows['pendidikan_terakhir']?>" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  <tr>
    <td><b>Pekerjaan</b></td>
<td><label for="pekerjaan_pasien"><input type="text" name="pekerjaan_pasien" id="pekerjaan_pasien" value="<?php echo $rows['pekerjaan_pasien']?>" class=" " maxlength="20"/>
		</label>
	</td>  </tr>
	
  
  
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
<title>Translate Bahasa</title>
<style>
body{
font-family:Tahoma;
font-size:12px;
}
#chart{
margin:0px auto;
width:800px;
float:none;
}
#soal{
margin:0px auto;
width:500px;
float:none;
font-size:14px;
padding:5px;
}
#jwb{
margin:0px auto;
padding:5px;
width:500px;
float:none;
font-size:12px;
}
.tombol{
background-color:#FF9900;
padding:5px 20px 5px 20px;
border:1px dashed #000000;
}
.tombol:hover{
background-color:#FF0000;
cursor:pointer;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript">
 function lanfTrans(lan)
 {
   switch(lan)
   {
   case 'en': document.getElementById('dlang').value='en';document.langForm.submit(); break;
   case 'fr': document.getElementById('dlang').value='fr'; document.langForm.submit(); break;
   case 'es': document.getElementById('dlang').value='es'; document.langForm.submit(); break;
   case 'id': document.getElementById('dlang').value='id'; document.langForm.submit(); break;
   }
 }
</script>
<body>
<?php
	echo form_open('tes/languages/',array('name'=>'langForm','id'=>'langForm'));
	
	$id = $this->uri->segment(3);
?>
	<input type="hidden" name="dlang" id="dlang">
	<input type="hidden" name="det" id="det" value="<?php echo $id; ?>">
	<input type="hidden" name="current" id="current" value="<?php echo substr(uri_string(),1,strlen(uri_string()));?>">

	<img src="<?php echo base_url()?>images/fr.jpg" onClick="lanfTrans('fr');" title="French"> &nbsp;
	<img src="<?php echo base_url()?>images/en.jpg" onClick="lanfTrans('en');" title="English"> &nbsp;
	<img src="<?php echo base_url()?>images/sp.jpg" onClick="lanfTrans('es');" title="Spanish"> &nbsp;
	<img src="<?php echo base_url()?>images/ind.jpg" onClick="lanfTrans('id');" title="Indonesia"> &nbsp;
<?php
	echo form_close();
?>
</body>
<div id="soal">
<table>
<?php
foreach($berita->result_array() as $b)
{
 	google_translate($b['judul'],$lang,"id","text");
	echo "<br><br>";
 	google_translate($b['isi_berita'],$lang,"id","text");
}
?>
</table>
</div>
</form>
</div>

 <?php
 $nama       = "laporan";  
 $namafile = "$nama.txt";  
 $isi      = trim($_POST['isi']);  
 $file = fopen($namafile,"w");  
 fwrite($file,$isi);  
 fclose($file); 
 
 echo "<h2>Thank You</h2>
       <h3>Laporan berhasil di sampaikan</h3>";
 echo "<hr>";  
 echo "Jangan lupa tersenyum :)";
 ?>
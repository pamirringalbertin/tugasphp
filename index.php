<?php

require 'koneksi.php';
$datalaptop= query("SELECT * FROM dbalbertin");
?>
<!DOCTYPE html >
<html  lang =" en " >
<head> 
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar data jenis laptop</title>
</head>
<body>
     <h1>daftar data jenis laptop</h1>
    <table border="1" cellpadding="10" cellspacing="0" >
       
        <tr>
            <th>No</th >
            <th>Traditional laptop</th >
            <th> Subnotebook</th >
            <th> Netbook</th> 
            <th> Gaming laptop</th >
            <th>Ruget laptop</th >
            <th> Desktop replacement</th >
            <th> Aksi </th >
           

           
        </tr>
        <?php  $i= 1 ;?>
        <?php  foreach ($datalaptop as $dla ):?>
     <tr>
        <td><?=$i;?></td>
        <td ><?=  $dla ["Traditional laptop"];?></td> 
        <td ><?=  $dla ["Subnotebook"];?></td> 
        <td ><?=  $dla ["Netbook"];?></td> 
        <td ><?=  $dla ["Gaming laptop"];?></td> 
        <td ><?=  $dla ["Ruget laptop"]; ?></td> 
        <td ><?=  $dla ["Desktop replacement"];?></td> 
        <td> 
            <a  href ="" > ubah </a >
            <a  href ="" > hapus </a >
        </td>
       
       
     </tr>
    
     <?php  $i ++; ?>
            <?php  endforeach ; ?>
        
    </table> 
</body> 
</html> 
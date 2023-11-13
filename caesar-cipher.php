<html>
  <head>
    <title>Enkripsi dan Dekripsi</title>
  </head>

   <body bgcolor="#ADE8E6">
      <center>
      <h2><u><b>WAHYUFI21 : Caesar Cipher</b></u></h2>
      <h3>Enkripsi dan Dekripsi</h3>
      <form action="" method="get">
          Pasword : <input type ="text" name="kalimat">
          <br><br>
          <input type="submit" value="kirim">
          <input type="reset" value="ulangi">
      </form>
      </center>
      <?php
          $msg = $_GET['kalimat'];
          $key = 13;
          $mode = 'decrypt';
          $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $trans = '';
          $msg = strtoupper($msg);
          for ($i = 0; $i < strlen($msg); $i++) {
              if (strpos($letters, $msg[$i]) !== false) {
                  $num = strpos($letters, $msg[$i]);
              if ($mode == 'encrypt') {
                  $num += $key;
              } else {
                  $num -= $key;
              }
              
              $cnt = strlen($letters);
              if ($num >= $cnt) {
                  $num -= $cnt;
              } else {
                  $num += $cnt;
              }
              if ($num >= $cnt) {
                  $num = $num - $cnt;
              }
              $trans .= $letters[$num];
              }    
         }
     ?>
     <center>
     <?php 
        echo 'Key : ';
        echo $trans . PHP_EOL;
     ?>
     </center>
   </body>
</html>

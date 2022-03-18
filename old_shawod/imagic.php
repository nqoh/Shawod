<?php
exec('convert image_test/getwellsoon.gif \
          \( -clone 0 -coalesce -gravity South -background white -fill rgb(132,132,132) \
             -splice 0x18 -annotate 0 "Mandisa nxumanli" \) \
          -swap -1,0 +delete   image_test/olovaaa.gif');

  

  
  
  /*   -coalesce \
          -gravity SouthEast -background white -splice 0x5 \
          -annotate +10+10 "A Better" \
          
          -gravity center -background white -splice 0x18 \
          -annotate 0 "Ngobese mandisa fksdjeaf ffdadf \n yizo na dfasf asfeadad dsafseasa sdafea d \n jdsfsadffdsedk isenza njalo" \
          
          -gravity center -background white  -pointsize 28   -splice 0x5 \
          -annotate -0-70 "123456789012340" \
          -layers Optimize */
  
/*exec('convert image_test/getwellsoon.gif -coalesce \
          -gravity SouthEast -background white -splice 0x5 \
          -annotate +10+10 "A Better" \
          
          -gravity center -background white -splice 0x18 \
          -annotate 0 "Ngobese mandisa fksdjeaf ffdadf \n yizo na dfasf asfeadad dsafseasa sdafea d \n jdsfsadffdsedk isenza njalo" \
          
          -gravity center -background white  -pointsize 28   -splice 0x5 \
          -annotate -0-70 "123456789012340" \
          -layers Optimize    image_test/nqobilez.gif');*/
          
          
          $image ="nqobil6e.gif";
    
    
/*  $filename = $image;
    $ctype="image/gif";
    if(ini_get('zlib.output_compression'))
        ini_set('zlib.output_compression', 'Off');
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false);
    header("Content-Type: $ctype/force-download");
    header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".filesize($filename));
    readfile("$filename"); */
 
?>
<img style='border:1px solid silver' src=image_test/olovaaa.gif />

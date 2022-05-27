<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $Enter Username ."\n");
    fwrite($file,"Address :");
    fwrite($file, $Address ."\n");
    fwrite($file,"Mobile number :");
    fwrite($file, $mobile number ."\n");
    fwrite($file,"Country&postcode :");
    fwrite($file, $Countryorpost ."\n");
    fwrite($file,"Weight code :");
    fwrite($file, $weightcode ."\n");
    fclose($file);
    header("location: index.php");
 ?>

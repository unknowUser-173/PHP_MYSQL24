<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$products = array(

 'SP01'=> array('SP01','Tai Nghe',650000,199,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/7/1718.jpg'),
 'SP02'=> array('SP02','Tablet',8000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/san-pham-apple-1.png'),
 'SP03'=> array('SP03','Watch',6000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/4/9/49620d1b5987542c77d2396825723712_1.jpg'),
 'SP04'=> array('SP04','airpot',4000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_2019-03-29_09-12-07_2.jpg'),
 'SP05'=> array('SP05','Macbook',25000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/a/mac_air_13_2020_xam.jpg'),
);


if (isset($_GET['msp'])) {
 $msp =$_GET['msp'];


 if (isset($_SESSION['products'][$msp])) {
   $_SESSION['products'][$msp][3]++;
 }else{
         $products[$msp][3]=1; 
         $_SESSION['products'][$msp]=$products[$msp];
         $_SESSION['products'][$msp]['time']=date('d/m/y h:s:i');
       }
       echo "<pre>";
       print_r($_SESSION);
       echo "</pre>";


     }
     header('Location: detail.php')
?>
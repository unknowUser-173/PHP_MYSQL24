<?php 
session_start();
$products = array(

  'SP01'=> array('SP01','Tai Nghe',650000,199,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/7/1718.jpg'),
  'SP02'=> array('SP02','Tablet',8000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/a/san-pham-apple-1.png'),
  'SP03'=> array('SP03','Watch',6000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/4/9/49620d1b5987542c77d2396825723712_1.jpg'),
  'SP04'=> array('SP04','airpot',4000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_2019-03-29_09-12-07_2.jpg'),
  'SP05'=> array('SP05','Macbook',25000000,99,'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/a/mac_air_13_2020_xam.jpg'),
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2>Products table</h2>
    <div class="container">
     <table class="table">
      <thead>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Giá tiền</th>
          <th>Số lượng</th>
          <th>Hình ảnh</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach( $products as $key => $row )  { ?>
          <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><img style="width: 20%;height: 10%;" src="<?php echo $row[4] ?>" ></td>

            <td>
             <a href="add.php?msp=<?php echo $row[0] ?>" title=""><button type="button" class="btn btn-primary">Add to card</button></a>
           </td>
         </tr>

       <?php } ?>
     </tbody>
   </table>
 </div>        

</div>

</body>
</html>
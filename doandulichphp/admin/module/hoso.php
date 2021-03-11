 <?php
      $hs = mysqli_query($connect,"select * from hosocongty");
      
      $numhs = mysqli_num_rows($hs);
 ?>
 <div class="row"> 
  <h1 class="text-center">QUẢN LÝ HỒ SƠ CÔNG TY</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách nội dung</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
      <?php  
       if($numhs == 0){ ?>
          <button type="button" class="btn btn-sm btn-primary btn-create"><a href="index.php?com=them&type=hoso" style="color: white;">cập nhập hồ sơ</a></button>
       <?php }
      ?>
        
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th>Tên công ty</th>
        <th>Số điện thoại</th> 
        <th>logo</th>
        <th>Email</th> 
        <th>Địa chỉ</th>
        <th>Chức năng</th>
       </tr> 
      </thead> 
      <tbody>
        <?php
        if($numgt > 0){
          while ($rowhs = $hs->fetch_assoc()) { ?>
            <tr> 
             
               <td><?=$rowhs['ten']?></td>
               <td><?=$rowhs['dienthoai']?></td> 
               <td><img src="../image/<?=$rowhs['logo']?>" style="max-height: 80px;max-width: 80px;"></td> 
               <td><?=$rowhs['email']?></td>
               <td><?=$rowhs['diachi']?></td>
               <td><a href="index.php?com=sua&type=hoso&id=<?=$rowhs['id']?>">Sửa</a></td>
            </tr> 
         <?php }
       }
        ?>
     </tbody>
   </table> 
    </div> 
    <div class="panel-footer"> 
 
    </div> 
   </div> 
  </div> 
 </div>
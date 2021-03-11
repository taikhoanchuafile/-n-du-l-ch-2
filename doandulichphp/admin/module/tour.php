 <?php
      $tour = mysqli_query($connect,"select * from tour");
      
      $numtour = mysqli_num_rows($tour);
 ?>
 <div class="row"> 
  <h1 class="text-center">QUẢN LÝ TOUR</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách tour</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
       <button type="button" class="btn btn-sm btn-primary btn-create"><a href="index.php?com=them&type=tour" style="color: white;">Thêm mới</a></button> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th class="hidden-xs">Mã số</th> 
        <th>tên tour</th> 
        <th>Hình ảnh</th>
        <th>điểm đến</th>
        <th>Giá tour</th>
        <th>Nội dung</th> 
        <th>Chức năng</th>
       </tr> 
      </thead> 
      <tbody>
        <?php
        if($numtour > 0){
          while ($rowtour = $tour->fetch_assoc()) { ?>
            <tr> 
               <td class="hidden-xs"><?=$rowtour['id']?></td> 
               <td><?=$rowtour['tentour']?></td> 
               <td><img src="../image/<?=$rowtour['hinhanh']?>" style="max-height: 80px;max-width: 80px;"></td> 
               <td><?=$rowtour['diemden']?></td>
               <td><?=$rowtour['gia']?></td>
               <td><?=$rowtour['noidung']?></td>
               <td><a href="index.php?com=sua&type=tour&id=<?=$rowtour['id']?>" style="margin-right: 10px;">Sửa</a><a href="index.php?com=xoa&type=tour&id=<?=$rowtour['id']?>">Xóa</a></td>
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
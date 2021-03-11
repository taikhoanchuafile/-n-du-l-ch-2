 <?php
      $khachsan = mysqli_query($connect,"select * from khachsan");
      
      $numsan = mysqli_num_rows($khachsan);
 ?>
 <div class="row"> 
  <h1 class="text-center">QUẢN LÝ KHÁCH SẠN</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách khách sạn</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
       <button type="button" class="btn btn-sm btn-primary btn-create"><a href="index.php?com=them&type=khachsan" style="color: white;">Thêm mới</a></button> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th class="hidden-xs">Mã số</th> 
        <th>Tên khách sạn</th> 
        <th>Địa chỉ</th>
        <th>Giá</th> 
		<th>Hình ảnh</th>
        <th>Nội dung</th>
        <th>Chức năng</th>
       </tr> 
      </thead> 
      <tbody>
        <?php
        if($numsan > 0){
          while ($rowsan = $khachsan->fetch_assoc()) { ?>
            <tr> 
               <td class="hidden-xs"><?=$rowsan['id']?></td> 
               <td><?=$rowsan['ten']?></td> 
				<td><?=$rowsan['diachi']?></td>
				<td><?=$rowsan['gia']?></td>
               <td><img src="../image/<?=$rowsan['hinh']?>" style="max-height: 100px;max-width: 100px;"></td> 
				<td><?=$rowsan['noidung']?></td>
               <td><a href="index.php?com=sua&type=khachsan&id=<?=$rowsan['id']?>" style="margin-right: 10px;">Sửa</a><a href="index.php?com=xoa&type=khachsan&id=<?=$rowsan['id']?>">Xóa</a></td>
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
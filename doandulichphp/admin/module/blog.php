 <?php
      $nhahang = mysqli_query($connect,"select * from nhahang");
      
      $numnha = mysqli_num_rows($nhahang);
 ?>
 <div class="row"> 
  <h1 class="text-center">QUẢN LÝ NHÀ HÀNG</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách nhà hàng</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
       <button type="button" class="btn btn-sm btn-primary btn-create"><a href="index.php?com=them&type=blog" style="color: white;">Thêm mới</a></button> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th class="hidden-xs">Mã số</th> 
        <th>Tên nhà hàng</th> 
        <th>Hình ảnh</th>
        <th>Nội dung</th> 
		<th>Địa chỉ</th>
        <th>Giá</th>
        <th>Chức năng</th>
       </tr> 
      </thead> 
      <tbody>
        <?php
        if($numnha > 0){
          while ($rownha = $nhahang->fetch_assoc()) { ?>
            <tr> 
               <td class="hidden-xs"><?=$rownha['id']?></td> 
               <td><?=$rownha['ten']?></td> 
               <td><img src="../image/<?=$rownha['hinh']?>" style="max-height: 100px;max-width: 100px;"></td> 
               <td><?=$rownha['noidung']?></td>
				<td><?=$rownha['diachi']?></td>
               <td><?=$rownha['gia']?></td>
               <td><a href="index.php?com=sua&type=blog&id=<?=$rownha['id']?>" style="margin-right: 10px;">Sửa</a><a href="index.php?com=xoa&type=blog&id=<?=$rownha['id']?>">Xóa</a></td>
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
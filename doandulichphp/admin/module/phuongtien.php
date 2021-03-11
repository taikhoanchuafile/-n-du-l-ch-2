 <?php
      $phuongtien = mysqli_query($connect,"select * from phuongtien");
      
      $numtien = mysqli_num_rows($phuongtien);
 ?>
 <div class="row"> 
  <h1 class="text-center">QUẢN LÝ PHƯƠNG TIỆN</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách phương tiện</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
       <button type="button" class="btn btn-sm btn-primary btn-create"><a href="index.php?com=them&type=phuongtien" style="color: white;">Thêm mới</a></button> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th class="hidden-xs">Mã số</th> 
        <th>Tên phương tiện</th> 
        <th>Số lượng chỗ ngồi</th>
        <th>Giá</th> 
		<th>Hình ảnh</th>
        <th>Nội dung</th>
        <th>Chức năng</th>
       </tr> 
      </thead> 
      <tbody>
        <?php
        if($numtien > 0){
          while ($rowtien = $phuongtien->fetch_assoc()) { ?>
            <tr> 
               <td class="hidden-xs"><?=$rowtien['id']?></td> 
               <td><?=$rowtien['ten']?></td> 
				<td><?=$rowtien['chongoi']?></td>
				<td><?=$rowtien['gia']?></td>
               <td><img src="../image/<?=$rowtien['hinh']?>" style="max-height: 100px;max-width: 100px;"></td> 
				<td><?=$rowtien['noidung']?></td>
               <td><a href="index.php?com=sua&type=phuongtien&id=<?=$rowtien['id']?>" style="margin-right: 10px;">Sửa</a><a href="index.php?com=xoa&type=phuongtien&id=<?=$rowsan['id']?>">Xóa</a></td>
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
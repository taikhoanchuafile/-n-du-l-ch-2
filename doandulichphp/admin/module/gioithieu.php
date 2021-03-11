 <?php
      $gt = mysqli_query($connect,"select * from gioithieu");
      
      $numgt = mysqli_num_rows($gt);
 ?>
 <div class="row"> 
  <h1 class="text-center">QUẢN LÝ GIỚI THIỆU</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách nội dung</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
      <?php  
       if($numgt == 0){ ?>
          <button type="button" class="btn btn-sm btn-primary btn-create"><a href="index.php?com=them&type=gioithieu" style="color: white;">Thêm mới</a></button>
       <?php }
      ?>
        
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th class="hidden-xs">Mã số</th> 
        <th>Title giới thiệu</th> 
        <th>Hình ảnh</th>
        <th>Nội dung</th> 
        <th>Ngày đăng</th>
        <th>Chức năng</th>
       </tr> 
      </thead> 
      <tbody>
        <?php
        if($numgt > 0){
          while ($rowgt = $gt->fetch_assoc()) { ?>
            <tr> 
               <td class="hidden-xs"><?=$rowgt['id']?></td> 
               <td><?=$rowgt['ten']?></td> 
               <td><img src="../image/<?=$rowgt['hinhanh']?>" style="max-height: 80px;max-width: 80px;"></td> 
               <td><?=$rowgt['noidung']?></td>
               <td><?=date('d-m-y',$rowgt['ngay'])?></td>
               <td><a href="index.php?com=sua&type=gt&id=<?=$rowgt['id']?>">Sửa</a></td>
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
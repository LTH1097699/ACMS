<div class="box-body">

    <div class="box-body">
        <?php foreach ($thongtinnhanviens as $thongtinnhanvien): ?>
            <?php if ($thongtinnhanvien->id == $bangchamcong->id_nhansu ): ?>
              <div class="container-fluid" style="border-bottom-style: ridge;">
            <p><strong>Tên nhân sự:  {{$thongtinnhanvien->hovaten}}</strong><br>
                <strong>Mã nhân sự:  {{$thongtinnhanvien->ma_nhanvien}}</strong><br>
                <strong>CMND:  {{$thongtinnhanvien->cmnd}}</strong>
            </p>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-3">
        {!! Form::normalInput('tonggiothucte', 'Tong gio thuc te', $errors,$bangchamcong) !!}
    </div>
    <div class="col-sm-3">
        {!! Form::normalInput('tonggiotheoca', 'Tong gio theo ca', $errors,$bangchamcong) !!} 

    </div>

</div>
</div>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">
    <div class="col-sm-3">
        {!! Form::normalInput('thoigiantangca', 'Thoi gian tang ca', $errors,$bangchamcong) !!} 

    </div>

</div>
</div>



</div>

</div>

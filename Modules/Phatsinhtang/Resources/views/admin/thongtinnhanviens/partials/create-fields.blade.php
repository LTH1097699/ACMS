  <div class="box-body">
   <?php

   $arrayGioiTinh = array("nam","nu");

?>
<div class="box-body">
  <div class="container-fluid" style="border-bottom-style: ridge;">
      <div class="row">
        <div class="col-sm-3">
            {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors,$thongtinnhanvien ) !!}    
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalInput('hovaten', 'Ho va ten', $errors,$thongtinnhanvien) !!}
        </div>
        <div class="col-sm-3">
            {!! Form::normalSelect('gioitinh', 'Gioi tinh', $errors,$arrayGioiTinh,$thongtinnhanvien) !!}

        </div>
        <div class="col-sm-3">
            {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaysinh', 'ngay sinh', $errors,$thongtinnhanvien) !!}



        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            {!! Form::normalTextareaFormControl('diachi', 'Dia chi thuong tru', $errors,$thongtinnhanvien) !!}
        </div>
    </div>
</div>  
</div>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
  <div class="row">

      <div class="col-sm-3">
          {!! Form::normalInput('cmnd', 'CMND', $errors,$thongtinnhanvien) !!}
      </div>
      <div class="col-sm-3">
          {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaycap', 'Ngay cap', $errors,$thongtinnhanvien) !!}

      </div>
      <div class="col-sm-3">
          {!! Form::normalInput('noicap', 'Noi cap', $errors,$thongtinnhanvien) !!}
      </div>
  </div>
</div>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
  <div class="row">

      <div class="col-sm-3">
          {!! Form::normalInput('tongiao', 'Ton giao', $errors,$thongtinnhanvien) !!}
      </div>
      <div class="col-sm-3">
          {!! Form::normalInput('dantocthieuso', 'Dan toc thieu so', $errors,$thongtinnhanvien) !!} 

      </div>

  </div>
</div>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
  <div class="row">

      <div class="col-sm-6">
          {!! Form::normalInput('chuyenmon', 'Chuyen mon', $errors,$thongtinnhanvien) !!}
      </div>
      <div class="col-sm-6">
          {!! Form::normalInput('trinhdo', 'Trinh do', $errors,$thongtinnhanvien) !!}

      </div>


  </div>
  <div class="row">
      {!! Form::normalInput('vanbang_chungchi', 'Van bang, chung chi', $errors,$thongtinnhanvien) !!}
  </div>
</div>

<div class="form-group">
  {!! Form::Label('ma_donvi', 'Mã đơn vị') !!}
  <select class="form-control" name="ma_donvi">
    @foreach($noibotcts as $noibotct)
      <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  {!! Form::Label('idtrangthai', 'Trạng thái') !!}
  <select class="form-control" name="idtrangthai">
    @foreach($trangthais as $trangthai)
      <option value="{{$trangthai->id}}">{{$trangthai->name}}</option>
    @endforeach
  </select>
</div>



<div id="dynamicCheck">
   <input type="button" value="Create Element" onclick="createNewElement();"/>
</div>

<div id="newElementId">New inputbox goes here:</div>
</div>




<?php
$arrayGioiTinh = array("nam","nu");

?>
<div class="box-body">
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-6">
        <label>Hinh anh</label>
        <input type="file" name="hinhanh">
        @if($errors->has('hinhanh'))
        <div class="alert alert-danger">{{ $errors->first('hinhanh') }}</div>
        @endif
      </div>
      
    </div>

  </div>
  <div class="container-fluid" style="border-bottom-style: ridge;">
   
    <div class="row">
      <div class="col-sm-3">
        {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors, ) !!}    
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        {!! Form::normalInput('hovaten', 'Họ và tên', $errors) !!}
      </div>
      <div class="col-sm-3">
        {!! Form::normalSelect('gioitinh', 'Giới tính', $errors,$arrayGioiTinh) !!}
      </div>
      
      <div class="col-sm-3">

        <div class="form-group ">
          <label for="ngaysinh">Ngày sinh</label>
          <input  name="ngaysinh" type="text" id="ngaysinh" class="form-control" readonly>
          @if($errors->has('ngaysinh'))
          <div class="alert alert-danger">{{ $errors->first('ngaysinh') }}</div>
          @endif
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-sm-3">
        {!! Form::normalTextareaFormControl('diachi', 'Đia chỉ thường trú', $errors) !!}
      </div>
    </div>
  </div>
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-3">
        {!! Form::normalInput('cmnd', 'CMND', $errors) !!}
      </div>
      <div class="col-sm-3">


        <div class="form-group ">
          <label for="ngaycap">Ngày cấp</label>
          <input name="ngaycap" type="text" id="ngaycap" class="form-control" readonly>
          @if($errors->has('ngaycap'))
          <div class="alert alert-danger">{{ $errors->first('ngaycap') }}</div>
          @endif
        </div>

      </div>
      <div class="col-sm-3">
        {!! Form::normalInput('noicap', 'Nơi cấp', $errors) !!}
      </div>
    </div>
  </div>
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-3">
        {!! Form::normalInput('tongiao', 'Tôn giáo', $errors) !!}
      </div>
      <div class="col-sm-3">
        {!! Form::normalInput('dantocthieuso', 'Dân tộc thiểu số', $errors) !!} 

      </div>
      
    </div>
  </div>
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-6">
        {!! Form::normalInput('chuyenmon', 'Chuyên môn', $errors) !!}
      </div>
      <div class="col-sm-6">
        {!! Form::normalInput('trinhdo', 'Trình độ', $errors) !!}

      </div>
    </div>
    <div class="row">
      {!! Form::normalInput('vanbang_chungchi', 'Văn bằng, chứng chỉ', $errors) !!}
    </div>
  </div>
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-6">
        <div class="form-group">
          {!! Form::Label('ma_donvi', 'Mã đơn vị:') !!}
          <select class="form-control" name="ma_donvi">
            <option value=""></option>
            @foreach($noibotcts as $noibotct)
            <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group link-type-depended link-page">
         {!! Form::Label('ma_trangthai', 'Trạng thái') !!}
         <select class="form-control" name="ma_trangthai" id="ma_trangthai">
          <option value=""></option>
          @foreach ($trangthais as $trangthai)
          <option value="{{ $trangthai->id }}">
            {{ $trangthai->name }}
          </option>
          @endforeach
        </select>
      </div>
    </div>
  </div>

</div>
{{-- //hop dong --}}
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-3">
        {!! Form::Label('mahopdong', 'Mã hợp đồng') !!}
         <select class="form-control" name="sohopdong" id="sohopdong">
          <option value=""></option>
          @foreach ($hopdongs as $hopdong)
          <option value="{{ $hopdong->id }}">
            {{ $hopdong->mahopdong }}
          </option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-3">

        <div class="form-group ">
          <label for="ngaysinh">Hiệu lực từ ngày</label>
          <input  name="hieuluctungay" type="text" id="startDay" class="form-control" readonly>
         
        </div>
      </div>
      <div class="col-sm-3">

        <div class="form-group ">
          <label for="ngaysinh">Đến ngày</label>
          <input  name="denngay" type="text" id="endDay" class="form-control" readonly>
         
        </div>
      </div>

      <div class="col-sm-3">

        <div class="form-group ">
          <label for="ngaysinh">Còn lại</label>
          <input  name="resultss" type="text" id="resultss" class="form-control" readonly>
          
        </div>
      </div>

    </div>
  </div>










</div>

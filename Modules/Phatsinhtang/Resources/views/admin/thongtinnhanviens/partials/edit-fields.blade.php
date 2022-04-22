<div class="box-body">
 <?php

 $arrayGioiTinh = array("nam","nu");

 ?>
 <div class="box-body">
  <div class="container-fluid" style="border-bottom-style: ridge;">
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          
          <img src="{{ asset('storage/'.$thongtinnhanvien->hinhanh) }}" width="200" height="250"></a>
        </div>
        <input type="file" name="hinhanh" value="{{$thongtinnhanvien->hinhanh}}" >
        @if($errors->has('hinhanh'))
        <div class="alert alert-danger">{{ $errors->first('hinhanh') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors,$thongtinnhanvien ) !!}    
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        {!! Form::normalInput('hovaten', 'Họ và tên', $errors,$thongtinnhanvien) !!}
      </div>
      <div class="col-sm-3">
        {!! Form::normalSelect('gioitinh', 'Giới tính', $errors,$arrayGioiTinh,$thongtinnhanvien) !!}

      </div>
      <div class="col-sm-3">
        <!-- {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaysinh', 'ngay sinh', $errors,$thongtinnhanvien) !!} -->

        <div class="form-group ">
          <label for="ngaysinh">Ngày sinh</label>
          <input name="ngaysinh" type="text" id="ngaysinh" class="form-control" readonly value="{{$thongtinnhanvien->ngaysinh}}">
          @if($errors->has('ngaysinh'))
          <div class="alert alert-danger">{{ $errors->first('ngaysinh') }}</div>
          @endif
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        {!! Form::normalTextareaFormControl('diachi', 'Địa chỉ thường trú', $errors,$thongtinnhanvien) !!}
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
     
      <div class="form-group ">
        <label for="ngaycap">Ngày cấp</label>
        <input name="ngaycap" type="text" id="ngaycap" class="form-control" readonly value="{{$thongtinnhanvien->ngaycap}}">
        @if($errors->has('ngaycap'))
        <div class="alert alert-danger">{{ $errors->first('ngaycap') }}</div>
        @endif
      </div>
    </div>
    <div class="col-sm-3">
      {!! Form::normalInput('noicap', 'Nơi cấp', $errors,$thongtinnhanvien) !!}
    </div>
  </div>
</div>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
  <div class="row">

    <div class="col-sm-3">
      {!! Form::normalInput('tongiao', 'Tôn giáo', $errors,$thongtinnhanvien) !!}
    </div>
    <div class="col-sm-3">
      {!! Form::normalInput('dantocthieuso', 'Dân tộc thiểu số', $errors,$thongtinnhanvien) !!} 

    </div>

  </div>
</div>
<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
  <div class="row">

    <div class="col-sm-6">
      {!! Form::normalInput('chuyenmon', 'Chuyên môn', $errors,$thongtinnhanvien) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::normalInput('trinhdo', 'Trình độ', $errors,$thongtinnhanvien) !!}

    </div>


  </div>
  <div class="row">
    {!! Form::normalInput('vanbang_chungchi', 'Văn bằng, chứng chỉ', $errors,$thongtinnhanvien) !!}
  </div>
</div>



<div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
  <div class="row">

    <div class="col-sm-6">
      <div class="form-group link-type-depended link-page">
       {!! Form::Label('ma_donvi', 'Mã đơn vị') !!}
       <select class="form-control" name="ma_donvi" id="ma_donvi">
        <option value=""></option>
        @foreach ($noibotcts as $noibotct)
        <option value="{{ $noibotct->madonvi }}" {{ $thongtinnhanvien->ma_donvi == $noibotct->madonvi ? 'selected' : '' }}>
          {{ $noibotct->tendonvi }}
        </option>
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
      <option value="{{ $trangthai->id }}" {{ $thongtinnhanvien->ma_trangthai == $trangthai->id ? 'selected' : '' }}>
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
        {!! Form::Label('sohopdong', 'Mã hợp đồng') !!}
         <select class="form-control" name="sohopdong" id="sohopdong">
          <option value=""></option>
          @foreach ($hopdongs as $hopdong)
          <option value="{{ $hopdong->id }}" {{ $thongtinnhanvien->sohopdong == $hopdong->id ? 'selected' : '' }}>
            {{ $hopdong->mahopdong }}
          </option>
          @endforeach
        </select>
      </div>
      <div class="col-sm-3">

        <div class="form-group ">
          <label for="ngaysinh">Hiệu lực từ ngày</label>
          <input  name="hieuluctungay" type="text" id="startDay" class="form-control" readonly value="{{$thongtinnhanvien->hieuluctungay}}">
         
        </div>
      </div>
      <div class="col-sm-3">

        <div class="form-group ">
          <label for="ngaysinh">Đến ngày</label>
          <input  name="denngay" type="text" id="endDay" class="form-control" readonly value="{{$thongtinnhanvien->denngay}}">
         
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

<!-- 
<div id="dynamicCheck">
 <input type="button" value="Create Element" onclick="createNewElement();"/>
</div>

<div id="newElementId">New inputbox goes here:</div>
</div> -->



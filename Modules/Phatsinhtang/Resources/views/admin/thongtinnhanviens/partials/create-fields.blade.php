  <div class="box-body">
   <?php

   $arrayGioiTinh = array("nam","nu");

   ?>
   <div class="box-body">
    <div class="container-fluid" style="border-bottom-style: ridge;">
      <div class="row">
        <div class="col-sm-3">
          {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors ) !!}    
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">
          {!! Form::normalInput('hovaten', 'Ho va ten', $errors) !!}
        </div>
        <div class="col-sm-3">
          {!! Form::normalSelect('gioitinh', 'Gioi tinh', $errors,$arrayGioiTinh) !!}

        </div>
        <div class="col-sm-3">
          

         <div class="form-group ">
          <label for="ngaysinh">ngaysinh</label>
          <input placeholder="ngaysinh" name="ngaysinh" type="text" id="ngaysinh" class="form-control" readonly>
          @if($errors->has('ngaysinh'))
          <div class="alert alert-danger">{{ $errors->first('ngaysinh') }}</div>
          @endif
        </div>


        
      </div></div> 
      <div class="row">
        <div class="col-sm-3">
          {!! Form::normalTextarea('diachi', 'Dia chi thuong tru', $errors) !!}
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
          <label for="ngaycap">ngay cap</label>
          <input placeholder="ngaycap" name="ngaycap" type="text" id="ngaycap" class="form-control" readonly>
          @if($errors->has('ngaycap'))
          <div class="alert alert-danger">{{ $errors->first('ngaycap') }}</div>
          @endif
        </div>

      </div>
      <div class="col-sm-3">
        {!! Form::normalInput('noicap', 'Noi cap', $errors) !!}
      </div>
    </div>
  </div>
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-3">
        {!! Form::normalInput('tongiao', 'Ton giao', $errors) !!}
      </div>
      <div class="col-sm-3">
        {!! Form::normalInput('dantocthieuso', 'Dan toc thieu so', $errors) !!} 

      </div>

    </div>
  </div>
  <div class="container-fluid" style="border-bottom-style: ridge; margin-top: 15px;">
    <div class="row">

      <div class="col-sm-6">
        {!! Form::normalInput('chuyenmon', 'Chuyen mon', $errors) !!}
      </div>
      <div class="col-sm-6">
        {!! Form::normalInput('trinhdo', 'Trinh do', $errors) !!}

      </div>


    </div>
    <div class="row">
      {!! Form::normalInput('vanbang_chungchi', 'Van bang, chung chi', $errors) !!}
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


  //van bang
<!-- <div id="dynamicCheck">
   <input type="button" value="Create Element" onclick="createNewElement();"/>
</div>

<div id="newElementId">New inputbox goes here:</div>
</div> -->


<div class="form-group ">
  <label for="hinhanh">Hinh anh</label>
  <input placeholder="hinhanh" name="hinhanh" type="file" id="hinhanh" class="form-control">
  @if($errors->has('hinhanh'))
  <div class="alert alert-danger">{{ $errors->first('hinhanh') }}</div>
  @endif
</div>




<div class="box-body">
   
    {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors) !!}
    {!! Form::normalInput('hovaten', 'Họ và tên', $errors) !!}
    {!! Form::normalInput('gioitinh', 'Giới tính', $errors) !!}

    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaysinh', 'Ngày sinh', $errors) !!}

    {!! Form::normalInput('cmnd', 'CMND', $errors) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaycap', 'Ngày cấp', $errors) !!}
    {!! Form::normalInput('noicap', 'Nơi cấp', $errors) !!}

    {!! Form::normalInput('tongiao', 'Tôn giáo', $errors) !!}
    {!! Form::normalInput('dantocthieuso', 'Dân tộc thiểu số', $errors) !!}
    {!! Form::normalTextarea('diachi', 'Địa chỉ thường trú', $errors) !!}

    {!! Form::normalInput('chuyenmon', 'Chuyên môn', $errors) !!}

    {!! Form::normalInput('trinhdo', 'Trình độ', $errors) !!}

    {!! Form::normalInput('vanbang_chungchi', 'Văn bằng, chứng chỉ', $errors) !!}

  

    

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


</div>

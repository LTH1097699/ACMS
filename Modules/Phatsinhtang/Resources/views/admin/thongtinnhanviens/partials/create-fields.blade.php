<div class="box-body">
    <p>
        Your fields //
    </p>
    {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors) !!}
    {!! Form::normalInput('hovaten', 'Ho va ten', $errors) !!}
    {!! Form::normalInput('gioitinh', 'Gioi tinh', $errors) !!}

    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaysinh', 'ngay sinh', $errors) !!}

    {!! Form::normalInput('cmnd', 'CMND', $errors) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaycap', 'Ngay cap', $errors) !!}
    {!! Form::normalInput('noicap', 'Noi cap', $errors) !!}

    {!! Form::normalInput('tongiao', 'Ton giao', $errors) !!}
    {!! Form::normalInput('dantocthieuso', 'Dan toc thieu so', $errors) !!}

    {!! Form::normalTextarea('diachi', 'Dia chi thuong tru', $errors) !!}
    {!! Form::normalInput('chuyenmon', 'Chuyen mon', $errors) !!}

    {!! Form::normalInput('trinhdo', 'Trinh do', $errors) !!}

    {!! Form::normalInput('vanbang_chungchi', 'Van bang, chung chi', $errors) !!}

    {!! Form::normalInput('trinhdo', 'Trinh do', $errors) !!}

    {{-- {!! Form::normalSelect('ma_donvi', 'Ma don vi', $errors, $chuyennoibotcts) !!} --}}

  <div class="form-group">
  {!! Form::Label('ma_donvi', 'Item:') !!}
  <select class="form-control" name="ma_donvi">
    @foreach($noibotcts as $noibotct)
      <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
    @endforeach
  </select>
</div>


</div>

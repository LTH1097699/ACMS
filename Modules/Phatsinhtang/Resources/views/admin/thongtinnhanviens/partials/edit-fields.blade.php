<div class="box-body">
    <p>
        Your fields //
    </p>

    {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('hovaten', 'Ho va ten', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('gioitinh', 'Gioi tinh', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaysinh', 'ngay sinh', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('cmnd', 'CMND', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaycap', 'Ngay cap', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('noicap', 'Noi cap', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('tongiao', 'Ton giao', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('dantocthieuso', 'Dan toc thieu so', $errors, $thongtinnhanvien) !!}

    {!! Form::normalTextareaFormControl('diachi', 'Dia chi thuong tru', $errors, $thongtinnhanvien ) !!}
    {!! Form::normalInput('chuyenmon', 'Chuyen mon', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('trinhdo', 'Trinh do', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('vanbang_chungchi', 'Van bang, chung chi', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('trinhdo', 'Trinh do', $errors, $thongtinnhanvien) !!}

    <div class="form-group link-type-depended link-page">
     {!! Form::Label('ma_donvi', 'Ma don vi:') !!}
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

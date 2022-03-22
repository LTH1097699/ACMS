<div class="box-body">
 

    {!! Form::normalInput('ma_nhanvien', 'Mã nhân viên', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('hovaten', 'Họ và tên', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('gioitinh', 'Giới tính', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaysinh', 'Ngày sinh', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('cmnd', 'CMND', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaycap', 'Ngày cấp ()', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('noicap', 'Nơi cấp', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('tongiao', 'Tôn giáo', $errors, $thongtinnhanvien) !!}
    {!! Form::normalInput('dantocthieuso', 'Dân tộc thiểu số', $errors, $thongtinnhanvien) !!}

    {!! Form::normalTextarea('diachi', 'Địa chỉ thường trú', $errors, $thongtinnhanvien ) !!}

    {!! Form::normalInput('chuyenmon', 'Chuyên môn', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('trinhdo', 'Trình độ', $errors, $thongtinnhanvien) !!}

    {!! Form::normalInput('vanbang_chungchi', 'Văn bằng, chứng chỉ', $errors, $thongtinnhanvien) !!}

  

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

    <div class="form-group link-type-depended link-page">
     {!! Form::Label('idtrangthai', 'Trạng thái') !!}
    <select class="form-control" name="idtrangthai" id="idtrangthai">
        <option value=""></option>
        @foreach ($trangthais as $trangthai)
            <option value="{{ $trangthai->id }}" {{ $thongtinnhanvien->idtrangthai == $trangthai->id ? 'selected' : '' }}>
                {{ $trangthai->name }}
            </option>
        @endforeach
    </select>
</div>
</div>

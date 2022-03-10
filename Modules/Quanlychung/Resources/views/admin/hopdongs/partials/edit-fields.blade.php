<div class="box-body">
    <p>
        Your fields //
    </p>
    <select class="form-control" name="ma_nhanvien" id="ma_nhanvien">
        <option value=""></option>
        @foreach ($thongtinnhanviens as $nhanvien)
            <option value="{{ $nhanvien->ma_nhanvien }}" {{ $hopdong->manhanvien == $nhanvien->ma_nhanvien ? 'selected' : '' }}>
                {{ $nhanvien->hovaten }}
            </option>
        @endforeach
    </select>
    {!! Form::normalInput('sohopdong', 'Số hợp đồng', $errors, $hopdong) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngayki', 'Ngày kí', $errors, $hopdong) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaybatdau', 'Ngày bắt đầu', $errors, $hopdong) !!}
    {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngayketthuc', 'Ngày kết thúc', $errors, $hopdong) !!}
</div>

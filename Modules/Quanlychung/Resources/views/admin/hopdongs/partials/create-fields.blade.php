<div class="box-body">
  <p>
    Your fields //
  </p>
{!! Form::normalInput('sohopdong', 'Số hợp đồng', $errors ) !!}


  <div class="form-group">
  {!! Form::Label('manhanvien', 'Item:') !!}
  <select class="form-control" name="manhanvien">
    @foreach($thongtinnhanviens as $thongtinnhanvien)
      <option value="{{$thongtinnhanvien->ma_nhanvien}}">{{$thongtinnhanvien->hovaten}}</option>
    @endforeach
  </select>
</div>

  
  {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngayki', 'Ngày kí', $errors) !!}
  {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngaybatdau', 'Ngày bắt đầu', $errors) !!}
  {!! Form::normalInputOfType(date('d-m-Y H:i:s'),'ngayketthuc', 'Ngày kết thúc', $errors) !!}

</div>

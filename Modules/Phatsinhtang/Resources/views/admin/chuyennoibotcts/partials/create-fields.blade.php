<div class="box-body">
    <p>
        Chuyển nội bộ TCT
    </p>

    {!! Form::normalInput('manhanvien', 'Mã nhân viên', $errors) !!}


 {{--    <div class="form-group">
        {!! Form::Label('ma_donvi', 'Mã chức danh') !!}
      <select class="form-control" name="ma_donvi">
        @foreach($noibotcts as $noibotct)
        <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
        @endforeach
    </select>
</div> --}}


<div class="form-group">
  {!! Form::Label('ma_donvi', 'Mã đơn vị TCT') !!}
  <select class="form-control" name="ma_donvi">
    @foreach($noibotcts as $noibotct)
    <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
    @endforeach
</select>
</div>

</div>

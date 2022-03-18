<div class="box-body">
    <p>
        chuyen noi bo tct
    </p>
<<<<<<< HEAD
    {!! Form::normalInput('manhanvien', 'Mã nhân viên', $errors) !!}
=======
    {{-- {!! Form::normalInput('manhanvien', 'Mã nhân viên', $errors) !!} --}}
>>>>>>> aadb171b943f5cb462414c70ba65c372278224be

 {{--    <div class="form-group">
        {!! Form::Label('ma_donvi', 'Mã chức danh') !!}
      <select class="form-control" name="ma_donvi">
        @foreach($noibotcts as $noibotct)
        <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
        @endforeach
    </select>
</div> --}}
<<<<<<< HEAD
=======
{!! Form::text('manhanvien','asdfa') !!}
>>>>>>> aadb171b943f5cb462414c70ba65c372278224be


<div class="form-group">
  {!! Form::Label('ma_donvi', 'Mã đơn vị TCT') !!}
  <select class="form-control" name="ma_donvi">
    @foreach($noibotcts as $noibotct)
    <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
    @endforeach
</select>
</div>

</div>

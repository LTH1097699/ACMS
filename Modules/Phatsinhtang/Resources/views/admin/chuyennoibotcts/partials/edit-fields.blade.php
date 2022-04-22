
<div class="box-body">
<div class="form-group">
    <div class="form-group link-type-depended link-page">
     {!! Form::Label('ma_donvi', 'Mã đơn vị:') !!}
     <select class="form-control" name="ma_donvi" id="ma_donvi" >
    <option value="">-chọn mã đơn vị-</option>
      @foreach ($noibotcts as $noibotct)
      <option value="{{ $noibotct->madonvi }}" {{ $thongtinnhanvien->ma_donvi == $noibotct->madonvi ? 'selected' : '' }}>
        {{ $noibotct->tendonvi }}
    </option>
    @endforeach

</select>
</div>


{!! Form::normalInput('hovaten', 'Họ và tên', $errors,$thongtinnhanvien) !!} 
</div>
</div>
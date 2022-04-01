
<div class="box-body">
<div class="form-group">
    <div class="form-group link-type-depended link-page">
     {!! Form::Label('ma_donvi', 'Ma don vi:') !!}
     <select class="form-control" name="ma_donvi" id="ma_donvi" >
    <option value=""></option>
      @foreach ($noibotcts as $noibotct)
      <option value="{{ $noibotct->madonvi }}" {{ $thongtinnhanvien->ma_donvi == $noibotct->madonvi ? 'selected' : '' }}>
        {{ $noibotct->tendonvi }}
    </option>
    @endforeach

</select>
</div>


{!! Form::normalInput('hovaten', 'Ho va ten', $errors,$thongtinnhanvien) !!} 
</div>
</div>
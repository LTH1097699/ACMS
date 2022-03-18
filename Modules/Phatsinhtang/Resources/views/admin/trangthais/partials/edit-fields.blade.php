<div class="box-body">
    <p>
        Your fields //
    </p>
    {!! Form::normalInput('name', 'Ten trang thai', $errors,$trangthai) !!}
    {!! Form::normalTextareaFormControl('note', 'Ghi chu', $errors, $trangthai) !!}
</div>

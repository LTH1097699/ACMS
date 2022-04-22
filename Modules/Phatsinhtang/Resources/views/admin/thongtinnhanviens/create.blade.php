@extends('layouts.master')

@section('content-header')
<h1>
    {{ trans('phatsinhtang::thongtinnhanviens.title.create thongtinnhanvien') }}
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
    <li><a href="{{ route('admin.phatsinhtang.thongtinnhanvien.index') }}">{{ trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens') }}</a></li>
    <li class="active">{{ trans('phatsinhtang::thongtinnhanviens.title.create thongtinnhanvien') }}</li>
</ol>
@stop

@section('content')
{!! Form::open(['route' => ['admin.phatsinhtang.thongtinnhanvien.store'], 'method' => 'post','enctype' => 'multipart/form-data']) !!}
<div class="row">
    <div class="col-md-12">
        <div class="nav-tabs-custom">
            @include('partials.form-tab-headers')
            <div class="tab-content">
                <?php $i = 0; ?>
                @foreach (LaravelLocalization::getSupportedLocales() as $locale => $language)
                <?php $i++; ?>
                <div class="tab-pane {{ locale() == $locale ? 'active' : '' }}" id="tab_{{ $i }}">
                    @include('phatsinhtang::admin.thongtinnhanviens.partials.create-fields', ['lang' => $locale])
                </div>
                @endforeach

                
                <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.create') }}</button>
                <a class="btn btn-danger pull-right btn-flat" href="{{ route('admin.phatsinhtang.thongtinnhanvien.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
            </div>
        </div>
    </div> {{-- end nav-tabs-custom --}}
</div>
</div>
{!! Form::close() !!}
@stop

@section('footer')
<a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
<dl class="dl-horizontal">
    <dt><code>b</code></dt>
    <dd>{{ trans('core::core.back to index') }}</dd>
</dl>
@stop

@push('js-stack')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<script type="text/JavaScript">
    function createNewElement() {
    // First create a DIV element.
    var txtNewInputBox = document.createElement('div');

    // Then add the content (a new input box) of the element.
    txtNewInputBox.innerHTML = "<input type='text' id='newInputBox'>";

    // Finally put it where it is supposed to appear.
    document.getElementById("newElementId").appendChild(txtNewInputBox);
}
</script>
<script type="text/javascript">
    $( document ).ready(function() {
        $(document).keypressAction({
            actions: [
            { key: 'b', route: "<?= route('admin.phatsinhtang.thongtinnhanvien.index') ?>" }
            ]
        });
    });
</script>
<script>
    $( document ).ready(function() {
        $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });
    });
</script>

<script>
    $(function() {
      $('input[name="ngaysinh"],input[name="ngaycap"],input[name="hieuluctungay"],input[name="denngay"]').daterangepicker({
         singleDatePicker: true,
         showDropdowns: true,
         locale: {
            "format": "YYYY-MM-DD",
            "separator": " - ",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
            "Su",
            "Mo",
            "Tu",
            "We",
            "Th",
            "Fr",
            "Sa"
            ],
            "monthNames": [
            "Tháng 1",
            "Tháng 2",
            "Tháng 3",
            "Tháng 4",
            "Tháng 5",
            "Tháng 6",
            "Tháng 7",
            "Tháng 8",
            "Tháng 9",
            "Tháng 10",
            "Tháng 11",
            "Tháng 12"
            ],
            "firstDay": 1
        },
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });
</script>
<script>

    $('#startDay,#endDay').on('change',function(){
        var start_date = new Date(document.getElementById('startDay').value);
        var end_date = new Date(document.getElementById('endDay').value);

        console.log(start_date);
        console.log(end_date);

        var time_difference = end_date.getTime() - start_date.getTime();
   
    var days_difference = time_difference / (1000*3600*24);
    console.log(days_difference);
    
    document.getElementById('resultss').value = days_difference;

});
</script>
@endpush

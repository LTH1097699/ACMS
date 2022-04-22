@extends('layouts.master')

@section('content-header')
<h1>
    {{ trans('bangchamcong::bangchamcongs.title.bangchamcongs') }}
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
    <li class="active">{{ trans('bangchamcong::bangchamcongs.title.bangchamcongs') }}</li>
</ol>
@stop
<?php
$searchhh = array("sogioditre"=>"Đi trễ","thoigiantangca"=>"Tăng ca");
$bbs="";
?>
@section('content')
<div class="row">

    <div class="col-xs-12">
        <div class="box-body">
            {!! Form::open(['route' => ['admin.bangchamcong.bangchamcong.search'], 'method' => 'GET']) !!}
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                      <label class="form-label" for="form1">Tìm kiếm theo giờ</label>
                      <select class="form-control" aria-label=".form-select-lg example" name="searchhh">
                          <option selected>Open this select menu</option>
                          @foreach($searchhh as $key => $value)
                          <option  value="{{$key}}">{{$value}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="col-md-3">
                     <div class="form-outline">
                        <label class="form-label" for="form1">Tìm kiếm theo ngày</label>
                        <input type="text" class="form-control" readonly  aria-label="Search" name="created_at" autocomplete="off"/>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:15px;">
                <div class="col-md-3">

                  <div id="search-autocomplete" class="form-outline">
                    <label class="form-label" for="form1">Tên nhân sự</label>
                    <input type="text" class="form-control" name="namenhanvien" id="namenhanvien" autocomplete="off" />
                    <input type="hidden" name="idss" id="idss" autocomplete="off" />
                </div>
            </div>
            <div class="col-md-3">
             <div class="form-outline">
                <label class="form-label" for="form1">Mã nhân sự</label>
                <input type="text" class="form-control" readonly aria-label="Search" name="ma_nv_s" id="ma_nv_s" autocomplete="off" />
            </div>
        </div>
        <div class="col-md-3">
          <input style="margin-top: 25px;" class="btn btn-primary" type="submit" value="Tìm kiếm"> 
      </div>
  </div>
</div>
{!! Form::close() !!}
</div>





      <!-- <div class="row">
        <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
            <a href="{{ route('admin.bangchamcong.bangchamcong.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                <i class="fa fa-pencil"></i> {{ trans('bangchamcong::bangchamcongs.button.create bangchamcong') }}
            </a>
        </div>

    </div> -->
    
    <div class="box box-primary">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>mã nhân sự</th>
                            <th>CMND</th>
                            <th>Tên nhân sự</th>
                            <th>Số giờ thực tế</th>
                            <th>Số giờ theo ca</th>
                            <th>Số giờ đi trễ</th>
                            <th>Số giờ tăng ca</th>

                            <th>{{ trans('core::core.table.created at') }}</th>
                            <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($bangchamcongs)): ?>
                            <?php foreach ($bangchamcongs as $bangchamcong): ?>
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                            <?php foreach ($thongtinnhanviens as $thongtinnhanvien): ?>
                                            <?php if ($thongtinnhanvien->id == $bangchamcong->id_nhansu ): ?>
                                                {{ $thongtinnhanvien->ma_nhanvien }}
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">

                                         <?php foreach ($thongtinnhanviens as $thongtinnhanvien): ?>
                                            <?php if ($thongtinnhanvien->id == $bangchamcong->id_nhansu ): ?>
                                                {{ $thongtinnhanvien->cmnd }}
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                     <?php foreach ($thongtinnhanviens as $thongtinnhanvien): ?>
                                        <?php if ($thongtinnhanvien->id == $bangchamcong->id_nhansu ): ?>
                                            {{ $thongtinnhanvien->hovaten }}
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                    {{ $bangchamcong->tonggiothucte }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                    {{ $bangchamcong->tonggiotheoca }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                    {{ $bangchamcong->tonggiotheoca - $bangchamcong->tonggiothucte }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                    {{ $bangchamcong->thoigiantangca }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}">
                                    {{ $bangchamcong->created_at->format('d/m/Y') }}
                                </a>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.bangchamcong.bangchamcong.edit', [$bangchamcong->id]) }}" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                    <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-delete-confirmation" data-action-target="{{ route('admin.bangchamcong.bangchamcong.destroy', [$bangchamcong->id]) }}"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>mã nhân sự</th>
                    <th>CMND</th>
                    <th>Tên nhân sự</th>
                    <th>Số giờ thực tế</th>
                    <th>Số giờ theo ca</th>
                    <th>Số giờ đi trễ</th>
                    <th>Số giờ tăng ca</th>
                    
                    <th>{{ trans('core::core.table.created at') }}</th>
                    <th>{{ trans('core::core.table.actions') }}</th>
                </tr>
            </tfoot>
        </table>
        <!-- /.box-body -->
    </div>
</div>
<!-- /.box -->
</div>
</div>
</div>
@include('core::partials.delete-modal')
@stop

@section('footer')
<a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
<dl class="dl-horizontal">
    <dt><code>c</code></dt>
    <dd>{{ trans('bangchamcong::bangchamcongs.title.create bangchamcong') }}</dd>
</dl>
@stop

@push('js-stack')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />   
<script type="text/javascript">
    $( document ).ready(function() {
        $(document).keypressAction({
            actions: [
            { key: 'c', route: "<?= route('admin.bangchamcong.bangchamcong.create') ?>" }
            ]
        });
    });
</script>
<?php $locale = locale(); ?>
<script type="text/javascript">
    $(function () {
        $('.data-table').dataTable({
            "paginate": true,
            "lengthChange": true,
            "filter": true,
            "sort": true,
            "info": true,
            "autoWidth": true,
            "order": [[ 0, "desc" ]],
            "language": {
                "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
            }
        });
    });
</script>
<script>
   $(function(){

    $('input[name="created_at"]').daterangepicker({
        autoUpdateInput: false,
        "locale": {
            "format": "YYYY-MM-DD",
            "separator": " - ",
            "autoUpdateInput": "false",
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
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
    }).on("apply.daterangepicker", function (e, picker) {
        picker.element.val(picker.startDate.format(picker.locale.format));
    });

});
</script>

<link href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="Stylesheet">
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>

<script type="text/javascript">
    $('#namenhanvien').autocomplete({
        source: "{{ route('admin.bangchamcong.bangchamcong.autocomplete') }}",
        
        autoFocus: true,
        select:function(e,ui){
            $('#namenhanvien').val(ui.item.value);
            $('#idss').val(ui.item.id);
            $('#ma_nv_s').val(ui.item.manvv);
        }
    });
</script>

@endpush

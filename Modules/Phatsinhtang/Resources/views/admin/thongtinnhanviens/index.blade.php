@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens') }}</li>
    </ol>
@stop
<?php


$arrayGioiTinh = array("nam","nu");

?>
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('phatsinhtang::thongtinnhanviens.button.create thongtinnhanvien') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Họ và tên</th>
                                <th>Giới tính</th>
                                <th>Mã đơn vị</th>
                                <th>Trạng thái</th>

                                <th>{{ trans('core::core.table.created at') }}</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($thongtinnhanviens)): ?>
                            <?php foreach ($thongtinnhanviens as $thongtinnhanvien): ?>
                            <tr>
                                <td>
                                    <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.edit', [$thongtinnhanvien->id]) }}">
                                        {{ $thongtinnhanvien->hovaten }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.edit', [$thongtinnhanvien->id]) }}">
                                        {{ $arrayGioiTinh[$thongtinnhanvien->gioitinh] }}
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.edit', [$thongtinnhanvien->id]) }}">
                                        
                                       <!--  <pre>{{ strip_tags($thongtinnhanvien->diachi) }}</pre> -->
                                         <?php foreach ($noibotcts as $noibotct): ?>
                                            <?php if ($noibotct->madonvi == $thongtinnhanvien->ma_donvi ): ?>
                                                {{ $noibotct->tendonvi }}
                                            <?php endif; ?>
                                        <?php endforeach; ?>


                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.edit', [$thongtinnhanvien->id]) }}">
                                        
                                       <!--  <pre>{{ strip_tags($thongtinnhanvien->diachi) }}</pre> -->
                                         <?php foreach ($trangthais as $trangthai): ?>
                                            <?php if ($trangthai->id == $thongtinnhanvien->ma_trangthai ): ?>
                                                {{ $trangthai->name }}
                                            <?php endif; ?>
                                        <?php endforeach; ?>


                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.edit', [$thongtinnhanvien->id]) }}">
                                        {{ $thongtinnhanvien->created_at }}
                                    </a>
                                </td>

                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.phatsinhtang.thongtinnhanvien.edit', [$thongtinnhanvien->id]) }}" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-delete-confirmation" data-action-target="{{ route('admin.phatsinhtang.thongtinnhanvien.destroy', [$thongtinnhanvien->id]) }}"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Giới tính</th>
                                <th>Mã đơn vị</th>
                                <th>Trạng thái</th>
                                
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
        <dd>{{ trans('phatsinhtang::thongtinnhanviens.title.create thongtinnhanvien') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.phatsinhtang.thongtinnhanvien.create') ?>" }
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

@endpush

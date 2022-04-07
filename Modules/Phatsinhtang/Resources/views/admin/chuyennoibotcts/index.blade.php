@extends('layouts.master')

@section('content-header')
<h1>
    {{ trans('phatsinhtang::chuyennoibotcts.title.chuyennoibotcts') }}
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
    <li class="active">{{ trans('phatsinhtang::chuyennoibotcts.title.chuyennoibotcts') }}</li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box-body">
            <label>Mã đơn vị</label>
            {!! Form::open(['route' => ['admin.phatsinhtang.chuyennoibotct.search'], 'method' => 'GET']) !!}
            <div class="row">


              <div class="col-sm-6">
                <div class="form-group">
                    <select name="noibotct" id="noibotct" class="form-control input-ig dynamic">

                        @foreach($noibotcts as $noibotct)
                        <option value="{{$noibotct->madonvi}}">{{$noibotct->tendonvi}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-sm-3">
               {{ Form::Submit('submit',['class' => 'btn btn-primary'])}}
           </div>

       </div>
       {!! Form::close() !!}

   </div>

   <div class="row">
   
    <div class="btn-group pull-right" style="margin: 0 15px 15px 15px;">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Lịch sử                                                                                   
  </button>
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
                        <th>Ho va ten</th>
                        <th>ma don vi</th>

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

                                        <?php foreach ($noibotcts as $noibotct): ?>
                                            <?php if ($noibotct->madonvi == $thongtinnhanvien->ma_donvi ): ?>
                                                {{ $noibotct->tendonvi }}
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
                                        <a href="{{ route('admin.phatsinhtang.chuyennoibotct.edit', [$thongtinnhanvien->id]) }}" class="btn btn-default btn-flat" ><i class="fa fa-pencil"></i></a>
                                    </div>



                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                   <th>Ho va ten</th>
                   <th>ma don vi</th>
                   <th>{{ trans('core::core.table.created at') }}</th>
                   <th>{{ trans('core::core.table.actions') }}</th>
               </tr>
           </tfoot>
       </table>

   </div> <!-- /.box-body -->
</div>

</div>
<!-- /.box -->
</div>
</div>


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <div class="modal-body">  
        <div class="box-body">
            <div class="table-responsive">
                <table class="data-table table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Đơn vị mới</th>

                            <th>Đơn vị cũ</th>
                            <th>Ngày cập nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php if (isset($historys)): ?>
                        <?php foreach ($historys as $history): ?>
                           <tr>
                            <td>
                               <?php foreach ($thongtinnhanviens as $thongtinnhanvien): ?>
                                <?php if ($thongtinnhanvien->id==$history->id_nhansu  ): ?>
                                    {{ $thongtinnhanvien->hovaten }}
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>
                        <td>
                           <?php foreach ($noibotcts as $noibotct): ?>
                            <?php if ($noibotct->madonvi==$history->new_madonvi ): ?>
                                {{ $noibotct->tendonvi }}
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </td>
                    <td>
                        <?php foreach ($noibotcts as $noibotct): ?>
                            <?php if ($noibotct->madonvi==$history->old_madonvi ): ?>
                                {{ $noibotct->tendonvi }}
                            <?php endif; ?>
                        <?php endforeach; ?>  
                    </td>
                    <td>
                        {{ $history->date_history }}   
                    </td>

                </tr>
            <?php endforeach; ?>
        <?php endif; ?>

    </tbody>
    <tfoot>
        <tr>
            <th>Họ và tên</th>
            <th>Đơn vị mới</th>
            <th>Đơn vị cũ</th>
            <th>Ngày cập nhật</th>
        </tr>
    </tfoot>
</table>
</div>
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
    <dd>{{ trans('phatsinhtang::chuyennoibotcts.title.create chuyennoibotct') }}</dd>
</dl>
@stop

@push('js-stack')
<script type="text/javascript">
    $( document ).ready(function() {
        $(document).keypressAction({
            actions: [
            { key: 'c', route: "<?= route('admin.phatsinhtang.chuyennoibotct.create') ?>" }
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

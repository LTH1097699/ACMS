<?php

namespace Modules\Phatsinhtang\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Phatsinhtang\Entities\Thongtinnhanvien;
use Modules\Phatsinhtang\Entities\trangthai;
use Modules\Quanlychung\Entities\noibotct;
use Modules\Hopdong\Entities\Hopdong;

use Modules\Phatsinhtang\Http\Requests\CreateThongtinnhanvienRequest;
use Modules\Phatsinhtang\Http\Requests\UpdateThongtinnhanvienRequest;
use Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository;
use Modules\Phatsinhtang\Repositories\trangthaiRepository;
use Modules\Quanlychung\Repositories\noibotctRepository;
use Modules\Hopdong\Repositories\HopdongRepository;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Media\Services\Movers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ThongtinnhanvienController extends AdminBaseController
{
    /**
     * @var ThongtinnhanvienRepository
     */
    private $thongtinnhanvien;
    private $noibotct;
    private $trangthai;
    private $hopdong;


    public function __construct(ThongtinnhanvienRepository $thongtinnhanvien,
        noibotctRepository $noibotct,
        trangthaiRepository $trangthai, HopdongRepository $hopdong)
    {
        parent::__construct();

        $this->thongtinnhanvien = $thongtinnhanvien;
        $this->noibotct = $noibotct;
        $this->trangthai= $trangthai;
        $this->hopdong= $hopdong;
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all();
        $noibotcts = $this->noibotct->all();
        
        $trangthais = $this->trangthai->all();
        $hopdongs = $this->hopdong->all();


        return view('phatsinhtang::admin.thongtinnhanviens.index', compact('thongtinnhanviens','noibotcts','trangthais','hopdongs'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $noibotcts = $this->noibotct->all();
         $hopdongs = $this->hopdong->all();
        $trangthais = $this->trangthai->all();
        return view('phatsinhtang::admin.thongtinnhanviens.create', compact('noibotcts','trangthais','hopdongs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateThongtinnhanvienRequest $request
     * @return Response
     */
    public function store(CreateThongtinnhanvienRequest $request)
    {

        $nv = new Thongtinnhanvien;
        
        if ($request->hasfile('hinhanh')) {
            $path = Storage::putFile('storage/app/public', $request->file('hinhanh'));
            $nv->hinhanh = $request->file('hinhanh')->hashName();
            $nv->save();
            $nv->update($request->except(['hinhanh']));          
        }
        else{
            $this->thongtinnhanvien->create( $request->except('hinhanh'));
        }

        return redirect()->route('admin.phatsinhtang.thongtinnhanvien.index')
        ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Thongtinnhanvien $thongtinnhanvien
     * @return Response
     */
    public function edit(Thongtinnhanvien $thongtinnhanvien)
    {
        $noibotcts = $this->noibotct->all(['madonvi', 'tendonvi']);
        $trangthais = $this->trangthai->all();
         $hopdongs = $this->hopdong->all();
        return view('phatsinhtang::admin.thongtinnhanviens.edit', compact('thongtinnhanvien','noibotcts','trangthais','hopdongs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Thongtinnhanvien $thongtinnhanvien
     * @param  UpdateThongtinnhanvienRequest $request
     * @return Response
     */
    public function update(Thongtinnhanvien $thongtinnhanvien, UpdateThongtinnhanvienRequest $request)
    {
        $oldValue = $thongtinnhanvien->hinhanh;
        $oldMa_nhanvien = $thongtinnhanvien->ma_nhanvien;
        if ($request->hasfile('hinhanh')) {


            Storage::delete('storage/app/public/'.$oldValue);
            $path = Storage::putFile('storage/app/public', $request->file('hinhanh'));

            $thongtinnhanvien->hinhanh = $request->file('hinhanh')->hashName();
            $thongtinnhanvien->save();

            $thongtinnhanvien->update($request->except(['hinhanh']));

            
        }else{

            $this->thongtinnhanvien->update($thongtinnhanvien, $request->except('hinhanh'));
        }

      

        return redirect()->route('admin.phatsinhtang.thongtinnhanvien.index')
        ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Thongtinnhanvien $thongtinnhanvien
     * @return Response
     */
    public function destroy(Thongtinnhanvien $thongtinnhanvien)
    {
        $this->thongtinnhanvien->destroy($thongtinnhanvien);

        return redirect()->route('admin.phatsinhtang.thongtinnhanvien.index')
        ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('phatsinhtang::thongtinnhanviens.title.thongtinnhanviens')]));
    }
}

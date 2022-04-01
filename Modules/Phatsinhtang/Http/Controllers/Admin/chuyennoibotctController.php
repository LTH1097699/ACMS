<?php

namespace Modules\Phatsinhtang\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Phatsinhtang\Entities\chuyennoibotct;
use Modules\Phatsinhtang\Entities\Thongtinnhanvien;
//Quan ly chung
use Modules\Quanlychung\Entities\noibotct;
use Modules\Quanlychung\Entities\Chucdanh;

use Modules\Phatsinhtang\Http\Requests\CreatechuyennoibotctRequest;
use Modules\Phatsinhtang\Http\Requests\UpdatechuyennoibotctRequest;
use Modules\Phatsinhtang\Repositories\chuyennoibotctRepository;
use Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository;
//Quan ly chung
use Modules\Quanlychung\Repositories\noibotctRepository;
use Modules\Quanlychung\Repositories\ChucdanhRepository;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;



use DB;

class chuyennoibotctController extends AdminBaseController
{
    /**
     * @var chuyennoibotctRepository
     */
    private $chuyennoibotct;
    private $noibotct;
    private $chucdanh;
    private $thongtinnhanvien;

    public function __construct(chuyennoibotctRepository $chuyennoibotct,
        noibotctRepository $noibotct,
        ChucdanhRepository $chucdanh,
        ThongtinnhanvienRepository $thongtinnhanvien)
    {
        parent::__construct();

        $this->noibotct = $noibotct;
        $this->chucdanh = $chucdanh;
        $this->thongtinnhanvien = $thongtinnhanvien;
    }

    public function store(Thongtinnhanvien $thongtinnhanvien , CreatechuyennoibotctRequest $request)
    {
        $manhanvien = $request->only(['manhanvien']);
        $data2=$request->only(['ma_donvi']);

        
        $thongtinnhanvien->where('ma_nhanvien','=',$manhanvien)->update($data2);

       //  echo "<pre/>";
       // var_dump($manhanvien);
       // var_dump($data2);

        

        return redirect()->route('admin.phatsinhtang.chuyennoibotct.create');

        

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all();

        //call noibotct to select drop-down index
        $noibotcts = $this->noibotct->all();
        $historys = DB::select('select * from user_noitct_history ');

        return view('phatsinhtang::admin.chuyennoibotcts.index', compact('noibotcts','thongtinnhanviens','historys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $noibotcts = $this->noibotct->all();
        $chucdanhs = $this->chucdanh->all();

        // $thongtinnhanviens = $this->chucdanh->all();


        return view('phatsinhtang::admin.chuyennoibotcts.create',compact('noibotcts','chucdanhs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatechuyennoibotctRequest $request
     * @return Response
     */
    // public function store(CreatechuyennoibotctRequest $request)
    // {
    //     $this->chuyennoibotct->create($request->all());
    //     $thongtinnhanviens = $this->chucdanh->all();

    //     return redirect()->route('admin.phatsinhtang.chuyennoibotct.index')
    //         ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('phatsinhtang::chuyennoibotcts.title.chuyennoibotcts')]));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  chuyennoibotct $chuyennoibotct
     * @return Response
     */
    public function edit(Thongtinnhanvien $thongtinnhanvien)
    {

        $noibotcts = $this->noibotct->all();
        return view('phatsinhtang::admin.chuyennoibotcts.edit', compact('thongtinnhanvien','noibotcts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  chuyennoibotct $chuyennoibotct
     * @param  UpdatechuyennoibotctRequest $request
     * @return Response
     */
    public function update(chuyennoibotct $chuyennoibotct, UpdatechuyennoibotctRequest $request,Thongtinnhanvien $thongtinnhanvien)
    {
        $data2=$request->only(['ma_donvi']);
        
        $this->thongtinnhanvien->update($thongtinnhanvien, $data2);

        return redirect()->route('admin.phatsinhtang.chuyennoibotct.index')
        ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('phatsinhtang::chuyennoibotcts.title.chuyennoibotcts')]));

        echo "<pre/>";
        
        var_dump($data2);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  chuyennoibotct $chuyennoibotct
     * @return Response
     */
    public function destroy(chuyennoibotct $chuyennoibotct)
    {
        $this->chuyennoibotct->destroy($chuyennoibotct);

        return redirect()->route('admin.phatsinhtang.chuyennoibotct.index')
        ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('phatsinhtang::chuyennoibotcts.title.chuyennoibotcts')]));
    }

    public function search(SearchchuyennoibotctRequest $request,Thongtinnhanvien $thongtinnhanvien){

     
     $noibotcts = $this->noibotct->all();
     $thongtinnhanviens = $thongtinnhanvien->where('ma_donvi',$request->only(['noibotct']))->get();

     return view('phatsinhtang::admin.chuyennoibotcts.index', compact('noibotcts','thongtinnhanviens'));
 }
}

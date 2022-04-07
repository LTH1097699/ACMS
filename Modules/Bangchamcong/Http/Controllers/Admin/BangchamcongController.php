<?php

namespace Modules\Bangchamcong\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Bangchamcong\Entities\Bangchamcong;
use Modules\Bangchamcong\Http\Requests\CreateBangchamcongRequest;
use Modules\Bangchamcong\Http\Requests\UpdateBangchamcongRequest;
use Modules\Bangchamcong\Repositories\BangchamcongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

use Modules\Phatsinhtang\Entities\Thongtinnhanvien;
use Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository;

class BangchamcongController extends AdminBaseController
{
    /**
     * @var BangchamcongRepository
     */
    private $bangchamcong;

    public function __construct(BangchamcongRepository $bangchamcong,
        ThongtinnhanvienRepository $thongtinnhanvien)
    {
        parent::__construct();

        $this->bangchamcong = $bangchamcong;
        $this->thongtinnhanvien = $thongtinnhanvien;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bangchamcongs = $this->bangchamcong->all();
        $thongtinnhanviens = $this->thongtinnhanvien->all();

        return view('bangchamcong::admin.bangchamcongs.index', compact('bangchamcongs','thongtinnhanviens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('bangchamcong::admin.bangchamcongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateBangchamcongRequest $request
     * @return Response
     */
    public function store(CreateBangchamcongRequest $request)
    {
        $this->bangchamcong->create($request->all());

        return redirect()->route('admin.bangchamcong.bangchamcong.index')
        ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('bangchamcong::bangchamcongs.title.bangchamcongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Bangchamcong $bangchamcong
     * @return Response
     */
    public function edit(Bangchamcong $bangchamcong, Thongtinnhanvien $thongtinnhanvien)
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all();
        return view('bangchamcong::admin.bangchamcongs.edit', compact('bangchamcong','thongtinnhanviens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Bangchamcong $bangchamcong
     * @param  UpdateBangchamcongRequest $request
     * @return Response
     */
    public function update(Bangchamcong $bangchamcong, UpdateBangchamcongRequest $request)
    {
        $this->bangchamcong->update($bangchamcong, $request->all());

        return redirect()->route('admin.bangchamcong.bangchamcong.index')
        ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('bangchamcong::bangchamcongs.title.bangchamcongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bangchamcong $bangchamcong
     * @return Response
     */
    public function destroy(Bangchamcong $bangchamcong)
    {
        $this->bangchamcong->destroy($bangchamcong);

        return redirect()->route('admin.bangchamcong.bangchamcong.index')
        ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('bangchamcong::bangchamcongs.title.bangchamcongs')]));
    }
    public function search(Bangchamcong $bangchamcong, Request $request)
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all();
        $bangchamcong = Bangchamcong::query();
        $bb = "1";
        if($request->filled('searchhh')){
            $aa=$request->only(['searchhh']);
            $bb="";
            foreach ($aa as $key => $value) {
                $bb=$value;
            }
            if($bb=='sogioditre'){
                $bangchamcong->whereRaw('tonggiotheoca > tonggiothucte');

            }
            if($bb=='thoigiantangca'){
               $bangchamcong->where('thoigiantangca','>','0');
           }
       }

       if($request->filled('created_at')){
        $date = $request->only(['created_at']);
        
        $bangchamcong->whereDate('created_at','=',$date);  
        }
        
        if($request->filled('idss')){
        $idnv = $request->only(['idss']);
        
        $bangchamcong->where('id_nhansu','=',$idnv);  
        }
       
    $bbs = $bb;
    $bangchamcongs = $bangchamcong->get();
    return view('bangchamcong::admin.bangchamcongs.index', compact('bangchamcongs','bbs','thongtinnhanviens'));
    }

public function autocomplete(Request $request ){
    $term = $request->term;
    $data  = Thongtinnhanvien::where('hovaten','LIKE','%'.$term.'%')->take(10)->get();
    $result = array();
    foreach ($data as $key => $v){
        $result[] = ['id'=>$v->id, 'value'=>$v->hovaten,'manvv'=>$v->ma_nhanvien];
    }
    // echo "<pre>";
    // var_dump($result);
    return  response()->json($result);
    }

}

<?php

namespace Modules\Phatsinhtang\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Phatsinhtang\Entities\Thongtinnhanvien;

use Modules\Quanlychung\Entities\noibotct;

use Modules\Phatsinhtang\Http\Requests\CreateThongtinnhanvienRequest;
use Modules\Phatsinhtang\Http\Requests\UpdateThongtinnhanvienRequest;
use Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository;
use Modules\Quanlychung\Repositories\noibotctRepository;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ThongtinnhanvienController extends AdminBaseController
{
    /**
     * @var ThongtinnhanvienRepository
     */
    private $thongtinnhanvien;
    private $noibotct;


    public function __construct(ThongtinnhanvienRepository $thongtinnhanvien,
                                noibotctRepository $noibotct)
    {
        parent::__construct();

        $this->thongtinnhanvien = $thongtinnhanvien;
        $this->noibotct = $noibotct;
        
    }
    // private function getMenuTct($menu)
    // {
    //     return $menu->menuTct()->where('is_root', '!=', true)->get()->nest()->listsFlattened('tendonvi');
    // }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all();

        return view('phatsinhtang::admin.thongtinnhanviens.index', compact('thongtinnhanviens'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $noibotcts = $this->noibotct->all(['madonvi', 'tendonvi']);
        // $menuSelect = $this->getMenuTct($menu);
        // $chuyennoibotct = Subject::all()->toArray();

        return view('phatsinhtang::admin.thongtinnhanviens.create', compact('noibotcts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateThongtinnhanvienRequest $request
     * @return Response
     */
    public function store(CreateThongtinnhanvienRequest $request)
    {
        $this->thongtinnhanvien->create($request->all());

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
        return view('phatsinhtang::admin.thongtinnhanviens.edit', compact('thongtinnhanvien','noibotcts'));
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
        $this->thongtinnhanvien->update($thongtinnhanvien, $request->all());

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

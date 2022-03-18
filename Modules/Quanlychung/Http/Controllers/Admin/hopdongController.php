<?php

namespace Modules\Quanlychung\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Quanlychung\Entities\hopdong;
use Modules\Phatsinhtang\Entities\Thongtinnhanvien; //

use Modules\Quanlychung\Http\Requests\CreatehopdongRequest;
use Modules\Quanlychung\Http\Requests\UpdatehopdongRequest;
use Modules\Quanlychung\Repositories\hopdongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

use Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository;//

class hopdongController extends AdminBaseController
{
    /**
     * @var hopdongRepository
     */

    private $thongtinnhanvien;
    private $hopdong;

    public function __construct(hopdongRepository $hopdong,
                                ThongtinnhanvienRepository $thongtinnhanvien)
    {
        parent::__construct();

        $this->hopdong = $hopdong;
        $this->thongtinnhanvien = $thongtinnhanvien;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $hopdongs = $this->hopdong->all();

        return view('quanlychung::admin.hopdongs.index', compact('hopdongs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all(['ma_nhanvien','hovaten']);
        return view('quanlychung::admin.hopdongs.create', compact('thongtinnhanviens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatehopdongRequest $request
     * @return Response
     */
    public function store(CreatehopdongRequest $request)
    {
        $this->hopdong->create($request->all());

        return redirect()->route('admin.quanlychung.hopdong.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('quanlychung::hopdongs.title.hopdongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  hopdong $hopdong
     * @return Response
     */
    public function edit(hopdong $hopdong)
    {
        $thongtinnhanviens = $this->thongtinnhanvien->all(['ma_nhanvien','hovaten']);
        return view('quanlychung::admin.hopdongs.edit', compact('hopdong','thongtinnhanviens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  hopdong $hopdong
     * @param  UpdatehopdongRequest $request
     * @return Response
     */
    public function update(hopdong $hopdong, UpdatehopdongRequest $request)
    {
        $this->hopdong->update($hopdong, $request->all());

        return redirect()->route('admin.quanlychung.hopdong.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('quanlychung::hopdongs.title.hopdongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  hopdong $hopdong
     * @return Response
     */
    public function destroy(hopdong $hopdong)
    {
        $this->hopdong->destroy($hopdong);

        return redirect()->route('admin.quanlychung.hopdong.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('quanlychung::hopdongs.title.hopdongs')]));
    }
}

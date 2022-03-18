<?php

namespace Modules\Quanlychung\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Quanlychung\Entities\Chucdanh;
use Modules\Quanlychung\Http\Requests\CreateChucdanhRequest;
use Modules\Quanlychung\Http\Requests\UpdateChucdanhRequest;
use Modules\Quanlychung\Repositories\ChucdanhRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ChucdanhController extends AdminBaseController
{
    /**
     * @var ChucdanhRepository
     */
    private $chucdanh;

    public function __construct(ChucdanhRepository $chucdanh)
    {
        parent::__construct();

        $this->chucdanh = $chucdanh;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $chucdanhs = $this->chucdanh->all();

        return view('quanlychung::admin.chucdanhs.index',compact('chucdanhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('quanlychung::admin.chucdanhs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateChucdanhRequest $request
     * @return Response
     */
    public function store(CreateChucdanhRequest $request)
    {
        $this->chucdanh->create($request->all());

        return redirect()->route('admin.quanlychung.chucdanh.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('quanlychung::chucdanhs.title.chucdanhs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Chucdanh $chucdanh
     * @return Response
     */
    public function edit(Chucdanh $chucdanh)
    {
        return view('quanlychung::admin.chucdanhs.edit', compact('chucdanh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Chucdanh $chucdanh
     * @param  UpdateChucdanhRequest $request
     * @return Response
     */
    public function update(Chucdanh $chucdanh, UpdateChucdanhRequest $request)
    {
        $this->chucdanh->update($chucdanh, $request->all());

        return redirect()->route('admin.quanlychung.chucdanh.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('quanlychung::chucdanhs.title.chucdanhs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Chucdanh $chucdanh
     * @return Response
     */
    public function destroy(Chucdanh $chucdanh)
    {
        $this->chucdanh->destroy($chucdanh);

        return redirect()->route('admin.quanlychung.chucdanh.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('quanlychung::chucdanhs.title.chucdanhs')]));
    }
}

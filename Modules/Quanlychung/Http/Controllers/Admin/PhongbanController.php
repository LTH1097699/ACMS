<?php

namespace Modules\Quanlychung\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Quanlychung\Entities\Phongban;
use Modules\Quanlychung\Http\Requests\CreatePhongbanRequest;
use Modules\Quanlychung\Http\Requests\UpdatePhongbanRequest;
use Modules\Quanlychung\Repositories\PhongbanRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PhongbanController extends AdminBaseController
{
    /**
     * @var PhongbanRepository
     */
    private $phongban;

    public function __construct(PhongbanRepository $phongban)
    {
        parent::__construct();

        $this->phongban = $phongban;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $phongbans = $this->phongban->all();

        return view('quanlychung::admin.phongbans.index', compact('phongbans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('quanlychung::admin.phongbans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePhongbanRequest $request
     * @return Response
     */
    public function store(CreatePhongbanRequest $request)
    {
        $this->phongban->create($request->all());

        return redirect()->route('admin.quanlychung.phongban.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('quanlychung::phongbans.title.phongbans')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Phongban $phongban
     * @return Response
     */
    public function edit(Phongban $phongban)
    {
        return view('quanlychung::admin.phongbans.edit', compact('phongban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Phongban $phongban
     * @param  UpdatePhongbanRequest $request
     * @return Response
     */
    public function update(Phongban $phongban, UpdatePhongbanRequest $request)
    {
        $this->phongban->update($phongban, $request->all());

        return redirect()->route('admin.quanlychung.phongban.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('quanlychung::phongbans.title.phongbans')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Phongban $phongban
     * @return Response
     */
    public function destroy(Phongban $phongban)
    {
        $this->phongban->destroy($phongban);

        return redirect()->route('admin.quanlychung.phongban.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('quanlychung::phongbans.title.phongbans')]));
    }
}

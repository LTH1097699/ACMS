<?php

namespace Modules\Phatsinhtang\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Phatsinhtang\Entities\trangthai;
use Modules\Phatsinhtang\Http\Requests\CreatetrangthaiRequest;
use Modules\Phatsinhtang\Http\Requests\UpdatetrangthaiRequest;
use Modules\Phatsinhtang\Repositories\trangthaiRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class trangthaiController extends AdminBaseController
{
    /**
     * @var trangthaiRepository
     */
    private $trangthai;

    public function __construct(trangthaiRepository $trangthai)
    {
        parent::__construct();

        $this->trangthai = $trangthai;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $trangthais = $this->trangthai->all();

        return view('phatsinhtang::admin.trangthais.index', compact('trangthais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('phatsinhtang::admin.trangthais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatetrangthaiRequest $request
     * @return Response
     */
    public function store(CreatetrangthaiRequest $request)
    {
        $this->trangthai->create($request->all());

        return redirect()->route('admin.phatsinhtang.trangthai.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('phatsinhtang::trangthais.title.trangthais')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  trangthai $trangthai
     * @return Response
     */
    public function edit(trangthai $trangthai)
    {
        return view('phatsinhtang::admin.trangthais.edit', compact('trangthai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  trangthai $trangthai
     * @param  UpdatetrangthaiRequest $request
     * @return Response
     */
    public function update(trangthai $trangthai, UpdatetrangthaiRequest $request)
    {
        $this->trangthai->update($trangthai, $request->all());

        return redirect()->route('admin.phatsinhtang.trangthai.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('phatsinhtang::trangthais.title.trangthais')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  trangthai $trangthai
     * @return Response
     */
    public function destroy(trangthai $trangthai)
    {
        $this->trangthai->destroy($trangthai);

        return redirect()->route('admin.phatsinhtang.trangthai.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('phatsinhtang::trangthais.title.trangthais')]));
    }
}

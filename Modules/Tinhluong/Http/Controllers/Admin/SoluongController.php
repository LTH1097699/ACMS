<?php

namespace Modules\Tinhluong\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tinhluong\Entities\Soluong;
use Modules\Tinhluong\Http\Requests\CreateSoluongRequest;
use Modules\Tinhluong\Http\Requests\UpdateSoluongRequest;
use Modules\Tinhluong\Repositories\SoluongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class SoluongController extends AdminBaseController
{
    /**
     * @var SoluongRepository
     */
    private $soluong;

    public function __construct(SoluongRepository $soluong)
    {
        parent::__construct();

        $this->soluong = $soluong;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$soluongs = $this->soluong->all();

        return view('tinhluong::admin.soluongs.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tinhluong::admin.soluongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateSoluongRequest $request
     * @return Response
     */
    public function store(CreateSoluongRequest $request)
    {
        $this->soluong->create($request->all());

        return redirect()->route('admin.tinhluong.soluong.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tinhluong::soluongs.title.soluongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Soluong $soluong
     * @return Response
     */
    public function edit(Soluong $soluong)
    {
        return view('tinhluong::admin.soluongs.edit', compact('soluong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Soluong $soluong
     * @param  UpdateSoluongRequest $request
     * @return Response
     */
    public function update(Soluong $soluong, UpdateSoluongRequest $request)
    {
        $this->soluong->update($soluong, $request->all());

        return redirect()->route('admin.tinhluong.soluong.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tinhluong::soluongs.title.soluongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Soluong $soluong
     * @return Response
     */
    public function destroy(Soluong $soluong)
    {
        $this->soluong->destroy($soluong);

        return redirect()->route('admin.tinhluong.soluong.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tinhluong::soluongs.title.soluongs')]));
    }
}

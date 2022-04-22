<?php

namespace Modules\Tinhluong\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tinhluong\Entities\Tinhluong;
use Modules\Tinhluong\Http\Requests\CreateTinhluongRequest;
use Modules\Tinhluong\Http\Requests\UpdateTinhluongRequest;
use Modules\Tinhluong\Repositories\TinhluongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class TinhluongController extends AdminBaseController
{
    /**
     * @var TinhluongRepository
     */
    private $tinhluong;

    public function __construct(TinhluongRepository $tinhluong)
    {
        parent::__construct();

        $this->tinhluong = $tinhluong;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$tinhluongs = $this->tinhluong->all();

        return view('tinhluong::admin.tinhluongs.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tinhluong::admin.tinhluongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateTinhluongRequest $request
     * @return Response
     */
    public function store(CreateTinhluongRequest $request)
    {
        $this->tinhluong->create($request->all());

        return redirect()->route('admin.tinhluong.tinhluong.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tinhluong::tinhluongs.title.tinhluongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Tinhluong $tinhluong
     * @return Response
     */
    public function edit(Tinhluong $tinhluong)
    {
        return view('tinhluong::admin.tinhluongs.edit', compact('tinhluong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Tinhluong $tinhluong
     * @param  UpdateTinhluongRequest $request
     * @return Response
     */
    public function update(Tinhluong $tinhluong, UpdateTinhluongRequest $request)
    {
        $this->tinhluong->update($tinhluong, $request->all());

        return redirect()->route('admin.tinhluong.tinhluong.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tinhluong::tinhluongs.title.tinhluongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Tinhluong $tinhluong
     * @return Response
     */
    public function destroy(Tinhluong $tinhluong)
    {
        $this->tinhluong->destroy($tinhluong);

        return redirect()->route('admin.tinhluong.tinhluong.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tinhluong::tinhluongs.title.tinhluongs')]));
    }
}

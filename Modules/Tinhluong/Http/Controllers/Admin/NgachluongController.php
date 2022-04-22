<?php

namespace Modules\Tinhluong\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tinhluong\Entities\Ngachluong;
use Modules\Tinhluong\Http\Requests\CreateNgachluongRequest;
use Modules\Tinhluong\Http\Requests\UpdateNgachluongRequest;
use Modules\Tinhluong\Repositories\NgachluongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class NgachluongController extends AdminBaseController
{
    /**
     * @var NgachluongRepository
     */
    private $ngachluong;

    public function __construct(NgachluongRepository $ngachluong)
    {
        parent::__construct();

        $this->ngachluong = $ngachluong;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$ngachluongs = $this->ngachluong->all();

        return view('tinhluong::admin.ngachluongs.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tinhluong::admin.ngachluongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateNgachluongRequest $request
     * @return Response
     */
    public function store(CreateNgachluongRequest $request)
    {
        $this->ngachluong->create($request->all());

        return redirect()->route('admin.tinhluong.ngachluong.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tinhluong::ngachluongs.title.ngachluongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Ngachluong $ngachluong
     * @return Response
     */
    public function edit(Ngachluong $ngachluong)
    {
        return view('tinhluong::admin.ngachluongs.edit', compact('ngachluong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Ngachluong $ngachluong
     * @param  UpdateNgachluongRequest $request
     * @return Response
     */
    public function update(Ngachluong $ngachluong, UpdateNgachluongRequest $request)
    {
        $this->ngachluong->update($ngachluong, $request->all());

        return redirect()->route('admin.tinhluong.ngachluong.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tinhluong::ngachluongs.title.ngachluongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Ngachluong $ngachluong
     * @return Response
     */
    public function destroy(Ngachluong $ngachluong)
    {
        $this->ngachluong->destroy($ngachluong);

        return redirect()->route('admin.tinhluong.ngachluong.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tinhluong::ngachluongs.title.ngachluongs')]));
    }
}

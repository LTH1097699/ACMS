<?php

namespace Modules\HopDong\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\HopDong\Entities\Hopdong;
use Modules\HopDong\Http\Requests\CreateHopdongRequest;
use Modules\HopDong\Http\Requests\UpdateHopdongRequest;
use Modules\HopDong\Repositories\HopdongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class HopdongController extends AdminBaseController
{
    /**
     * @var HopdongRepository
     */
    private $hopdong;

    public function __construct(HopdongRepository $hopdong)
    {
        parent::__construct();

        $this->hopdong = $hopdong;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$hopdongs = $this->hopdong->all();

        return view('hopdong::admin.hopdongs.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('hopdong::admin.hopdongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateHopdongRequest $request
     * @return Response
     */
    public function store(CreateHopdongRequest $request)
    {
        $this->hopdong->create($request->all());

        return redirect()->route('admin.hopdong.hopdong.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('hopdong::hopdongs.title.hopdongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Hopdong $hopdong
     * @return Response
     */
    public function edit(Hopdong $hopdong)
    {
        return view('hopdong::admin.hopdongs.edit', compact('hopdong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Hopdong $hopdong
     * @param  UpdateHopdongRequest $request
     * @return Response
     */
    public function update(Hopdong $hopdong, UpdateHopdongRequest $request)
    {
        $this->hopdong->update($hopdong, $request->all());

        return redirect()->route('admin.hopdong.hopdong.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('hopdong::hopdongs.title.hopdongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Hopdong $hopdong
     * @return Response
     */
    public function destroy(Hopdong $hopdong)
    {
        $this->hopdong->destroy($hopdong);

        return redirect()->route('admin.hopdong.hopdong.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('hopdong::hopdongs.title.hopdongs')]));
    }
}

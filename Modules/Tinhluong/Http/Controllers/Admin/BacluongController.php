<?php

namespace Modules\Tinhluong\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Tinhluong\Entities\Bacluong;
use Modules\Tinhluong\Http\Requests\CreateBacluongRequest;
use Modules\Tinhluong\Http\Requests\UpdateBacluongRequest;
use Modules\Tinhluong\Repositories\BacluongRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class BacluongController extends AdminBaseController
{
    /**
     * @var BacluongRepository
     */
    private $bacluong;

    public function __construct(BacluongRepository $bacluong)
    {
        parent::__construct();

        $this->bacluong = $bacluong;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$bacluongs = $this->bacluong->all();

        return view('tinhluong::admin.bacluongs.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('tinhluong::admin.bacluongs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateBacluongRequest $request
     * @return Response
     */
    public function store(CreateBacluongRequest $request)
    {
        $this->bacluong->create($request->all());

        return redirect()->route('admin.tinhluong.bacluong.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('tinhluong::bacluongs.title.bacluongs')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Bacluong $bacluong
     * @return Response
     */
    public function edit(Bacluong $bacluong)
    {
        return view('tinhluong::admin.bacluongs.edit', compact('bacluong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Bacluong $bacluong
     * @param  UpdateBacluongRequest $request
     * @return Response
     */
    public function update(Bacluong $bacluong, UpdateBacluongRequest $request)
    {
        $this->bacluong->update($bacluong, $request->all());

        return redirect()->route('admin.tinhluong.bacluong.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('tinhluong::bacluongs.title.bacluongs')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bacluong $bacluong
     * @return Response
     */
    public function destroy(Bacluong $bacluong)
    {
        $this->bacluong->destroy($bacluong);

        return redirect()->route('admin.tinhluong.bacluong.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('tinhluong::bacluongs.title.bacluongs')]));
    }
}

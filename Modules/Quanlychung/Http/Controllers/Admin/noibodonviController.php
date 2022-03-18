<?php

namespace Modules\Quanlychung\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Quanlychung\Entities\noibodonvi;
use Modules\Quanlychung\Http\Requests\CreatenoibodonviRequest;
use Modules\Quanlychung\Http\Requests\UpdatenoibodonviRequest;
use Modules\Quanlychung\Repositories\noibodonviRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class noibodonviController extends AdminBaseController
{
    /**
     * @var noibodonviRepository
     */
    private $noibodonvi;

    public function __construct(noibodonviRepository $noibodonvi)
    {
        parent::__construct();

        $this->noibodonvi = $noibodonvi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $noibodonvis = $this->noibodonvi->all();

        return view('quanlychung::admin.noibodonvis.index', compact('noibodonvis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('quanlychung::admin.noibodonvis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatenoibodonviRequest $request
     * @return Response
     */
    public function store(CreatenoibodonviRequest $request)
    {
        $this->noibodonvi->create($request->all());

        return redirect()->route('admin.quanlychung.noibodonvi.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('quanlychung::noibodonvis.title.noibodonvis')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  noibodonvi $noibodonvi
     * @return Response
     */
    public function edit(noibodonvi $noibodonvi)
    {
        return view('quanlychung::admin.noibodonvis.edit', compact('noibodonvi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  noibodonvi $noibodonvi
     * @param  UpdatenoibodonviRequest $request
     * @return Response
     */
    public function update(noibodonvi $noibodonvi, UpdatenoibodonviRequest $request)
    {
        $this->noibodonvi->update($noibodonvi, $request->all());

        return redirect()->route('admin.quanlychung.noibodonvi.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('quanlychung::noibodonvis.title.noibodonvis')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  noibodonvi $noibodonvi
     * @return Response
     */
    public function destroy(noibodonvi $noibodonvi)
    {
        $this->noibodonvi->destroy($noibodonvi);

        return redirect()->route('admin.quanlychung.noibodonvi.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('quanlychung::noibodonvis.title.noibodonvis')]));
    }
}

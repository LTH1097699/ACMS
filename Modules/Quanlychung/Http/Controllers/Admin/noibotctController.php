<?php

namespace Modules\Quanlychung\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Quanlychung\Entities\noibotct;
use Modules\Quanlychung\Http\Requests\CreatenoibotctRequest;
use Modules\Quanlychung\Http\Requests\UpdatenoibotctRequest;
use Modules\Quanlychung\Repositories\noibotctRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class noibotctController extends AdminBaseController
{
    /**
     * @var noibotctRepository
     */
    private $noibotct;

    public function __construct(noibotctRepository $noibotct)
    {
        parent::__construct();

        $this->noibotct = $noibotct;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $noibotcts = $this->noibotct->all();

        return view('quanlychung::admin.noibotcts.index', compact('noibotcts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('quanlychung::admin.noibotcts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatenoibotctRequest $request
     * @return Response
     */
    public function store(CreatenoibotctRequest $request)
    {
        $this->noibotct->create($request->all());
       
        return redirect()->route('admin.quanlychung.noibotct.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('quanlychung::noibotcts.title.noibotcts')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  noibotct $noibotct
     * @return Response
     */
    public function edit(noibotct $noibotct)
    {
        return view('quanlychung::admin.noibotcts.edit', compact('noibotct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  noibotct $noibotct
     * @param  UpdatenoibotctRequest $request
     * @return Response
     */
    public function update(noibotct $noibotct, UpdatenoibotctRequest $request)
    {
        $this->noibotct->update($noibotct, $request->all());

        return redirect()->route('admin.quanlychung.noibotct.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('quanlychung::noibotcts.title.noibotcts')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  noibotct $noibotct
     * @return Response
     */
    public function destroy(noibotct $noibotct)
    {
        $this->noibotct->destroy($noibotct);

        return redirect()->route('admin.quanlychung.noibotct.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('quanlychung::noibotcts.title.noibotcts')]));
    }
}

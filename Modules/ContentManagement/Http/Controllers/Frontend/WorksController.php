<?php

namespace Modules\ContentManagement\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContentManagement\Repositories\Work\WorkRepository;
use Modules\Seo\Repositories\Seo\SeoRepository;

class WorksController extends Controller
{
    private $work;

    private $seo;

    public function __construct(
        WorkRepository $work,
        SeoRepository $seo
    )
    {
        $this->work = $work;
        $this->seo = $seo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contentmanagement::Frontend.Works.index')
            ->withWorks($this->work->getActiveAndPaginate(12))
            ->withSeo($this->seo->findByField('page', 'works'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($slug)
    {
        return view('contentmanagement::Frontend.Works.show')
            ->withWork($this->work->findBySlug($slug))
            ->withWorks($this->work->getActive())
            ->withSeo($this->seo->findByField('page', 'works'));
    }
}

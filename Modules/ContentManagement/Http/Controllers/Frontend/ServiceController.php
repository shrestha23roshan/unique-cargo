<?php

namespace Modules\ContentManagement\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContentManagement\Repositories\Service\ServiceRepository;
use Modules\Seo\Repositories\Seo\SeoRepository;

class ServiceController extends Controller
{
    private $service;

    private $seo;

    public function __construct(
        ServiceRepository $service,
        SeoRepository $seo
    )
    {
        $this->service = $service;
        $this->seo = $seo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contentmanagement::Frontend.Services.index')
            ->withServices($this->service->getActive())
            ->withSeo($this->seo->findByField('page', 'services'));
    }

}

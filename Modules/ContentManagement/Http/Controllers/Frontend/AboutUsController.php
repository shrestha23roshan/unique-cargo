<?php

namespace Modules\ContentManagement\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContentManagement\Repositories\AboutUs\AboutUsRepository;
use Modules\Seo\Repositories\Seo\SeoRepository;

class AboutUsController extends Controller
{
    private $aboutus;

    private $seo;

    public function __construct(
        AboutUsRepository $aboutus,
        SeoRepository $seo
    )
    {
        $this->aboutus = $aboutus;
        $this->seo = $seo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contentmanagement::Frontend.AboutUs.index')
            ->withAboutUs($this->aboutus->getActive())
            ->withSeo($this->seo->findByField('page', 'about-us'));
    }

}

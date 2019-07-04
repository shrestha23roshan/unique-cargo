<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Modules\MediaManagement\Repositories\Brand\BrandRepository;
use Modules\Testimonial\Repositories\Testimonial\TestimonialRepository;
use Modules\Settings\Repositories\Setting\SettingRepository;

class FooterComposer
{
    private $brand;

    private $testimonial;

    private $setting;

    /**
     * Create a new sidebar composer.
     * 
     * @return void
     */
    public function __construct(
        BrandRepository $brand,
        TestimonialRepository $testimonial,
        SettingRepository $setting
    )
    {
        $this->brand =$brand;
        $this->testimonial = $testimonial;
        $this->setting = $setting;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->withBrands($this->brand->getActive())
        ->withTestimonials($this->testimonial->getActive())
        ->withSetting($this->setting->getSetting());
    }
}

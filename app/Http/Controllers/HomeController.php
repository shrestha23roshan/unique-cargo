<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Modules\MediaManagement\Repositories\Banner\BannerRepository;
use Modules\ContentManagement\Repositories\AboutUs\AboutUsRepository;
use Modules\ContentManagement\Repositories\Service\ServiceRepository;
use Modules\ContentManagement\Repositories\Work\WorkRepository;
use Modules\Settings\Repositories\Setting\SettingRepository;
use Modules\Seo\Repositories\Seo\SeoRepository;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $banner;

    private $aboutUs;

    private $service;

    private $setting;

    private $work;

    private $seo;

    public function __construct(
        BannerRepository $banner,
        AboutUsRepository $aboutUs,
        ServiceRepository $service,
        WorkRepository $work,
        SettingRepository $setting,
        SeoRepository $seo
    )
    {
        $this->banner = $banner;
        $this->aboutUs = $aboutUs;
        $this->service = $service;
        $this->work = $work;
        $this->setting = $setting;
        $this->seo = $seo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->testimonial->getActive());
        return view('frontend.index')
        ->withBanners($this->banner->getActive())
        ->withAboutUs($this->aboutUs->getActive())
        ->withServices($this->service->getActive()->take(3))
        ->withworks($this->work->getActive()->take(3))
        ->withSeo($this->seo->findByField('page', 'home'));

    }

    public function getContacts()
    {
        return view('frontend.contacts')
        ->withSetting($this->setting->getSetting())
        ->withSeo($this->seo->findByField('page', 'contact-us'));

    }

    public function sendmail(ContactFormRequest $request)
    { 
        $data = [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'subject' =>$request->subject,
                'phone' => $request->phone,
                'user_message' => $request->message,
            ];
            // dd($data);
            Mail::send('email.contact', $data , function($message) use ($data){
                $message->from($data['email']);
                $message->to('test46076@gmail.com')
                ->subject('Dradtech Contact Form Message');
               
            });
    
            return redirect()->route('contacts')
            ->with('success_message','Thank you for contacting us!.');
    }
}

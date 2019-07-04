<?php

namespace Modules\ContentManagement\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContentManagement\Repositories\AboutUs\AboutUsRepository;
use Modules\ContentManagement\Http\Requests\AboutUs\UpdateRequest;

class AboutUsController extends Controller
{
    private $about_us;

    public function __construct(AboutUsRepository $about_us)
    {
        $this->about_us = $about_us;
        $this->destinationpath = 'uploads/content-management/about-us/';
    }
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contentmanagement::AboutUs.index')
        ->withAboutUs($this->about_us->all());
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        return view('contentmanagement::AboutUs.edit')
        ->withAboutUs($this->about_us->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except('attachment');
        $about_us = $this->about_us->find($id);

        $imageFile = $request->attachment;
        if ($imageFile) {
            if (file_exists($this->destinationpath . $about_us->attachment) &&  $about_us->attachment != '') {
                unlink($this->destinationpath . $about_us->attachment);
            }
            $extension = strrchr($imageFile->getClientOriginalName(), '.');
            $new_file_name = "about_us_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : null;
        }
        $about_us = $this->about_us->update($id, $data);
        
        if($about_us){
            return redirect()->route('admin.content-management.about-us.index')
                ->withSuccessMessage('AboutUs is updated successfully');
        }

        return redirect()->back()
            ->withInput()
            ->withWarningMessage('AboutUs can not be updated.');
    }
}

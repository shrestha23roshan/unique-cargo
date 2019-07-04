<?php

namespace Modules\ContentManagement\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContentManagement\Repositories\Service\ServiceRepository;
use Modules\ContentManagement\Http\Requests\Service\StoreRequest;
use Modules\ContentManagement\Http\Requests\Service\UpdateRequest;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(ServiceRepository $service)
    {
        $this->service = $service;
        $this->destinationpath = 'uploads/content-management/services/';
    }
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contentmanagement::Service.index')
        ->withServices($this->service->getServices());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contentmanagement::Service.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('attachment');

        $imageFile = $request->attachment;
        if ($imageFile) {
            $extension = strrchr($imageFile->getClientOriginalName(), '.');
            $new_file_name = "service_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : NULL;
        }
        $service = $this->service->create($data);
        if($service){
            return redirect()->route('admin.content-management.services.index')
                        ->withSuccessMessage('Service is added successfully.');
        }

        return redirect()->back()
                ->withInput()
                ->withWarningMessage('Service can not be added.');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        return view('contentmanagement::Service.edit')
        ->withService($this->service->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateRequest $request , $id)
    {
        $data = $request->except('attachment');
        $service = $this->service->find($id);

        $imageFile = $request->attachment;
        if ($imageFile) {
            if (file_exists($this->destinationpath . $service->attachment) &&  $service->attachment != '') {
                unlink($this->destinationpath . $service->attachment);
            }
            $extension = strrchr($imageFile->getClientOriginalName(), '.');
            $new_file_name = "service_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : null;
        }
        $service = $this->service->update($id, $data);
        if($service){
            return redirect()->route('admin.content-management.services.index')
                ->withSuccessMessage('Service is updated successfully');
        }

        return redirect()->back()
            ->withInput()
            ->withWarningMessage('Service can not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $service = $this->service->find($id);
        $previousAttachment = $service->attachment;

        $flag = $this->service->destroy($id);
        if ($flag) {
            if (file_exists($this->destinationpath . $previousAttachment) && $previousAttachment != '') {
                unlink($this->destinationpath . $previousAttachment);
            }

            return response()->json([
                'type' => 'success',
                'message' => 'Service is deleted successfully.'
            ], 200);
        }
        return response()->json([
            'type' => 'error',
            'message' => 'Service can not be deleted.',
        ], 422);
    }
}


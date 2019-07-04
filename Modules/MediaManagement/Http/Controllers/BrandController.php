<?php

namespace Modules\MediaManagement\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\MediaManagement\Http\Requests\Brand\StoreRequest;
use Modules\MediaManagement\Repositories\Brand\BrandRepository;
use Modules\MediaManagement\Http\Requests\Brand\UpdateRequest;

class BrandController extends Controller
{
    private $brand;

    public function __construct(BrandRepository $brand)
    {
        $this->brand = $brand;
        $this->destinationpath = 'uploads/media-management/brands/';
    }
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('mediamanagement::Brand.index')
        ->withBrands($this->brand->getBrands());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('mediamanagement::Brand.create');
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
            $new_file_name = "brand_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : NULL;
        }

        $brand = $this->brand->create($data);

        if ($brand) {
            return redirect()->route('admin.media-management.brand.index')
            ->withSuccessMessage('Brand is added successfully.');
        }
        return redirect()->back()
        ->withInput()
        ->withWarningMessage('Brand can not be added.');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        return view('mediamanagement::Brand.edit')
        ->withBrand($this->brand->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateRequest $request , $id)
    {
        $data = $request->except('attachment');
        $brand = $this->brand->find($id);

        $imageFile = $request->attachment;
        if($imageFile) {
            if (file_exists($this->destinationpath . $brand->attachment) &&  $brand->attachment != '') {
                unlink($this->destinationpath . $brand->attachment);
            }
            $extension = strrchr($imageFile->getClientOriginalName(), '.');
            $new_file_name = "brand_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : null;
        }
        $brand = $this->brand->update($id, $data);
        
        if($brand){
            return redirect()->route('admin.media-management.brand.index')
                ->withSuccessMessage('Brand is updated successfully');
        }

        return redirect()->back()
            ->withInput()
            ->withWarningMessage('Brand can not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $brand = $this->brand->find($id);
        $previousAttachment = $brand->attachment;

        $flag = $this->brand->destroy($id);
        if ($flag) {
            if (file_exists($this->destinationpath . $previousAttachment) && $previousAttachment != '') {
                unlink($this->destinationpath . $previousAttachment);
            }

            return response()->json([
                'type' => 'success',
                'message' => 'Brand is deleted successfully.'
            ], 200);
        }
        return response()->json([
            'type' => 'error',
            'message' => 'Brand can not be deleted.',
        ], 422);
    }
}

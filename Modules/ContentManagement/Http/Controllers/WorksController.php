<?php

namespace Modules\ContentManagement\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\ContentManagement\Repositories\Work\WorkRepository;
use Modules\ContentManagement\Http\Requests\Work\StoreRequest;
use Modules\ContentManagement\Http\Requests\Work\UpdateRequest;

class WorksController extends Controller
{
    private $works;

    public function __construct(WorkRepository $works)
    {
        $this->works = $works;
        $this->destinationpath = 'uploads/content-management/works/';
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('contentmanagement::Work.index')
        ->withWorks($this->works->getWorks());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('contentmanagement::Work.create');
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
            $new_file_name = "works_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : NULL;
        }
        $works = $this->works->create($data);
        if($works){
            return redirect()->route('admin.content-management.works.index')
                        ->withSuccessMessage('Work is added successfully.');
        }

        return redirect()->back()
                ->withInput()
                ->withWarningMessage('Work can not be added.');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        return view('contentmanagement::Work.edit')
        ->withWork($this->works->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except('attachment');
        $works = $this->works->find($id);

        $imageFile = $request->attachment;
        if ($imageFile) {
            if (file_exists($this->destinationpath . $works->attachment) &&  $works->attachment != '') {
                unlink($this->destinationpath . $works->attachment);
            }
            $extension = strrchr($imageFile->getClientOriginalName(), '.');
            $new_file_name = "works_" . time();
            $attachment = $imageFile->move($this->destinationpath, $new_file_name.$extension);
            $data['attachment'] = isset($attachment) ? $new_file_name . $extension : null;
        }
        $works = $this->works->update($id, $data);
        if($works){
            return redirect()->route('admin.content-management.works.index')
                ->withSuccessMessage('Work is updated successfully');
        }

        return redirect()->back()
            ->withInput()
            ->withWarningMessage('Work can not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $works = $this->works->find($id);
        $previousAttachment = $works->attachment;

        $flag = $this->works->destroy($id);
        if ($flag) {
            if (file_exists($this->destinationpath . $previousAttachment) && $previousAttachment != '') {
                unlink($this->destinationpath . $previousAttachment);
            }

            return response()->json([
                'type' => 'success',
                'message' => 'Work is deleted successfully.'
            ], 200);
        }
        return response()->json([
            'type' => 'error',
            'message' => 'Work can not be deleted.',
        ], 422);
    }
}

<?php
namespace Modules\ContentManagement\Repositories\Work;

interface WorkRepository
{
    public function all();

    public function getActiveAndPaginate($paginate);
    
    public function getWorks();

    public function findBySlug($slug);
}
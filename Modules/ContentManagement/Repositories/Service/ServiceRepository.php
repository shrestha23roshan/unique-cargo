<?php
namespace Modules\ContentManagement\Repositories\Service;

interface ServiceRepository
{
    public function all();

    public function getActive();
    
    public function getServices();
}
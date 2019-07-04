<?php
namespace Modules\MediaManagement\Repositories\Brand;

interface BrandRepository
{
    public function all();

    public function getActive();

    public function getBrands();
}
<?php
namespace Modules\MediaManagement\Repositories\Brand;

use App\Repositories\BaseRepositoryEloquent;
use Modules\MediaManagement\Entities\Brand;

class BrandRepositoryEloquent extends BaseRepositoryEloquent implements BrandRepository
{
    protected $model;

    public function __construct(Brand $model)
    {
        $this->model = $model;
    }

    /**
     * Get all active brand in desc order.
     * created at: Sunday, February 17, 2019
     * updated at: Sunday, February 17, 2019
     * @author Tulsi Thapa
     * 
     * @return array
     */
    public function getActive() 
    {
        return $this->model->where('is_active', '=', '1')->orderBy('created_at', 'desc')->get();
    }

    /**
     * Get brands with descending order.
     * Created at: Monday, February 18, 2019
     * Updated at: Monday, February 18, 2019
     * @author Roshan shrestha
     * 
     * @return array
     */
    public function getBrands()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }
}

<?php
namespace Modules\ContentManagement\Repositories\Service;

use App\Repositories\BaseRepositoryEloquent;
use Modules\ContentManagement\Entities\Service;


class ServiceRepositoryEloquent extends BaseRepositoryEloquent implements ServiceRepository
{
    protected $model;

    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    /**
     * Get active sevices in desc order.
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
     * Get services with descending order.
     * Created at: Monday, February 18, 2019
     * Updated at: Monday, February 18, 2019
     * @author Roshan shrestha
     * 
     * @return array
     */
    public function getServices()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }
}
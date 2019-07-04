<?php
namespace Modules\ContentManagement\Repositories\Work;

use App\Repositories\BaseRepositoryEloquent;
use Modules\ContentManagement\Entities\Work;

class WorkRepositoryEloquent extends BaseRepositoryEloquent implements WorkRepository
{
    protected $model;

    public function __construct(Work $model)
    {
        $this->model = $model;
    }

    /**
     * Get active works in desc order.
     * created at: Sunday, February 17, 2019
     * updated at: Sunday, February 17, 2019
     * @author Tulsi Thapa
     * 
     * @return work
     */
    public function getActiveAndPaginate($paginate)
    {
        return $this->model->where('is_active', '=', '1')->orderBy('created_at', 'desc')->paginate($paginate);
    }

    /**
     * Get active Work in desc order.
     * created at: Sunday, February 17, 2019
     * updated at: Sunday, February 17, 2019
     * @author Tulsi Thapa
     * 
     * @param string $slug
     * @return work
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', '=', $slug)->first();
    }

    /**
     * Get active Works in desc order.
     * created at: Sunday, February 17, 2019
     * updated at: Sunday, February 17, 2019
     * @author Tulsi Thapa
     * 
     * @param string $slug
     * @return work
     */
    public function getActive()
    {
        return $this->model->where('is_active', '=', '1')->orderBy('created_at', 'desc')->get();
    }

    /**
     * Get works with descending order.
     * Created at: Monday, February 18, 2019
     * Updated at: Monday, February 18, 2019
     * @author Roshan shrestha
     * 
     * @return array
     */
    public function getWorks()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }
}
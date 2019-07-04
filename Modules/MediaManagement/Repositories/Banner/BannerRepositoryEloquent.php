<?php
namespace Modules\MediaManagement\Repositories\Banner;

use App\Repositories\BaseRepositoryEloquent;
use Modules\MediaManagement\Entities\Banner;

class BannerRepositoryEloquent extends BaseRepositoryEloquent implements BannerRepository
{
    protected $model;

    public function __construct(Banner $model)
    {
        $this->model = $model;
    }

    /**
     * Get all active banners in desc order.
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
     * Get banners with descending order.
     * Created at: Monday, February 18, 2019
     * Updated at: Monday, February 18, 2019
     * @author Roshan shrestha
     * 
     * @return array
     */
    public function getBanners()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }
}
<?php
namespace Modules\ContentManagement\Repositories\AboutUs;

use App\Repositories\BaseRepositoryEloquent;
use Modules\ContentManagement\Entities\AboutUs;


class AboutUsRepositoryEloquent extends BaseRepositoryEloquent implements AboutUsRepository
{
    protected $model;

    public function __construct(AboutUs $model)
    {
        $this->model = $model;
    }

      /**
     * Get active about us.
     * created at: Sunday, February 17, 2019
     * updated at: Sunday, February 17, 2019
     * @author Tulsi Thapa
     * 
     * @return array
     */
    public function getActive() 
    {
        return $this->model->where('is_active', '=', '1')->first();
    }
}
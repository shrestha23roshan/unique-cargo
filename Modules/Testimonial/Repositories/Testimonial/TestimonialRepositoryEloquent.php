<?php
namespace Modules\Testimonial\Repositories\Testimonial;

use App\Repositories\BaseRepositoryEloquent;
use Modules\Testimonial\Entities\Testimonial;

class TestimonialRepositoryEloquent extends BaseRepositoryEloquent implements TestimonialRepository
{
    protected $model;

    public function __construct(Testimonial $model)
    {
        $this->model = $model;
    }

    /**
     * Get active testimonial.
     * created at: Monday, February 18, 2019
     * updated at: Monday, February 18, 2019
     * @author Tulsi Thapa
     * 
     * 
     * @return array
     */
    public function getActive()
    {
        return $this->model->where('is_active', '=', '1')->get();
    }

    /**
     * Get testimonials with descending order.
     * Created at: Monday, February 18, 2019
     * Updated at: Monday, February 18, 2019
     * @author Roshan shrestha
     * 
     * @return array
     */
    public function getTestimonials()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }
}
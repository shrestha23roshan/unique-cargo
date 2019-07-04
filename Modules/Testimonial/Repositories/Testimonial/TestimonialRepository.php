<?php
namespace Modules\Testimonial\Repositories\Testimonial;

interface TestimonialRepository
{
    public function all();
    
    public function getTestimonials();

    public function getActive();
}
<?php

namespace App\View\Components;

use App\Http\Helpers\Helpers;
use App\Models\Admin\Car;
use Illuminate\View\Component;

class SliderCars extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $bestCars ;
    public function __construct()
    {
        $default_language = Helpers::getDefaultLanguage();
        $this->bestCars = Car::with(['images', 'contentload' => function($query) use($default_language){
            $query->where('language_id', $default_language->id);
        }])->where('status', 1)->orderBy("price_per_night","desc")->take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->bestCars);
        return view('front.components.slider-cars');
    }
}

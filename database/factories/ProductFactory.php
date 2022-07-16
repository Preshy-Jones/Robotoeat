<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{


    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // dd(gettype($randomType));
        return [
            'product_name' => $this->faker->randomElement(['Seasonal Steak Special', '10 oz AAA Striploin', '7 oz AAA Striploin', '10 oz AAA Striploin', '7 oz AAA Striploin', '10 oz AAA Striploin', '7 oz AAA Striploin', '10 oz AAA Striploin']),
            'isLiked' => $this->faker->randomElement([true, false, true, false, true, false, true, false]),
            'product_description' => $this->faker->text(217),
            'product_image_url' => $this->faker->randomElement(["https://res.cloudinary.com/xxolcare/image/upload/v1657708993/food3_ypqj4h.jpg", "https://res.cloudinary.com/xxolcare/image/upload/v1657708978/food2_idnerm.jpg", "https://res.cloudinary.com/xxolcare/image/upload/v1657707959/food1_zqudw3.webp", "https://res.cloudinary.com/xxolcare/image/upload/v1657708993/food3_ypqj4h.jpg", "https://res.cloudinary.com/xxolcare/image/upload/v1657708978/food2_idnerm.jpg", "https://res.cloudinary.com/xxolcare/image/upload/v1657707959/food1_zqudw3.webp", "https://res.cloudinary.com/xxolcare/image/upload/v1657708993/food3_ypqj4h.jpg", "https://res.cloudinary.com/xxolcare/image/upload/v1657708978/food2_idnerm.jpg", "https://res.cloudinary.com/xxolcare/image/upload/v1657707959/food1_zqudw3.webp"]),
        ];

    }
}

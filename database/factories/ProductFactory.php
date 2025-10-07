<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'Laptop', 'Smartphone', 'Headphones', 'Backpack', 'Desk Lamp', 'Bluetooth Speaker', 'Coffee Maker',
                'Water Bottle', 'Notebook', 'Wireless Mouse', 'Keyboard', 'Monitor', 'Tablet', 'Camera', 'Sneakers',
                'Wristwatch', 'Sunglasses', 'Fitness Tracker', 'Charger', 'Desk Chair', 'Pen', 'Book', 'Tshirt',
                'Jacket', 'Backpack', 'Shoes', 'Mug', 'Flash Drive', 'Router', 'Printer', 'Projector', 'Speaker', 'Jeans',
                'Smartwatch', 'Earbuds', 'Power Bank', 'Tripod', 'Microphone', 'Webcam', 'Graphics Card', 'SSD',
                'Hard Drive', 'Router', 'TV', 'Gaming Console', 'VR Headset', 'Drone', 'Action Camera', 'Smart Light',
                'Thermostat', 'Electric Toothbrush', 'Hair Dryer', 'Blender', 'Toaster', 'Vacuum Cleaner', 'Fan',
                'Heater', 'Air Purifier', 'Rice Cooker', 'Slow Cooker', 'Mixer', 'Juicer', 'Grill', 'Oven', 'Stove',
                'Dishwasher','Refrigerator', 'Freezer', 'Washer', 'Dryer', 'Iron', 'Sewing Machine', 'Tool Kit',
                'Drill', 'Saw', 'Hammer', 'Screwdriver', 'Wrench', 'Pliers', 'Tape Measure', 'Level', 'Lawn Mower',
                'Hedge Trimmer', 'Leaf Blower', 'Chainsaw', 'Shovel', 'Rake', 'Garden Hose', 'Sprinkler', 'Plamter',
                'Fertilizer', 'Soil', 'Seeds', 'Compost BIn', 'Wheel Barrow', 'Tent', 'Sleeping Bag', 'Lantern', 'Cooler',
            ]),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'image_url' => null, // No image
            'stock' => 100,
        ];
    }
}

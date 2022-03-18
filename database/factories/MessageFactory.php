<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\message>
 */
class MessageFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        do{
            $from=rand(1,20);
            $to=rand(1,20);
            $read=rand(0,1);
        } while($from==$to);

        return [
            'from' => $from,
            'to' => $to,
            'message' => $this->faker->text(),
            'is_read' => $read
        ];
    }
}

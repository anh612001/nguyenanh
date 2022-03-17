<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Friend>
 */
class FriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        do{
            $user_id=rand(1,20);
            $friend_id=rand(1,20);
            $status=rand(0,1);
        } while($user_id==$friend_id);

        return [
            'user_id' => $user_id,
            'friend_id' => $friend_id,
            'status' => $status
        ];
    }
}

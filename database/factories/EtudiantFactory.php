<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{


    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $ville_id = Ville::pluck('id')->toArray();

        return [
            'id'             => User::factory(),
            'nom'            => $this->faker->name,
            'addresse'       => $this->faker->address,
            'phone'          => $this->faker->phoneNumber,
            'email'          => $this->faker->unique()->safeEmail,
            'date_naissance' => $this->faker->dateTimeThisCentury,
            'ville_id'       => $this->faker->randomElement( $ville_id)
        ];
    }
}

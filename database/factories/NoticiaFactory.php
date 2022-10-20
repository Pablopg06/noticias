<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            $titulo = $this->faker->sentence();
        return [
            'epigrafe'=>$this->faker->sentence(),
            'titulo'=>$titulo,
            //'slug'=>Str::slug($titulo,'-'),
            'subtitulo'=>$this->faker->sentence(),
            'cuerpo'=>$this->faker->paragraph(),
            'imagen'=>$this->faker->randomElement(['/c/pablo/image1.jpg','/c/pablo/image2.jpg','/c/pablo/image3.jpg']),
            'piefoto'=>$this->faker->sentence()
        ];
    }
}

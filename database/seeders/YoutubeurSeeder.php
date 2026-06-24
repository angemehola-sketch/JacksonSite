<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Youtubeur;

class YoutubeurSeeder extends Seeder
{
    public function run(): void
    {
        Youtubeur::create([
            'nom' => 'Lonni',
            'role' => 'Membre du collectif',
            'description' => 'Membre incontournable des Jacksons, connu pour son humour et sa complicité avec le groupe.',
            'image' => 'https://i.pinimg.com/1200x/a8/15/50/a81550daf7620fbc172a4622735e5de2.jpg'
        ]);

        Youtubeur::create([
            'nom' => 'Totoche',
            'role' => 'Membre du collectif',
            'description' => 'Un visage emblématique des vidéos, apportant une énergie dynamique aux concepts du groupe.',
            'image' => 'https://i.pinimg.com/1200x/a8/15/50/a81550daf7620fbc172a4622735e5de2.jpg'
        ]);

        Youtubeur::create([
            'nom' => 'Shess',
            'role' => 'Membre du collectif',
            'description' => 'Partie intégrante de la bande, très apprécié des abonnés pour son naturel et son implication.',
            'image' => 'https://i.pinimg.com/1200x/a8/15/50/a81550daf7620fbc172a4622735e5de2.jpg'
        ]);

        Youtubeur::create([
            'nom' => 'Evan',
            'role' => 'Membre du collectif',
            'description' => 'Apporte sa touche personnelle et son enthousiasme aux challenges et vlogs des Jacksons.',
            'image' => 'https://i.pinimg.com/1200x/a8/15/50/a81550daf7620fbc172a4622735e5de2.jpg'
        ]);

        Youtubeur::create([
            'nom' => 'Moby',
            'role' => 'Membre du collectif',
            'description' => 'Membre dynamique du groupe qui contribue à l\'alchimie unique de la chaîne.',
            'image' => 'https://i.pinimg.com/1200x/a8/15/50/a81550daf7620fbc172a4622735e5de2.jpg'
        ]);
    }
}
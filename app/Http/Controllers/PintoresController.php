<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PintoresController extends Controller
{
    public function alexandre() {
       //view
        return view('artistas/alexandre', [
            'pintor' => 'Alexandre Cabanel',
            'topImage' => '../img/AlexandreCabanel_perfil.jpg',
            'name1' => 'Phaedra',
            'img1' => '../img/AlexandreCabanel.jpg',
            'name2' => 'Phaedra',
            'img2' => '../img/AlexandreCabanel_1.jpg',
            'name3' => 'albaydé',
            'img3' => '../img/AlexandreCabanel_2.jpg',
            'name4' => 'Fallen Angel',
            'img4' => '../img/AlexandreCabanel_3.jpg',
            'name5' => 'Portrait of Countess de Koller (nee Maria Riznich)',
            'img5' => '../img/AlexandreCabanel_4.jpg'
        ]);
    }
    public function jan() {
        return view('artistas/jan', [
            'pintor' => 'Jan van Eyck',
            'topImage' => '../img/JanVan_1.jpg',
            'name1' => 'Poliptico de Gante',
            'img1' => '../img/JanVan.jpg',
            'name2' => 'Retrato de hombre con turbante',
            'img2' => '../img/JanVan_1.jpg',
            'name3' => 'Retrato de Giovanni Arnolfini y su esposa (Arnolfini Portrait)',
            'img3' => '../img/JanVan_2.jpg',
            'name4' => 'Virgen del canciller Rolin (Madonna of Chancellor Rolin)',
            'img4' => '../img/JanVan_3.jpg',
            'name5' => 'Retrato de Margarita van Eyck',
            'img5' => '../img/JanVan_4.jpg'
        ]);
    }
    public function max() {
        return view('artistas/max', [
            'pintor' => 'Max Ernst',
            'topImage' => '../img/MaxErnst_perfil.jpg',
            'name1' => 'Celebes',
            'img1' => '../img/MaxErnst.jpg',
            'name2' => 'A Friends Reunion',
            'img2' => '../img/MaxErnst_1.jpg',
            'name3' => 'The Angel of the home or the Triumph of Surrealism',
            'img3' => '../img/MaxErnst_2.jpg',
            'name4' => 'Loplop Introduces Loplop',
            'img4' => '../img/MaxErnst_3.jpg',
            'name5' => 'Ubu Imperator',
            'img5' => '../img/MaxErnst_4.jpg'
        ]);
    }
    public function omar() {
        return view('artistas/omar', [
            'pintor' => 'Omar Ryyan',
            'topImage' => '../img/OmarRayyan_perfil.jpg',
            'name1' => '',
            'img1' => '../img/OmarRayyan.jpg',
            'name2' => '',
            'img2' => '../img/OmarRayyan_1.jpg',
            'name3' => '',
            'img3' => '../img/OmarRayyan_2.jpg',
            'name4' => '',
            'img4' => '../img/OmarRayyan_3.jpg',
            'name5' => '',
            'img5' => '../img/OmarRayyan_4.jpg'
        ]);
    }
}

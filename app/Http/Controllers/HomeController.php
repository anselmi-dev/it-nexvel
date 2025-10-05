<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialNetwork;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'services' => [
                (object) [
                    'short_description' => 'INFRAESTRUCTURA TECNOLÓGICA, CLOUD, REDES Y CIBERSEGURIDAD.',
                    'title' => 'INFRAESTRUCTURA TECNOLÓGICA, CLOUD, REDES Y CIBERSEGURIDAD.'
                ],
                (object) [
                    'short_description' => 'DOMÓTICA, INMÓTICA Y SEGURIDAD ELECTRÓNICA.',
                    'title' => 'DOMÓTICA, INMÓTICA Y SEGURIDAD ELECTRÓNICA.'
                ],
                (object) [
                    'short_description' => 'CONSULTORÍA, GESTIÓN & ADM. DE PROYECTOS.',
                    'title' => 'CONSULTORÍA, GESTIÓN & ADM. DE PROYECTOS.'
                ],
                (object) [
                    'short_description' => 'SEO, MARKETING DIGITAL Y PRESENCIA ONLINE.',
                    'title' => 'SEO, MARKETING DIGITAL Y PRESENCIA ONLINE.'
                ],
                (object) [
                    'short_description' => 'FORMACIÓN ESPECIALIZADA Y OUTSOURCING IT.',
                    'title' => 'FORMACIÓN ESPECIALIZADA Y OUTSOURCING IT.'
                ],
            ],
            'socialNetworks' => SocialNetwork::getActiveOrdered(),
        ]);
    }
}

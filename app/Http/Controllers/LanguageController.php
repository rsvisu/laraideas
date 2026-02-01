<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setLanguage(string $locale)
    {
        // Recuperamos los idiomas permitidos
        $locales = array_keys(config('languages'));
        // Si el idioma de la peticion no esta en los permitidos devolvemos un 400
        if (!in_array($locale, $locales)) {
            abort(404);
        }
        // Establecemos en sesion el idioma
        session(['locale' => $locale]);
        // Redirigimos atras
        return redirect()->back();
    }
}

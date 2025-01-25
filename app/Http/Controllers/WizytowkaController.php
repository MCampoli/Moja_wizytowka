<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WizytowkaController extends Controller
{
    // Strona główna
    public function home()
    {
        return view('home');
    }

    // Portfolio Fotografa
    public function portfolio_fotografa()
    {
        return view('portfolio_fotografa');  // Sprawdź, czy masz ten plik w folderze views
    }

    public function sklep_rekodzielo()
{
    // Zwróć widok sklepu z rękodziełem
    return view('sklep_rekodzielo');  // Upewnij się, że masz widok 'sklep_rekodzielo.blade.php'
}
// Strona O mnie
public function oMnie()
{
    return view('o_mnie');
}

// Strona Umiejętności
public function umiejetnosci()
{
    return view('umiejetnosci');
}

// Strona Projekty
public function projekty()
{
    return view('projekty');
}

// Strona Blog
public function blog()
{
    return view('blog');
}

// Strona Blog o Technologii (w sekcji Projekty)
public function blogTechnologiczny()
{
    return view('blog_technologiczny');
}

// Strona Kontakt
public function kontakt()
{
    return view('kontakt');
}
}

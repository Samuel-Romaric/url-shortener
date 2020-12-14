<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use App\Http\Requests\UrlFormRequest;


class UrlsController extends Controller
{
	/**
     * Display the url shortener home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('/pages/index');
    }

    /**
     * Create a new url for our user.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate_url(UrlFormRequest $request)
    {
        /****** Recuperation de l'url saisi *******/
        $url = request('url');

        /* --- Vérifier si l'url a déjà été vracourcir et la rétourner si tel est le cas --- */
        $record = Url::whereUrl($url)->first();

        /* Si l'url exite déjà; rediriger l'utilisateur vers la première url trouvé */
        if ($record) {
            return view('pages.index')->withShortened($record->shortened);
        }

        /* Sinon créer une nouvelle url shortned */
        $row = Url::create([
            'url' => request('url'),
            'shortened' => Url::get_unique_short_url(),
        ]);

        if ($row) {
            // return view('pages.index')->withShortened($row->shortened);
            return view('pages.index')->withShortenedAndUrl($row->shortened, $row->url);
        }
    }

    /**
     * Redirect the user to this url.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect_to_url($shortened)
    {
    	$url = Url::whereShortened($shortened)->first();

        if (! $url ) {
            return redirect('/');
        } else {
            return redirect($url->url);
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
    	return view('/pages.about');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function competence()
    {
    	return view('/pages/competence');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function experience()
    {
    	return view('/pages/experience');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacter()
    {
    	return view('/pages/contacter');
    }
}


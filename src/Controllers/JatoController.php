<?php
namespace Genuineq\Jato\Controllers;

use Genuineq\Jato\Jato;

class JatoController
{
    public function __invoke(Jato $jato) {
        $quote = $jato->justDoIt();

        return view('jato::index', compact('quote'));
    }
}
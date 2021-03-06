<?php

namespace Wallabag\ImportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ImportController extends Controller
{
    /**
     * @Route("/", name="import")
     */
    public function importAction()
    {
        return $this->render('WallabagImportBundle:Import:index.html.twig', [
            'imports' => $this->get('wallabag_import.chain')->getAll(),
        ]);
    }
}

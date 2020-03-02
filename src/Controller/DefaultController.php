<?php
/**
 * FBonline
 *
 * @copyright 2014-2017 Fastbolt Schraubengroßhandels GmbH (http://www.fastbolt.com)
 * @license   commercial
 * @link      https://fbonline.fastbolt.com
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('base.html.twig', []);
    }
}
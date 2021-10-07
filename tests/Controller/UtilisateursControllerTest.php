<?php declare(strict_types=1);
/******************************************************************************/
/*                                PLANANCE                                    */
/* Auteur: Tristan FLeury - viduc@mail.fr                                     */
/* Github - https://github.com/viduc                                          */
/* ©Viduc 2021 - LICENCE APACHE 2.0                                           */
/******************************************************************************/

namespace App\Tests\Controller;

use App\Controller\UtilisateursController;

class UtilisateursControllerTest extends PlananceTestController
{
    private UtilisateursController $utilisateurs;

    protected function setUp() : void
    {
        parent::setUp();
        $this->utilisateurs = new UtilisateursController();
    }
}
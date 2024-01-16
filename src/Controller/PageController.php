// src/Controller/PageController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('page/about.html.twig', [
            'message' => 'Welcome to the About page!',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'message' => 'Feel free to contact us!',
        ]);
    }

    /**
     * @Route("/redirect", name="redirect")
     */
    public function redirectToHome(): Response
    {
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/external", name="external_redirect")
     */
    public function redirectToExternalSite(): Response
    {
        // Replace 'https://example.com' with the actual external website URL
        $externalUrl = 'https://example.com';
        return $this->redirect($externalUrl);
    }
}

<?php
namespace SystemfaBundle\Controller;


use Sg\DatatablesBundle\Datatable\DatatableInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class InventarioController extends Controller
{

/**
 * Lists all Post entities.
 *
 * @param Request $request
 *
 * @Route("/inventarios/datos", name="post_index")
 * @Method("GET")
 *
 * @return Response
 */
public function indexAction(Request $request)
{
    $isAjax = $request->isXmlHttpRequest();

    // Get your Datatable ...
    //$inventario = $this->get('app.datatable.post');
    //$inventario->buildDatatable();

    // or use the DatatableFactory
    /** @var DatatableInterface $datatable */
    $datatable = $this->get('sg_datatables.factory')->create(InventarioDatatable::class);
    $datatable->buildDatatable();

    if ($isAjax) {
        $responseService = $this->get('sg_datatables.response');
        $responseService->setDatatable($datatable);
        $responseService->getDatatableQueryBuilder();

        return $responseService->getResponse();
    }

    return $this->render('inventario/index.html.twig', array(
        'inventario' => $datatable,
    ));
}

/**
 * Finds and displays a Post entity.
 *
 * @param Post $post
 *
 * @Route("/{_locale}/{id}.{_format}", name = "post_show", options = {"expose" = true})
 * @Method("GET")
 * @Security("has_role('ROLE_ADMIN')")
 *
 * @return Response
 */
public function showAction(Post $post)
{
    return $this->render('post/show.html.twig', array(
        'post' => $post
    ));
}
}
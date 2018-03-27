<?php

namespace SystemfaBundle\Controller;

use SystemfaBundle\Entity\Inventario;
use Sg\DatatablesBundle\Datatable\DatatableInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Inventario controller.
 *
 * @Route("inventario")
 */
class InventarioController extends Controller
{
    /**
 * Lists all Post entities.
 *
 * @param Request $request
 *
 * @Route("/", name="inventario_index")
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
     * Creates a new inventario entity.
     *
     * @Route("/new", name="inventario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inventario = new Inventario();
        $form = $this->createForm('SystemfaBundle\Form\InventarioType', $inventario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $inventario->setStatus('E');
            $em->persist($inventario);
            $em->flush();

            return $this->redirectToRoute('inventario_show', array('id' => $inventario->getId()));
        }

        return $this->render('inventario/new.html.twig', array(
            'inventario' => $inventario,
            'form' => $form->createView(),
        ));
    }

      /**
 * Finds and displays a Post entity.
 *
 * @param Inventario $inventario
 *
 * @Route("/{id}", name = "inventario_show", options = {"expose" = true})
 * @Method("GET")
 * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
 *
 * @return Response
 */
public function showAction(Inventario $inventario)
{

    $deleteForm = $this->createDeleteForm($inventario);

        return $this->render('inventario/show.html.twig', array(
            'inventario' => $inventario,
            'delete_form' => $deleteForm->createView(),
        ));

    return $this->render('post/show.html.twig', array(
        'post' => $post
    ));


}

    /**
     * Displays a form to edit an existing inventario entity.
     *
     * @Route("/{id}/edit", name="inventario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inventario $inventario)
    {
        $deleteForm = $this->createDeleteForm($inventario);
        $editForm = $this->createForm('SystemfaBundle\Form\InventarioType', $inventario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inventario_edit', array('id' => $inventario->getId()));
        }

        return $this->render('inventario/edit.html.twig', array(
            'inventario' => $inventario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a inventario entity.
     *
     * @Route("/{id}", name="inventario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inventario $inventario)
    {
        $form = $this->createDeleteForm($inventario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inventario);
            $em->flush();
        }

        return $this->redirectToRoute('inventario_index');
    }

    /**
     * Creates a form to delete a inventario entity.
     *
     * @param Inventario $inventario The inventario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inventario $inventario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inventario_delete', array('id' => $inventario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

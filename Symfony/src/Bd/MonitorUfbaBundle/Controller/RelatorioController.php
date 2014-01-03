<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Relatorio;
use Bd\MonitorUfbaBundle\Form\RelatorioType;

/**
 * Relatorio controller.
 *
 * @Route("/relatorio")
 */
class RelatorioController extends Controller
{

    /**
     * Lists all Relatorio entities.
     *
     * @Route("/", name="relatorio")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Relatorio')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Relatorio entity.
     *
     * @Route("/", name="relatorio_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Relatorio:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Relatorio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('relatorio_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Relatorio entity.
    *
    * @param Relatorio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Relatorio $entity)
    {
        $form = $this->createForm(new RelatorioType(), $entity, array(
            'action' => $this->generateUrl('relatorio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Relatorio entity.
     *
     * @Route("/new", name="relatorio_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Relatorio();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Relatorio entity.
     *
     * @Route("/{id}", name="relatorio_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Relatorio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relatorio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Relatorio entity.
     *
     * @Route("/{id}/edit", name="relatorio_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Relatorio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relatorio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Relatorio entity.
    *
    * @param Relatorio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Relatorio $entity)
    {
        $form = $this->createForm(new RelatorioType(), $entity, array(
            'action' => $this->generateUrl('relatorio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Relatorio entity.
     *
     * @Route("/{id}", name="relatorio_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Relatorio:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Relatorio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Relatorio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('relatorio_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Relatorio entity.
     *
     * @Route("/{id}", name="relatorio_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Relatorio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Relatorio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('relatorio'));
    }

    /**
     * Creates a form to delete a Relatorio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('relatorio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

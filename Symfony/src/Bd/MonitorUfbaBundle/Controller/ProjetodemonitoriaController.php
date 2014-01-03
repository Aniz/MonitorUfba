<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Projetodemonitoria;
use Bd\MonitorUfbaBundle\Form\ProjetodemonitoriaType;

/**
 * Projetodemonitoria controller.
 *
 * @Route("/projeto")
 */
class ProjetodemonitoriaController extends Controller
{

    /**
     * Lists all Projetodemonitoria entities.
     *
     * @Route("/", name="projeto")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Projetodemonitoria')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Projetodemonitoria entity.
     *
     * @Route("/", name="projeto_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Projetodemonitoria:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Projetodemonitoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projeto_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Projetodemonitoria entity.
    *
    * @param Projetodemonitoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Projetodemonitoria $entity)
    {
        $form = $this->createForm(new ProjetodemonitoriaType(), $entity, array(
            'action' => $this->generateUrl('projeto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projetodemonitoria entity.
     *
     * @Route("/new", name="projeto_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Projetodemonitoria();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Projetodemonitoria entity.
     *
     * @Route("/{id}", name="projeto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Projetodemonitoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetodemonitoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Projetodemonitoria entity.
     *
     * @Route("/{id}/edit", name="projeto_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Projetodemonitoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetodemonitoria entity.');
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
    * Creates a form to edit a Projetodemonitoria entity.
    *
    * @param Projetodemonitoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projetodemonitoria $entity)
    {
        $form = $this->createForm(new ProjetodemonitoriaType(), $entity, array(
            'action' => $this->generateUrl('projeto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projetodemonitoria entity.
     *
     * @Route("/{id}", name="projeto_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Projetodemonitoria:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Projetodemonitoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projetodemonitoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projeto_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Projetodemonitoria entity.
     *
     * @Route("/{id}", name="projeto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Projetodemonitoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projetodemonitoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projeto'));
    }

    /**
     * Creates a form to delete a Projetodemonitoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projeto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

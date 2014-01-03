<?php

namespace Bd\MonitorUfbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bd\MonitorUfbaBundle\Entity\Certificado;
use Bd\MonitorUfbaBundle\Form\CertificadoType;

/**
 * Certificado controller.
 *
 * @Route("/certificado")
 */
class CertificadoController extends Controller
{

    /**
     * Lists all Certificado entities.
     *
     * @Route("/", name="certificado")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BdMonitorUfbaBundle:Certificado')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Certificado entity.
     *
     * @Route("/", name="certificado_create")
     * @Method("POST")
     * @Template("BdMonitorUfbaBundle:Certificado:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Certificado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('certificado_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Certificado entity.
    *
    * @param Certificado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Certificado $entity)
    {
        $form = $this->createForm(new CertificadoType(), $entity, array(
            'action' => $this->generateUrl('certificado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Certificado entity.
     *
     * @Route("/new", name="certificado_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Certificado();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Certificado entity.
     *
     * @Route("/{id}", name="certificado_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Certificado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Certificado entity.
     *
     * @Route("/{id}/edit", name="certificado_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Certificado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificado entity.');
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
    * Creates a form to edit a Certificado entity.
    *
    * @param Certificado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Certificado $entity)
    {
        $form = $this->createForm(new CertificadoType(), $entity, array(
            'action' => $this->generateUrl('certificado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Certificado entity.
     *
     * @Route("/{id}", name="certificado_update")
     * @Method("PUT")
     * @Template("BdMonitorUfbaBundle:Certificado:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BdMonitorUfbaBundle:Certificado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('certificado_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Certificado entity.
     *
     * @Route("/{id}", name="certificado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BdMonitorUfbaBundle:Certificado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Certificado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('certificado'));
    }

    /**
     * Creates a form to delete a Certificado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('certificado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Admin\Entity;

use Sonata\UserBundle\Admin\Entity\UserAdmin as ParentAdmin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Security\Acl\Permission\MaskBuilder;

use FOS\UserBundle\Model\UserManagerInterface;

class UserAdmin extends ParentAdmin
{

    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('username')
            ->add('locked')
            ->add('email')
            ->add('groups')
            ->add('organizations')
            ->add('projects')
            ->add('usersteps')
            ->add('id')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text', array('required' => false))
            ->end()
            ->with('Groups')
                ->add('groups', 'sonata_type_model', array('required' => false))
            ->end()
            ->with('Orders')
                ->add('orders', 'sonata_type_model', array('required' => false))
            ->end()
            ->with('Projects')
                ->add('projects', 'sonata_type_model', array('required' => false))
            ->end()
            ->with('Organizations')
                ->add('organizations', 'sonata_type_model', array('required' => false))
            ->end()
            ->with('HumanRoads')
                ->add('usersteps', 'sonata_type_model', array('required' => false))
            ->end()
            ->with('Management')
                ->add('roles', 'sonata_security_roles', array(
                    'expanded' => true,
                    'multiple' => true,
                    'required' => false
                ))
                ->add('locked', null, array('required' => false))
                ->add('expired', null, array('required' => false))
                ->add('enabled', null, array('required' => false))
                ->add('credentialsExpired', null, array('required' => false))
            ->end()
        ;
    }
}

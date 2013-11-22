<?php
/**
 * This file is part of the RedKiteCmsBaseBlocksBundle and it is distributed
 * under the MIT License. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) RedKite Labs <info@redkite-labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.redkite-labs.com
 *
 * @license    MIT License
 *
 */

namespace RedKiteCms\Block\RedKiteCmsBaseBlocksBundle\Core\Form\Image;

use Symfony\Component\Form\FormBuilderInterface;
use RedKiteCms\Block\RedKiteCmsBaseBlocksBundle\Core\Form\Base\AlBaseType;

/**
 * Defines the images' editor form
 *
 * @author RedKite Labs <info@redkite-labs.com>
 */
class AlImageType extends AlBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('src', null, array('label' => 'image_block_src_attribute'));
        $builder->add('data_src', 'hidden');
        $builder->add('title', null, array('label' => 'image_block_title_attribute'));
        $builder->add('alt', null, array('label' => 'image_block_alt_attribute')); 
        
        parent::buildForm($builder, $options);
    }
}

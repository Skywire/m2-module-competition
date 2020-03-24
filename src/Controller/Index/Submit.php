<?php

/**
 * Skywire
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @package     Skywire\Competition\Controller\Index
 * @author      Skywire Core Team
 * @copyright   Copyright (c) 2020 Skywire (http://www.skywire.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace Skywire\Competition\Controller\Index;

use Magento\Framework\App\Action\Context;
use Skywire\Questionnaire\Model\Session as QuestionnaireSession;

class Submit extends \Magento\Framework\App\Action\Action
{
    /**
     * @var QuestionnaireSession
     */
    protected $questionnaireSession;

    public function __construct(Context $context, QuestionnaireSession $questionnaireSession)
    {
        parent::__construct($context);
        $this->questionnaireSession = $questionnaireSession;
    }

    public function execute()
    {
        if ($this->getRequest()->isPost()) {
            $this->questionnaireSession->setFormData($this->getRequest()->getParams());

            # TODO Implement validation, persistence and email send
        }

        return $this->_redirect($this->_redirect->getRefererUrl());
    }
}
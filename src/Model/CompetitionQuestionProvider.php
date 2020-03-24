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
 * @package     Skywire\Competition\Model
 * @author      Skywire Core Team
 * @copyright   Copyright (c) 2020 Skywire (http://www.skywire.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
declare(strict_types=1);

namespace Skywire\Competition\Model;


use Skywire\Questionnaire\Model\QuestionProvider\YAML;

/**
 * Class CompetitionQuestionProvider
 *
 * @package Skywire\Competition\Model
 */
class CompetitionQuestionProvider extends YAML
{
    public function getSourceData()
    {
        # TODO Fetch this data from the competition entity questionnaire field
        return /** @lang yaml */ <<<EOT
- id: question_1
  input: text
  required: true
  label: Question One
  sort: 10
- id: question_2
  input: select
  required: true
  label: Question Two
  sort: 20
  options:
    - value: option-1
      label: Option 1
      sort: 10
    - value: option-2
      label: Option 2
      sort: 20
EOT;

    }
}

<?php

namespace Kunstmaan\LeadGenerationBundle\Tests\Entity\Rule;

use Kunstmaan\LeadGenerationBundle\Entity\Rule\LocaleWhitelistRule;
use Kunstmaan\LeadGenerationBundle\Form\Rule\LocaleWhiteListAdminType;
use Kunstmaan\LeadGenerationBundle\Tests\unit\Entity\Popup\Popup;
use PHPUnit_Framework_TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-04 at 16:54:04.
 */
class LocaleWhitelistRuleTest extends PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters()
    {
        $rule = new LocaleWhitelistRule();
        $rule->setPopup(new Popup());
        $rule->setLocale('en');

        $this->assertEquals('en', $rule->getLocale());
        $this->assertEquals('LocaleWhitelistRule', $rule->getJsObjectClass());
        $this->assertEquals('/bundles/kunstmaanleadgeneration/js/rule/LocaleWhitelistRule.js', $rule->getJsFilePath());
        $this->assertEquals(LocaleWhiteListAdminType::class, $rule->getAdminType());
        $this->assertEquals('kunstmaan_lead_generation.rule.service.localeruleservice', $rule->getService());
        $this->assertInstanceOf(Popup::class, $rule->getPopup());
        $this->assertTrue(is_array($rule->getJsProperties()));
    }
}

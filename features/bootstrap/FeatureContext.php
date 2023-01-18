<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

  /**
   * @Then I save the page
   */
  public function saveThePage() {
    $data = $this->getSession()->getDriver()->getContent();
    file_put_contents("/tmp/behat_page.html", $data);
  }
}

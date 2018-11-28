<?php

class FeatureContext implements \Behat\Behat\Context\Context
{
    /**
     * @Given some circumstances
     */
    public function passes()
    {
        return true;
    }
}

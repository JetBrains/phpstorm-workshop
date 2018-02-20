<?php
/**
 * Writing Behat tests. Based on http://behat.org/en/latest/quick_start.html
 *
 * Last modified: 2/20/2018
 */

namespace BehatTesting\JetBrains;

// 1. Let's start with creating a "basket.feature" file that holds a sample "user-story" written in Gherkin format.
//    We're taking here a slightly modified sample available at Behat website: http://behat.org/en/latest/quick_start.html.
//
//
//        Feature: Product basket
//          In order to buy products
//          As a customer
//          I need to be able to put interesting products into a basket
//
//          Scenario: Buying a single product under 10 eur
//            Given there is a "Chocolate Bar", which costs 5 eur
//            When I add the "Chocolate Bar" to the basket
//            Then I should have 1 product in the basket
//            And the overall basket price should be 9 eur
//
//
// 2. Now open the file and notice that all Given, When, Then, And step definitions are marked/highlighted as undefined.
// This is where PhpStorm would help you creating all the necessary definitions.
// Place the cursor at any highlighted step and hit Cmd/Alt+Enter > Create All Steps Definition > select previously generated FeatureContext.php file.
//
// 3. All previously missing steps are now defined and can be seen as methods added to your FeatureContext class. You can now edit them transforming into actual tests.
//
// Let's add some logic to get our tests working. Add the helper classes below to FeatureContext.php:
//
//        final class Shelf
//        {
//            private $priceMap = array();
//
//            public function setProductPrice($product, $price)
//            {
//                $this->priceMap[$product] = $price;
//            }
//
//            public function getProductPrice($product)
//            {
//                return $this->priceMap[$product];
//            }
//        }
//        final class Basket implements \Countable
//        {
//            private $shelf;
//            private $products;
//            private $productsPrice = 0.0;
//
//            public function __construct(Shelf $shelf)
//            {
//                $this->shelf = $shelf;
//            }
//
//            public function addProduct($product)
//            {
//                $this->products[] = $product;
//                $this->productsPrice += $this->shelf->getProductPrice($product);
//            }
//
//            public function getTotalPrice()
//            {
//                return $this->productsPrice
//                    + ($this->productsPrice * 0.2)
//                    + ($this->productsPrice > 10 ? 2.0 : 3.0);
//            }
//
//            public function count()
//            {
//                return count($this->products);
//            }
//        }
//
//
//    Then modify FeatureContext class itself to reflect actual test:
//
//    class FeatureContext implements Context
//    {
//        private $shelf;
//        private $basket;
//
//        /**
//         * Initializes context.
//         *
//         * Every scenario gets its own context instance.
//         * You can also pass arbitrary arguments to the
//         * context constructor through behat.yml.
//         */
//        public function __construct()
//        {
//            $this->shelf = new Shelf();
//            $this->basket = new Basket($this->shelf);
//        }
//
//        /**
//         * @Given /^there is a "([^"]*)", which costs (\d+) eur$/
//         */
//        public function thereIsAWhichCostsEur($product, $price)
//        {
//            $this->shelf->setProductPrice($product, floatval($price));
//        }
//
//        /**
//         * @When /^I add the "([^"]*)" to the basket$/
//         */
//        public function iAddTheToTheBasket($product)
//        {
//            $this->basket->addProduct($product);
//        }
//
//        /**
//         * @Then /^I should have (\d+) product in the basket$/
//         */
//        public function iShouldHaveProductInTheBasket($count)
//        {
//            PHPUnit_Framework_Assert::assertCount(
//                intval($count),
//                $this->basket
//            );
//        }
//
//        /**
//         * @Given /^the overall basket price should be (\d+) eur$/
//         */
//        public function theOverallBasketPriceShouldBeEur($price)
//        {
//            PHPUnit_Framework_Assert::assertSame(
//                floatval($price),
//                $this->basket->getTotalPrice()
//            );
//        }
//
//
//    }
//
//      A side note: if you're getting "Fatal error: Class 'PHPUnit_Framework_Assert' not found" when trying to run the test afterwards - try adding
//
//          require_once('path to workshop project\vendor\autoload.php');
//
//      above FeatureContext class declaration. See more at https://youtrack.jetbrains.com/issue/WI-26852
//      Another note: you would most likely face "Multiple definitions exist" warning for PHPUnit_Framework_Assert here.
//      That's because we have this class both in /vendor/ and in phpunit-5.2.5.phar. You can right click that phar file and select "Exclude phar from project"

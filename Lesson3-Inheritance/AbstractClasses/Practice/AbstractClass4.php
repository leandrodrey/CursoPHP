<?php
/**
 *  You need to save some money in order to buy a brand new car.
 *  You talk with your bank and they offer 3 products for you to accomplish your goal.
 *
 *   A) A safe box.
 *   B) A saving account.
 *   C) An investment account.
 *
 *   Other types of of products exist in the bank, and all of them (including the ones that they offered you) cost
 *   $100 a year.
 *
 *   As you are already a client they offer the saving account for free.
 *   If you choose the investment account, it will generate a +15% of interest in a year.
 *
 *   All the products have:
 *      1) a identification number (unique)
 *      2) The name of client
 *      3) The money that was deposited.
 *      4) The capability to calculate how much money you will have after expenses.
 *
 *   You need to come up with a model of the different classes involved and the UML Class Diagram
 *   (Commit it in the diagrams folder)
 */

abstract class Product {

    protected $cost;
    protected $uniqueid;
    protected $clientName;
    protected $money;
    protected $productType = ['saveBox', 'savingAccount', 'investmentAccount'];

    /**
     * Product constructor.
     */
    public function __construct (int $cost, int $uniqueid, string $clientName, int $money) {
        $this->cost = $cost;
        $this->uniqueid = $uniqueid;
        $this->clientName = $clientName;
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return mixed
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * @return mixed
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost): void
    {
        $this->cost = $cost;
    }

    /**
     * @param mixed $uniqueid
     */
    public function setUniqueid($uniqueid): void
    {
        $this->uniqueid = $uniqueid;
    }

    /**
     * @param mixed $clientName
     */
    public function setClientName($clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money): void
    {
        $this->money = $money;
    }

    public function calculateAfterExpenses () {}

}

class SavingAccount extends Product {
}

class SaveBox extends Product {
}

class InvestmentAccount extends Product {

    private $interest;

    public function __construct (int $cost, int $uniqueid, string $clientName, int $money, float $interest = 0.15) {
        parent::__construct($cost, $uniqueid, $clientName, $money);
        $this->interest = $interest;
    }

    function calculateAfterExpenses(): float {
        return parent::calculateAfterExpenses() + ($this->money * $this->interest);
    }
}

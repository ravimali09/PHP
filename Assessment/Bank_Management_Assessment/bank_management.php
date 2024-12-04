<?php
// Bank class that will manage accounts and transactions
class Bank {
    // Array to hold customers
    private $customers = [];

    // Function to create an account
    public function createAccount($customerName, $initialDeposit) {
        $accountNumber = count($this->customers) + 1;  // Account number will be auto-generated
        $this->customers[] = [
            'accountNumber' => $accountNumber,
            'customerName'  => $customerName,
            'balance'       => $initialDeposit
        ];
        echo "Account created successfully for {$customerName} with an initial deposit of {$initialDeposit}. Account Number: {$accountNumber}\n";
    }

    // Function to deposit money to an account
    public function deposit($accountNumber, $amount) {
        if ($this->isAccountValid($accountNumber)) {
            $this->customers[$accountNumber - 1]['balance'] += $amount;
            echo "Deposited {$amount} to Account Number: {$accountNumber}. New Balance: " . $this->customers[$accountNumber - 1]['balance'] . "\n";
        }
    }

    // Function to withdraw money from an account
    public function withdraw($accountNumber, $amount) {
        if ($this->isAccountValid($accountNumber)) {
            $balance = $this->customers[$accountNumber - 1]['balance'];
            if ($amount <= $balance) {
                $this->customers[$accountNumber - 1]['balance'] -= $amount;
                echo "Withdrew {$amount} from Account Number: {$accountNumber}. New Balance: " . $this->customers[$accountNumber - 1]['balance'] . "\n";
            } else {
                echo "Insufficient balance for Account Number: {$accountNumber}. Current Balance: {$balance}\n";
            }
        }
    }

    // Function to check balance of an account
    public function checkBalance($accountNumber) {
        if ($this->isAccountValid($accountNumber)) {
            echo "Balance for Account Number {$accountNumber}: " . $this->customers[$accountNumber - 1]['balance'] . "\n";
        }
    }

    // Function to display all customers
    public function displayAllCustomers() {
        echo "All Customers:\n";
        foreach ($this->customers as $customer) {
            echo "Account Number: {$customer['accountNumber']}, Name: {$customer['customerName']}, Balance: {$customer['balance']}\n";
        }
    }

    // Helper function to validate if account exists
    private function isAccountValid($accountNumber) {
        if ($accountNumber <= 0 || $accountNumber > count($this->customers)) {
            echo "Invalid Account Number: {$accountNumber}\n";
            return false;
        }
        return true;
    }
}

// Main logic to demonstrate the Bank System
$bank = new Bank();

// Displaying menu and processing user input
function displayMenu() {
    echo "\n***** Bank Management System *****\n";
    echo "1. Create Account\n";
    echo "2. Deposit\n";
    echo "3. Withdraw\n";
    echo "4. Check Balance\n";
    echo "5. View All Customers\n";
    echo "6. Exit\n";
    echo "Select an option: ";
}

$continue = true;
while ($continue) {
    displayMenu();
    $option = trim(fgets(STDIN));

    switch ($option) {
        case 1:
            echo "Enter Customer Name: ";
            $name = trim(fgets(STDIN));
            echo "Enter Initial Deposit: ";
            $deposit = (float) trim(fgets(STDIN));
            $bank->createAccount($name, $deposit);
            break;
        case 2:
            echo "Enter Account Number: ";
            $accountNumber = (int) trim(fgets(STDIN));
            echo "Enter Deposit Amount: ";
            $depositAmount = (float) trim(fgets(STDIN));
            $bank->deposit($accountNumber, $depositAmount);
            break;
        case 3:
            echo "Enter Account Number: ";
            $accountNumber = (int) trim(fgets(STDIN));
            echo "Enter Withdrawal Amount: ";
            $withdrawAmount = (float) trim(fgets(STDIN));
            $bank->withdraw($accountNumber, $withdrawAmount);
            break;
        case 4:
            echo "Enter Account Number: ";
            $accountNumber = (int) trim(fgets(STDIN));
            $bank->checkBalance($accountNumber);
            break;
        case 5:
            $bank->displayAllCustomers();
            break;
        case 6:
            echo "Exiting... Thank you for using the bank management system.\n";
            $continue = false;
            break;
        default:
            echo "Invalid option, please try again.\n";
            break;
    }
}
?>

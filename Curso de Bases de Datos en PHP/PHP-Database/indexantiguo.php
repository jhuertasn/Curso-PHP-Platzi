<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

require("vendor/autoload.php");

/*
$incomes_controller = new IncomesController();
$incomes_controller->store([
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" =>date("Y-m-d H:i:s"), // 2023-06-24 15:06:45
    "amount" =>100000,
    "description" =>"Pago de mi salario por mi arduo y muy buen trabajo"
]);
*/

/* Insertar datos
$withdrawal_controller = new WithdrawalsController();
$withdrawal_controller->store([
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" =>date("Y-m-d H:i:s"), // 2023-06-24 15:06:45
    "amount" =>50,
    "description" =>"Compré juguetitos para mis queridos y amados perros"
]);

*/

/*
$withdrawal_controller = new WithdrawalsController();

$withdrawal_controller->index();
*/

/*
$withdrawal_controller = new WithdrawalsController();

$withdrawal_controller->show(1);
*/

/*
$incomes_controller = new IncomesController();
$incomes_controller->index();
*/

$incomes_controller = new IncomesController();
$incomes_controller->destroy(1);
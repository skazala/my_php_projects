<?php

/*Bob just got a new job and needs help figuring out his budget!

He has a salary, annual expenses, monthly expenses, and weekly expenses. 
He wants to know how much of his salary he can plan to save over the course of a year.

The offer letter from his job has a salary listed before taxes of 48,150 ($grossSalary).

Where Bob lives, there is a progressive tax system. 
He pays 12% (keeps 88%) on the first 9,700,
22% (keeps 78%) on the next 29,775, and pays 24% (keeps 76%) on the remainder of his salary.
This data is stored in $incomeSegments.

Let’s begin calculating Bob’s annual salary after taxes.
*/
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

$netIncome = $incomeSegments[0][0]*$incomeSegments[0][1] + $incomeSegments[1][0]*$incomeSegments[1][1] + $incomeSegments[2][0]*$incomeSegments[2][1];

$annualIncome = $netIncome - $socialSecurity;

echo "Bob's annual income: " . $annualIncome . "\n";

$annualIncome = $annualIncome - $annualExpenses['vacations'] - $annualExpenses['carRepairs'];
echo "Bob's annual income after subtrackting annual expenses: " . $annualIncome . "\n";

$monthlyIncome = $annualIncome / 12;
echo "Bob's monthly income before deducting monthly expenses: " . $monthlyIncome . "\n";

$monthlyIncome = $monthlyIncome - $monthlyExpenses['rent'] - $monthlyExpenses['utilities'] - $monthlyExpenses['healthInsurance'];

echo "Bob's monthly income after deducting monthly expenses: " . $monthlyIncome . "\n";

$weeklyIncome = $monthlyIncome / 4.33;

echo "Bob's weekly income before deducting weekly expenses: " . $weeklyIncome . "\n";

$weeklyIncome = $weeklyIncome - $weeklyExpenses['gas'] - $weeklyExpenses['food'] - $weeklyExpenses['entertainment'];

echo "Bob's weekly income after deducting weekly expenses: " . $weeklyIncome . "\n";

echo "Amount Bob can save for the year equals: " . $weeklyIncome*52 . "\n";
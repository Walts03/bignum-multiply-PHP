<?php
require_once("mutations.php");
$testNum1 = '12345';
$testNum2 = '67890';

$testResults = array();
$totalVariations = 32;

// Run all generated functions and store results in an array
for ($i = 0; $i < $totalVariations; $i++) {
    $functionName = 'multiplyBigNumbers' . $i;
    if (function_exists($functionName)) {
        try {
            $result = $functionName($testNum1, $testNum2);
            $testResults[$functionName] = $result;
        } catch (\Throwable $e) {
            $testResults[$functionName] = 'Caught exception: ' .  $e->getMessage();
        }
    } else {
        $testResults[$functionName] = "Function $functionName not defined";
    }
}

// Display the test results
echo "Test Results: of $testNum1 * $testNum2\n";
foreach ($testResults as $functionName => $result) {
    echo "$functionName: $result\n";
}

<?php
function addBigNumbers($num1, $num2)
{
    $result = '';
    $carry = 0;
    $length1 = strlen($num1);
    $length2 = strlen($num2);
    $maxLength = max($length1, $length2);

    for ($i = 1; $i <= $maxLength; $i++) {
        $digit1 = $i <= $length1 ? (int)$num1[$length1 - $i] : 0;
        $digit2 = $i <= $length2 ? (int)$num2[$length2 - $i] : 0;

        $sum = $digit1 + $digit2 + $carry;
        $carry = (int)($sum / 10);
        $result = ($sum % 10) . $result;
    }

    if ($carry > 0) {
        $result = $carry . $result;
    }

    return $result;
}

function multiplyBigNumbers($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];

        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }

        $result[$i] += $carry;
    }

    $resultStr = implode('', $result);

    // Remove leading zeros
    $resultStr = ltrim($resultStr, '0');

    if ($resultStr === '') {
        return '0';
    }

    return $resultStr;
}

// Example usage:
$num1 = "123456789";
$num2 = "987654321";

$sum = addBigNumbers($num1, $num2);
$product = multiplyBigNumbers($num1, $num2);

echo $sum . "\n";    // Output: 1111111110
echo $product; // Output: 121932631112635269
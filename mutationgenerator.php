<?php
$operators1 = ['*', '/', '+', '-'];
$operators2 = ['+', '-', '*', '/'];
$operators3 = ['+', '-'];
// Original multiplyBigNumbers function
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
echo '<?php' . "\n";
echo 'function addBigNumbers($num1, $num2) {' . "\n";
echo "\t" . '$result = \'\';' . "\n";
echo "\t" . '$carry = 0;' . "\n";
echo "\t" . '$length1 = strlen($num1);' . "\n";
echo "\t" . '$length2 = strlen($num2);' . "\n";
echo "\t" . '$maxLength = max($length1, $length2);' . "\n";
echo "\n";
echo "\t" . 'for ($i = 1; $i <= $maxLength; $i++) {' . "\n";
echo "\t\t" . '$digit1 = $i <= $length1 ? (int)$num1[$length1 - $i] : 0;' . "\n";
echo "\t\t" . '$digit2 = $i <= $length2 ? (int)$num2[$length2 - $i] : 0;' . "\n";
echo "\t\t" . '$sum = $digit1 + $digit2 + $carry;' . "\n";
echo "\t\t" . '$carry = (int)($sum / 10);' . "\n";
echo "\t\t" . '$result = ($sum % 10) . $result;' . "\n";
echo "\t" . '}' . "\n";
echo "\n";
echo "\t" . 'if ($carry > 0) {' . "\n";
echo "\t\t" . '$result = $carry . $result;' . "\n";
echo "\t" . '}' . "\n";
echo "\n";
echo "\t" . 'return $result;' . "\n";
echo '}' . "\n";
echo "\n";
$i = 0;
foreach ($operators1 as $op1) {
    foreach ($operators2 as $op2) {
        foreach ($operators3 as $op3) {
            echo 'function multiplyBigNumbers' . $i . '($num1, $num2) {' . "\n";
            echo "\t" . '$len1 = strlen($num1);' . "\n";
            echo "\t" . '$len2 = strlen($num2);' . "\n";
            echo "\t" . '$result = array_fill(0, $len1 + $len2, 0);' . "\n";
            echo "\n";
            echo "\t" . 'for ($i = $len1 - 1; $i >= 0; $i--) {' . "\n";
            echo "\t\t" . '$carry = 0;' . "\n";
            echo "\t\t" . '$digit1 = (int)$num1[$i];' . "\n";

            echo "\t\t" . 'for ($j = $len2 - 1; $j >= 0; $j--) {' . "\n";
            echo "\t\t\t" . '$digit2 = (int)$num2[$j];' . "\n";
            echo "\t\t\t" . '$product = $digit1 ' . $op1 . ' $digit2 ' . $op2 . ' $result[$i + $j + 1] ' . $op3 . ' $carry;' . "\n";
            echo "\t\t\t" . '$carry = (int)floor($product / 10);' . "\n";
            echo "\t\t\t" . '$result[$i + $j + 1] = $product % 10;' . "\n";
            echo "\t\t" . '}' . "\n";
            echo "\t\t" . '$result[$i] += $carry;' . "\n";
            echo "\t\t" . '}' . "\n";
            echo "\t\t" . '$resultStr = implode(\'\', $result);' . "\n";
            echo "\t\t" . '$resultStr = ltrim($resultStr, \'0\');' . "\n";
            echo "\t\t" . 'if ($resultStr === \'\') {' . "\n";
            echo "\t\t\t" . 'return \'0\';' . "\n";
            echo "\t\t" . '}' . "\n";
            echo "\t\t" . 'return $resultStr;' . "\n";
            echo "\t" . '}' . "\n";
            ++$i;
        }
    }
}

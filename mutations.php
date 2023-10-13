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

function multiplyBigNumbers0($num1, $num2)
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
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers1($num1, $num2)
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
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers2($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers3($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers4($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers5($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers6($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers7($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 * $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers8($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers9($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers10($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers11($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers12($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers13($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers14($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers15($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 / $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers16($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers17($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers18($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers19($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers20($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers21($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers22($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers23($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 + $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers24($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers25($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 + $result[$i + $j + 1] + $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers26($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers27($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 - $result[$i + $j + 1] - $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers28($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers29($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 * $result[$i + $j + 1] * $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers30($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}
function multiplyBigNumbers31($num1, $num2)
{
    $len1 = strlen($num1);
    $len2 = strlen($num2);
    $result = array_fill(0, $len1 + $len2, 0);

    for ($i = $len1 - 1; $i >= 0; $i--) {
        $carry = 0;
        $digit1 = (int)$num1[$i];
        for ($j = $len2 - 1; $j >= 0; $j--) {
            $digit2 = (int)$num2[$j];
            $product = $digit1 - $digit2 / $result[$i + $j + 1] / $carry;
            $carry = (int)floor($product / 10);
            $result[$i + $j + 1] = $product % 10;
        }
        $result[$i] += $carry;
    }
    $resultStr = implode('', $result);
    $resultStr = ltrim($resultStr, '0');
    if ($resultStr === '') {
        return '0';
    }
    return $resultStr;
}

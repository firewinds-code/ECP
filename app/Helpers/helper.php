<?php

function generateSambhagOptions()
{
    $sambhag = [
        'Ajmer' => 'Ajmer',
        'Bharatpur' => 'Bharatpur',
        'Bikaner' => 'Bikaner',
        'Jaipur' => 'Jaipur',
        'Jodhpur' => 'Jodhpur',
        'Kota' => 'Kota',
        'Udaipur' => 'Udaipur',

    ];
    $options = '';
    foreach ($sambhag as $value => $label) {
        $options .= "<option value='$value'>$label</option>";
    }
    return $options;
}

function generateCallingOptions()
{
    $calling_status = [
        'Connected' => 'Connected',
        'Not Connected' => 'Not Connected',

    ];
    $options = '';
    foreach ($calling_status as $value => $label) {
        $options .= "<option value='$value'>$label</option>";
    }
    return $options;
}
function generateQuotationOptions()
{
    $years = [
        '1 Year' => '1 Year',
        '2 Years' => '2 Years',
        '3 Years' => '3 Years',

    ];
    $options = '';
    foreach ($years as $value => $label) {
        $options .= "<option value='$value'>$label</option>";
    }
    return $options;
}
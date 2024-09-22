<?php
// TEXT RANDOMIZER
function generateRandomRotation() {
    $value = 45;
    $deg = rand(-$value, $value);
    return $deg;
}
function generateRandomVerticalOffset() {
    $value = 1;
    $height = rand(-$value, $value);
    return $height;
}
function generateRandomHorizontalOffset() {
    $value = 0.5;
    $width = rand(-$value, $value);
    return $width;
}
function generateRandomSkew() {
    $value = 20;
    $skew = rand(-$value, $value);
    return $skew;
}
function generateRandomFontWeight() {
    $value_min = 0;
    $value_max = 600;
    $font_weight = rand($value_min, $value_max);
    return $font_weight;
}
function generateRandomScale() {
    $value_min = 1;
    $value_max = 1.3;
    $scale = rand($value_min, $value_max);
    return $scale;
}
function generateRandomOpacity() {
    $value_min = 30;
    $value_max = 100;
    $opacity = rand($value_min, $value_max);
    return $opacity;
}
function generateRandomFontFamily() {
    $value_min = 0;
    $value_max = 9;
    $num = rand($value_min, $value_max);
    $fonts = [
        "'Courier New', Courier, monospace",
        "'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif",
        "'Times New Roman', Times, serif",
        "Arial, Helvetica, sans-serif",
        "Verdana, Geneva, Tahoma, sans-serif",
        "'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif",
        "'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif",
        "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
        "'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
        "Cambria, Cochin, Georgia, Times, 'Times New Roman', serif",
    ];
    return $fonts[$num];
}
function generateRandomBlur() {
    $value_min = 0;
    $value_max = 1;
    $blur = rand($value_min, $value_max);
    return $blur;
}
// LINE RANDOMIZER
function generateRandom_LineCount() {
    $value_min = 3;
    $value_max = 10;
    $line_count = rand($value_min, $value_max);
    return $line_count;
}
function generateRandomHorizontalOffset_line() {
    $value = 80;
    $width = rand(-$value, $value);
    return $width;
}
function generateRandomRotation_line() {
    $value = 90;
    $deg = rand(-$value, $value);
    return $deg;
}
function generateRandomOpcity_line() {
    $value_min = 2;
    $value_max = 9;
    $opacity = rand($value_min, $value_max);
    return $opacity;
}
function generateRandomWidth_line() {
    $value_min = 1.5;
    $value_max = 2.5;
    $width_line = rand($value_min, $value_max);
    return $width_line;
}
// DOT RANDOMIZER
function generateRandom_DotCount() {
    $value_min = 100;
    $value_max = 1000;
    $line_count = rand($value_min, $value_max);
    return $line_count;
}
function generateRandomLeftOffset_dot() {
    $value_min = 0;
    $value_max = 195;
    $left = rand($value_min, $value_max);
    return $left;
}
function generateRandomTopOffset_dot() {
    $value_min = 0;
    $value_max = 75;
    $top = rand($value_min, $value_max);
    return $top;
}
function generateRandomSize_dot() {
    $value_min = 1;
    $value_max = 5;
    $size = rand($value_min, $value_max);
    return $size;
}
function generateRandomOpacity_dot() {
    $value_min = 2;
    $value_max = 9;
    $opacity = rand($value_min, $value_max);
    return $opacity;
}
function generateRandomBlur_dot() {
    $value_min = 0.5;
    $value_max = 1;
    $blur = rand($value_min, $value_max);
    return $blur;
}
?>
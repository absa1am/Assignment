<?php

const pi = 3.1416;

$radius = 9;
$perimeter = 2 * pi * $radius;
$area = pi * $radius * $radius;
// Circle doesn't have volume, sphere has volume
// Volume of a shphere is (4/3) * pi * r^3

echo "Perimeter: ", $perimeter, " m\n";
echo "Area: ", $area, " sq. m\n";

<!-- product -->
@php
$products = [
    ['image' => 'img-1.png', 'title' => 'LOREM IPSUM 1', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
    ['image' => 'img-2.png', 'title' => 'LOREM IPSUM 2', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
    ['image' => 'img-3.png', 'title' => 'LOREM IPSUM 3', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
    ['image' => 'img-4.png', 'title' => 'LOREM IPSUM 4', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, labore incidunt?'],
];
@endphp
<x-produck :products="$products" />
<!-- end product -->
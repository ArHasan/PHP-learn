<?php 

$foods=[
    'vegetables'=> explode(', ', 'brinjal, brocolli, carrot, capsicam'),
    'fruits'=> explode(', ', 'orange, banana, apple'),
    'drinks'=> explode(', ', 'water, milk, tea'),
];

// print_r($foods);
array_push($foods['drinks'],'orange juice');
// print_r($foods);

// echo $foods['vegetables'][3];

$sample = [
    'test'=> [
        'test-again'=>[
            'Ant',
            'Bat',
            'Cap',
            'Dog',
        ]
    ],
        ];
echo $sample['test']['test-again'][2];

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[3,2,6]],    
];
print_r($sample2);
echo $sample2[3][3][1];
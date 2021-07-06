<?php

// 0) Do you want to test your luck?

// 1) Do you want to spend you luck pionts to increase them? (yes=1, no=0)

// money to health
// 2) for 5 mn you can buy vitamines and get +10 health (yes=1, no=0)
//    for 15 mn you can buy Covid vaccinaion and get +3 health (yes=1, no=0)
//    for 35 mn you can go to SPA and get +100 to health  (yes=1, no=0)

// money to luck
// 3)  for 20 mn you can buy ring of luck from shaman. it gives you +2 luck (yes=1, no=0)
//     for 30 mn you can buy from whitch deseases protection for 1 year and get +3 luck  (yes=1, no=0)
//     for 50 mn you can get bless from tibetian monk. it gives you +5 luck (yes=1, no=0)

// health to money
// 4)  for 10 health you can become a blood donor and get +20 mn (yes=1, no=0)
//     for 30 health you can work as a night secirity guard and get +60 mn (yes=1, no=0)
//     for 40 health you can work as loader in a grocery store and get +75 mn (yes=1, no=0)

// health to luck
// 5)  for 12 health you can get drunk with your neighbour and get +5 luck (yes=1, no=0)
//     for 20 health you can eat amanita and get +8 luck (yes=1, no=0)
//     for 30 health you can smoke weed and get +12 luck (yes=1, no=0)

$events = [

    "mth" => [
        0 => [
            "text" => "for 5 mn you can buy vitamines and get +10 health",
            "m" => -5,
            "h" => 10
        ],
        1 => [
            "text" => "for 15 mn you can buy Covid vaccinaion and get +3 health",
            "m" => -15,
            "h" => 3
        ],
        2 => [
            "text" => "for 35 mn you can go to SPA and get +20 to health",
            "m" => -35,
            "h" => 20
        ]
    ],

    "mtl" => [
         0 => [
                "text" => "for 20 mn you can buy ring of luck from shaman. it gives you +2 luck",
                "m" => -20,
                "l" => 2
        ],
        1 => [
                "text" => "for 30 mn you can buy from whitch deseases protection for 1 year and get +3 luck",
                "m" => -30,
                "l" => 3
        ],
            
        2 => [
                "text" => "for 50 mn you can get bless from tibetian monk. it gives you +5 luck",
                "m" => -50,
                "l" => 5
                ]       
        ],
    
    "htm" => [
        0 => [
                "text" => "for 10 health you can become a blood donor and get +20 mn",
                "h" => -10,
                "m" => 20
            ],
            
        1 => [
                "text" => "for 30 health you can work as a night secirity guard and get +60 mn",
                "h" => -30,
                "m" => 60
            ],
                   
        2 => [
                "text" => "for 40 health you can work as loader in a grocery store and get +75 mn",
                "h" => -40,
                "m" => 75
                ]
        ],
    "htl" => [
        0 => [
            "text" => "for 12 health you can get drunk with your neighbour and get +5 luck",
            "h" => -12,
            "l" => 5
        ],
        
        1 => [
            "text" => "for 20 health you can eat amanita and get +8 luck",
            "h" => -20,
            "l" => 8
        ],
        
        2 => [
            "text" => "for 30 health you can smoke weed and get +12 luck",
            "h" => -30,
            "l" => 12
        ]          
    ]
];
print_r($events);



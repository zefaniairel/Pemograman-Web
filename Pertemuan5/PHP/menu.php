<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai" 
                    ],
                    [
                        "nama" => "Gunung" 
                    ]
                ]
            ],

            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama"  => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

// function tampilkanMenuBertingkat (array $menu) {
//     echo "<ul>";
//     foreach ($menu as $key => $item) {
//         echo "<li> {$item ['nama']} </li>";
//     }
//     echo "</ul>";
// }

function tampilkanMenuBertingkat(array $menu)
{
    echo "<ul>"; // <ul> dan <li> untuk menampilkan daftar menu dan submenu dalam bentuk yg sesuai
    foreach ($menu as $key => $item) {
        echo "<li>";
        if (isset($item['nama'])) {
            echo $item['nama'];
        }
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat($menu) // untuk menampilkan seluruh menu dan submenu dalam hierarki yg sesusai
?>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getInventory()
    {
        return [
            'canon-90d' => [
                'id' => 'canon-90d',
                'name' => 'Canon EOS 90D',
                'category' => 'Kamera & Fotografi',
                'category_slug' => 'kamera',
                'price' => 75000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/canon-90d.jpg',
                'featured' => true,
                'description' => 'Kamera DSLR dengan resolusi tinggi untuk dokumentasi kegiatan.',
                'specs' => [
                    'Sensor: 32.5MP APS-C CMOS Sensor',
                    'Autofokus: Dual Pixel CMOS AF 45 Cross-Type',
                    'Video: 4K 30p & Full HD 120p high-speed',
                    'Layar: 3.0" Vari-Angle Touchscreen LCD'
                ],
                'includes' => [
                    '1x Bodi Kamera Canon EOS 90D',
                    '1x Lensa Canon EF-S 18-135mm IS USM',
                    '2x Baterai Original Canon LP-E6N',
                    '1x Dual Fast Charger',
                    '1x SanDisk Extreme Pro 64GB',
                    '1x Tas Kamera Padded'
                ]
            ],
            'thinkpad-t14' => [
                'id' => 'thinkpad-t14',
                'name' => 'Lenovo ThinkPad T14',
                'category' => 'Komputer & IT',
                'category_slug' => 'komputer',
                'price' => 90000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/thinkpad-t14.jpg',
                'featured' => true,
                'description' => 'Laptop untuk kebutuhan presentasi dan pekerjaan.',
                'specs' => [
                    'Prosesor: Intel Core i7 11th Gen Turbo 4.7GHz',
                    'Memori: 16GB DDR4 RAM Dual Channel',
                    'Penyimpanan: 512GB M.2 NVMe PCIe SSD',
                    'Layar: 14.0" Full HD IPS Anti-Glare'
                ],
                'includes' => [
                    '1x Unit Laptop Lenovo ThinkPad T14',
                    '1x Adaptor Fast Charger 65W Type-C',
                    '1x Mouse Wireless Logitech',
                    '1x Tas Laptop Padded'
                ]
            ],
            'epson-e500' => [
                'id' => 'epson-e500',
                'name' => 'Epson EB-E500',
                'category' => 'Multimedia & Presentasi',
                'category_slug' => 'multimedia',
                'price' => 50000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/epson-e500.jpg',
                'featured' => true,
                'description' => 'Proyektor untuk presentasi dan pemutaran video.',
                'specs' => [
                    'Kecerahan: 3300 ANSI Lumens',
                    'Resolusi: XGA (1024 x 768) native',
                    'Teknologi: 3LCD 3-Chip System',
                    'Rasio Kontras: 15.000:1'
                ],
                'includes' => [
                    '1x Unit Proyektor Epson EB-E500',
                    '1x Kabel Power AC 5 Meter',
                    '1x Kabel HDMI 10 Meter',
                    '1x Remote Control Wireless',
                    '1x Tas Jinjing Proyektor'
                ]
            ],
            'yamaha-dbr10' => [
                'id' => 'yamaha-dbr10',
                'name' => 'Yamaha DBR10 + Mixer',
                'category' => 'Audio & Sound System',
                'category_slug' => 'audio',
                'price' => 80000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/yamaha-dbr10.svg',
                'featured' => true,
                'description' => 'Speaker aktif dengan kualitas suara jernih.',
                'specs' => [
                    'Output Power: 700W Dynamic Class-D',
                    'Driver: 10" Cone Woofer + 1" Voice Coil',
                    'Mixer: Console 4-Channel dengan input Bluetooth & XLR',
                    'Coverage: Sangat ideal untuk aula dan seminar indoor'
                ],
                'includes' => [
                    '2x Speaker Aktif Yamaha DBR10',
                    '1x Mini Audio Mixer Console',
                    '2x Stand Tripod Besi',
                    'Kabel Power & Audio Komplit'
                ]
            ],
            'sony-a6400' => [
                'id' => 'sony-a6400',
                'name' => 'Sony A6400',
                'category' => 'Kamera & Fotografi',
                'category_slug' => 'kamera',
                'price' => 80000,
                'status' => 'Sedang Disewa',
                'status_type' => 'rented',
                'image' => '/images/sony-a6400.svg',
                'featured' => false,
                'description' => 'Mirrorless camera untuk foto dan video berkualitas tinggi.',
                'specs' => [
                    'Sensor: 24.2MP APS-C Exmor CMOS',
                    'Autofokus: Real-Time Eye AF & Real-Time Tracking',
                    'Video: 4K HDR 30p no pixel binning',
                    'Layar: 180° Tiltable Touch LCD (Selfie / Vlogging)'
                ],
                'includes' => [
                    '1x Bodi Sony Alpha 6400',
                    '1x Lensa Sony 16-50mm f/3.5-5.6 OSS',
                    '2x Baterai NP-FW50',
                    '1x SD Card SanDisk 64GB V30',
                    '1x Tas Kamera'
                ]
            ],
            'tripod-manfrotto' => [
                'id' => 'tripod-manfrotto',
                'name' => 'Tripod Manfrotto',
                'category' => 'Kamera & Fotografi',
                'category_slug' => 'kamera',
                'price' => 25000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/tripod-manfrotto.svg',
                'featured' => false,
                'description' => 'Tripod profesional dan stabil untuk berbagai kebutuhan.',
                'specs' => [
                    'Bahan: Aluminium Alloy kokoh & ringan',
                    'Head: Fluid Video Pan Head 2-Way halus',
                    'Maksimal Beban: Hingga 5 kg',
                    'Tinggi Maksimal: 165 cm'
                ],
                'includes' => [
                    '1x Tripod Manfrotto Heavy Duty',
                    '1x Quick Release Plate',
                    '1x Pan Handle Grip',
                    '1x Tas Jinjing Tripod'
                ]
            ],
            'rode-wireless' => [
                'id' => 'rode-wireless',
                'name' => 'RODE Wireless Go II',
                'category' => 'Audio & Sound System',
                'category_slug' => 'audio',
                'price' => 40000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/rode-wireless.svg',
                'featured' => false,
                'description' => 'Microphone wireless untuk wawancara dan konten video.',
                'specs' => [
                    'Sistem: Dual Channel Wireless Microphone (2 TX + 1 RX)',
                    'Jangkauan: Hingga 200 meter transmisi 2.4GHz',
                    'Onboard Recording: Lebih dari 40 jam memori internal',
                    'Baterai: Baterai lithium-ion internal hingga 7 jam'
                ],
                'includes' => [
                    '2x Transmitter Clip-on RODE',
                    '1x Receiver RODE',
                    '3x Kabel SC5 3.5mm TRS & USB-C',
                    '2x Furry Windshield Bulu',
                    '1x Pouch Case'
                ]
            ],
            'tenda-lipat-3x3' => [
                'id' => 'tenda-lipat-3x3',
                'name' => 'Tenda Lipat 3x3 m',
                'category' => 'Event & Kegiatan',
                'category_slug' => 'event',
                'price' => 100000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/tent-canopy.jpg',
                'featured' => false,
                'description' => 'Tenda untuk kegiatan outdoor dan acara kampus.',
                'specs' => [
                    'Ukuran: 3 x 3 Meter',
                    'Rangka: Besi hollow powder-coated tahan cuaca',
                    'Bahan Atap: Parasut Oxford D600 waterproof & anti-UV',
                    'Sistem: Buka tutup cepat dalam 2 menit'
                ],
                'includes' => [
                    '1x Rangka Tenda Lipat 3x3',
                    '1x Kain Terpal Atap Tahan Air',
                    '4x Pasak Tanah & Tali Pengikat',
                    '1x Cover Tas Rangka'
                ]
            ],
            'lighting-set' => [
                'id' => 'lighting-set',
                'name' => 'Lighting Set',
                'category' => 'Event & Kegiatan',
                'category_slug' => 'event',
                'price' => 60000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/lighting-set.svg',
                'featured' => false,
                'description' => 'Paket lampu LED untuk fotografi dan videografi.',
                'specs' => [
                    'Tipe: Dual Bi-Color LED Panel Lights',
                    'Temperatur Warna: 3200K - 5600K stepless dimmer',
                    'CRI: 96+ untuk akurasi warna natural',
                    'Stand: 2x Light Stand Aluminium tinggi 2 meter'
                ],
                'includes' => [
                    '2x LED Panel Light + Barn Doors',
                    '2x Light Stand Kokoh 2M',
                    '2x Power Adaptor AC & Kabel Panjang',
                    '1x Tas Padded Jinjing'
                ]
            ],
            'tv-55' => [
                'id' => 'tv-55',
                'name' => 'LED TV 55 inch',
                'category' => 'Multimedia & Presentasi',
                'category_slug' => 'multimedia',
                'price' => 150000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/tv-55.svg',
                'featured' => false,
                'description' => 'Layar besar untuk presentasi unit acara.',
                'specs' => [
                    'Ukuran Layar: 55 Inch Ultra HD 4K',
                    'Panel: IPS Widescreen 178° viewing angle',
                    'Input Port: 3x HDMI, 2x USB, LAN, Audio Out',
                    'Fitur: Wireless Screen Mirroring dari laptop/smartphone'
                ],
                'includes' => [
                    '1x Unit LED TV 55" 4K',
                    '1x Desktop Base Stand / Standing Bracket',
                    '1x Kabel HDMI 5M & Kabel Power 5M',
                    '1x Remote Control Smart TV'
                ]
            ],
            'printer-a3' => [
                'id' => 'printer-a3',
                'name' => 'Printer A3',
                'category' => 'Lainnya',
                'category_slug' => 'lainnya',
                'price' => 30000,
                'status' => 'Dalam Perawatan',
                'status_type' => 'maintenance',
                'image' => '/images/printer-a3.svg',
                'featured' => false,
                'description' => 'Printer untuk kebutuhan administrasi kegiatan.',
                'specs' => [
                    'Format Kertas: Hingga A3+ borderless',
                    'Fungsi: Print, Scan, Copy (All-in-One)',
                    'Koneksi: USB & Wi-Fi Direct',
                    'Tinta: EcoTank kapasitas cetak tinggi'
                ],
                'includes' => [
                    '1x Unit Printer Multifungsi A3',
                    '1x Kabel USB Data Printer',
                    '1x Kabel Power AC',
                    'Kondisi Tinta Full Siap Cetak'
                ]
            ],
            'doc-camera' => [
                'id' => 'doc-camera',
                'name' => 'Document Camera',
                'category' => 'Multimedia & Presentasi',
                'category_slug' => 'multimedia',
                'price' => 50000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/doc-camera.svg',
                'featured' => false,
                'description' => 'Kamera dokumen untuk presentasi dan pembelajaran.',
                'specs' => [
                    'Sensor: 8MP Ultra High Definition',
                    'Pencahayaan: Built-in LED Multi-Level Illumination',
                    'Struktur: Multi-Joint Articulated Arm fleksibel',
                    'Koneksi: Plug-and-play USB ke PC / HDMI ke Proyektor'
                ],
                'includes' => [
                    '1x Unit Document Visualizer Camera',
                    '1x Kabel USB Type-A to Type-B',
                    '1x Kabel HDMI 3 Meter',
                    '1x Anti-Glare Scanning Sheet Pad'
                ]
            ]
        ];
    }

    private function getSidebarCategories()
    {
        return [
            ['name' => 'Semua Kategori', 'slug' => 'all', 'count' => 86, 'icon' => 'all'],
            ['name' => 'Kamera & Fotografi', 'slug' => 'kamera', 'count' => 12, 'icon' => 'camera'],
            ['name' => 'Audio & Sound System', 'slug' => 'audio', 'count' => 10, 'icon' => 'audio'],
            ['name' => 'Multimedia & Presentasi', 'slug' => 'multimedia', 'count' => 15, 'icon' => 'multimedia'],
            ['name' => 'Komputer & IT', 'slug' => 'komputer', 'count' => 8, 'icon' => 'komputer'],
            ['name' => 'Event & Kegiatan', 'slug' => 'event', 'count' => 20, 'icon' => 'event'],
            ['name' => 'Lainnya', 'slug' => 'lainnya', 'count' => 11, 'icon' => 'lainnya'],
        ];
    }

    private function getCategories()
    {
        return [
            [
                'name' => 'Kamera & Foto-Fotografi',
                'slug' => 'kamera',
                'count' => '12+ peralatan',
                'image' => '/images/canon-90d.jpg'
            ],
            [
                'name' => 'Audio & Sound System',
                'slug' => 'audio',
                'count' => '10+ peralatan',
                'image' => '/images/yamaha-dbr10.svg'
            ],
            [
                'name' => 'Multimedia & Presentasi',
                'slug' => 'multimedia',
                'count' => '15+ peralatan',
                'image' => '/images/epson-e500.jpg'
            ],
            [
                'name' => 'Komputer & IT',
                'slug' => 'komputer',
                'count' => '8+ peralatan',
                'image' => '/images/thinkpad-t14.jpg'
            ],
            [
                'name' => 'Event & Kegiatan',
                'slug' => 'event',
                'count' => '20+ peralatan',
                'image' => '/images/tent-canopy.jpg'
            ],
            [
                'name' => 'Lainnya',
                'slug' => 'lainnya',
                'count' => '11+ peralatan',
                'image' => '/images/toolbox.svg'
            ],
        ];
    }

    public function beranda()
    {
        $allInventory = $this->getInventory();
        // Featured 4 items matching mockup
        $featuredKeys = ['canon-90d', 'epson-e500', 'yamaha-dbr10', 'thinkpad-t14'];
        $featured = array_intersect_key($allInventory, array_flip($featuredKeys));
        $categories = $this->getCategories();

        return view('pages.beranda', [
            'featured' => $featured,
            'categories' => $categories,
            'inventory' => $allInventory
        ]);
    }

    public function katalog(Request $request)
    {
        $allInventory = $this->getInventory();
        $category = $request->query('kategori', 'all');
        $search = $request->query('cari');
        $statusFilter = $request->query('status'); // 'available', 'rented', 'maintenance'
        $maxPrice = $request->query('max_price');
        $sort = $request->query('sort', 'terbaru');

        $filtered = $allInventory;

        // Filter by category
        if ($category && $category !== 'all') {
            $filtered = array_filter($filtered, fn($item) => $item['category_slug'] === $category);
        }

        // Filter by search query
        if ($search) {
            $s = strtolower(trim($search));
            $filtered = array_filter($filtered, function ($item) use ($s) {
                return str_contains(strtolower($item['name']), $s) ||
                       str_contains(strtolower($item['category']), $s) ||
                       str_contains(strtolower($item['description']), $s);
            });
        }

        // Filter by status if selected
        if ($statusFilter && $statusFilter !== 'all') {
            $filtered = array_filter($filtered, fn($item) => $item['status_type'] === $statusFilter);
        }

        // Filter by price
        if ($maxPrice && is_numeric($maxPrice)) {
            $filtered = array_filter($filtered, fn($item) => $item['price'] <= (int)$maxPrice);
        }

        // Sort items
        if ($sort === 'termurah') {
            uasort($filtered, fn($a, $b) => $a['price'] <=> $b['price']);
        } elseif ($sort === 'termahal') {
            uasort($filtered, fn($a, $b) => $b['price'] <=> $a['price']);
        } elseif ($sort === 'a-z') {
            uasort($filtered, fn($a, $b) => strcmp($a['name'], $b['name']));
        }

        return view('pages.katalog', [
            'inventory' => $filtered,
            'allInventory' => $allInventory,
            'sidebarCategories' => $this->getSidebarCategories(),
            'currentCategory' => $category,
            'searchQuery' => $search,
            'currentStatus' => $statusFilter,
            'currentSort' => $sort,
            'totalCount' => count($allInventory),
            'displayedCount' => count($filtered)
        ]);
    }

    public function katalogDetail($id)
    {
        $allInventory = $this->getInventory();

        if (!isset($allInventory[$id])) {
            abort(404, 'Peralatan tidak ditemukan.');
        }

        $item = $allInventory[$id];
        $related = array_filter($allInventory, fn($g) => $g['id'] !== $id);

        return view('pages.detail', [
            'item' => $item,
            'related' => array_slice($related, 0, 3)
        ]);
    }

    public function caraMenyewa()
    {
        return view('pages.cara-menyewa');
    }

    public function kebijakan()
    {
        return view('pages.kebijakan');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }
}

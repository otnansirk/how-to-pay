<?php

namespace Krisn\HowToPay\Data;

class PaymentData
{
    public static function get()
    {
        return [
            [
                "id"    => "kartuprakerja",
                "name"  => "Kartu Prakerja",
                "type"  => "kartuprakerja",
                "label" => "Kartu Prakerja",
                "method"=> "kartu_prakerja",
                "icon"  => "kartuprakerja",
                "instructions" => []
            ],
            [
                "id"    => "bca",
                "name"  => "BCA Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "bca",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Transaksi Lainnya</strong>.',
                            'Pilih <strong>Transfer</strong>.',
                            'Pilih <strong>Ke Rek BCA Virtual Account</strong>.',
                            'Masukkan <strong>Nomor Rekening</strong> pembayaran (11 digit) Anda lalu tekan <strong>Benar</strong>.',
                            'Masukkan jumlah tagihan yang akan anda bayar.',
                            'Pada halaman konfirmasi transfer akan muncul detail pembayaran Anda. Jika informasi telah sesuai tekan <strong>Ya</strong>.',
                        ]
                    ],
                    [
                        "label" => "Transfer via klikBCA",
                        "items" => [
                            'Pilih menu <strong>Transfer Dana</strong>.',
                            'Pilih <strong>Transfer ke BCA Virtual Account</strong>.',
                            '<strong>Masukkan nomor BCA Virtual Account</strong>, atau <strong>pilih Dari Daftar Transfer</strong>.',
                            'Jumlah yang akan ditransfer, nomor rekening dan nama merchant akan muncul di halaman konfirmasi pembayaran, jika informasi benar klik <strong>Lanjutkan</strong>.',
                            'Ambil <strong>BCA Token</strong> Anda dan masukkan KEYBCA Response <strong>APPLI 1</strong> dan Klik <strong>Submit</strong>.',
                            'Transaksi Anda selesai.',
                        ]
                    ],
                    [
                        "label" => "Transfer via Mobile Banking",
                        "items" => [
                            'Lakukan log in pada aplikasi <strong>BCA Mobile</strong>.',
                            'Pilih menu <strong>m-BCA</strong>, kemudian masukkan <strong>kode akses m-BCA</strong>.',
                            'Pilih <strong>m-Transfer > BCA Virtual Account</strong>.',
                            'Pilih dari <strong>Daftar Transfer</strong>, atau masukkan <strong>Nomor Virtual Account</strong> tujuan.',
                            'Masukkan <strong>jumlah yang ingin dibayarkan</strong>.',
                            'Masukkan <strong>pin m-BCA</strong>.',
                            'Pembayaran selesai. Simpan notifikasi yang muncul sebagai bukti pembayaran.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "mandiri",
                "name"  => "Mandiri Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "mandiri",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Bayar/Beli</strong>.',
                            'Pilih <strong>Lainnya</strong>.',
                            'Pilih <strong>Multi Payment</strong>.',
                            'Masukkan 70012 (kode perusahaan Midtrans) lalu tekan <strong>Benar</strong>.',
                            'Masukkan <strong>Kode Pembayaran</strong> Anda lalu tekan <strong>Benar</strong>.',
                            'Pada halaman konfirmasi akan muncul detail pembayaran Anda. Jika informasi telah sesuai tekan <strong>Ya</strong>.',
                        ]
                    ],
                    [
                        "label" => "Transfer via Internet Banking",
                        "items" => [
                            'Login ke Internet Banking Mandiri <a href=""https" =>//ibank.bankmandiri.co.id/">("https" =>//ibank.bankmandiri.co.id/)</a>.',
                            'Pada menu utama, pilih <strong>Bayar</strong>, lalu pilih <strong>Multi Payment</strong>.',
                            'Pilih akun Anda di <strong>Dari Rekening</strong>, kemudian di Penyedia Jasa pilih <strong>Midtrans</strong>.',
                            'Masukkan <strong>Kode Pembayaran</strong> Anda dan klik <strong>Lanjutkan</strong>.',
                            'Konfirmasi pembayaran Anda menggunakan Mandiri Token.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "bri",
                "name"  => "BRI Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "bri",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pilih menu utama, pilih <strong>Transaksi Lain</strong>.',
                            'Pilih <strong>Pembayaran</strong>.',
                            'Pilih <strong>Lainnya</strong>.',
                            'Pilih <strong>BRIVA</strong>.',
                            'Masukkan <strong>Nomor BRIVA</strong> pelanggan dan pilih <strong>Benar</strong>.',
                            'Jumlah pembayaran, nomor BRIVA dan nama merchant akan muncul pada halaman konfirmasi pembayaran. Jika informasi yang dicantumkan benar, pilih <strong>Ya</strong>.',
                            'Pembayaran telah selesai. Simpan bukti pembayaran Anda.',
                        ]
                    ],
                    [
                        "label" => "Transfer via Internet Banking",
                        "items" => [
                            'Masuk pada <strong>Internet Banking BRI</strong>.',
                            'Pilih menu <strong>Pembayaran & Pembelian</strong>.',
                            'Pilih sub menu <strong>BRIVA</strong>.',
                            'Masukkan <strong>Nomor BRIVA</strong>.',
                            'Jumlah pembayaran, nomor pembayaran, dan nama merchant akan muncul pada halaman konfirmasi pembayaran. Jika informasi yang dicantumkan benar, pilih <strong>Kirim</strong>.',
                            'Masukkan <strong>password</strong> dan <strong>mToken</strong>, pilih <strong>Kirim</strong>.',
                            'Pembayaran telah selesai. Untuk mencetak bukti transaksi, pilih <strong>Cetak</strong>.',
                        ]
                    ],
                    [
                        "label" => "Transfer via Mobile Banking",
                        "items" => [
                            'Masuk ke dalam aplikasi <strong>BRI Mobile</strong>, pilih <strong>Mobile Banking BRI</strong>.',
                            'Pilih <strong>Pembayaran</strong>, lalu pilih <strong>BRIVA</strong>.',
                            'Masukkan <strong>nomor BRIVA</strong>.',
                            'Jumlah pembayaran, nomor pembayaran, dan nama merchant akan muncul pada halaman konfirmasi pembayaran. Jika informasi yang dicantumkan benar, pilih <strong>Continue</strong>.',
                            'Masukkan <strong>Mobile Banking BRI PIN</strong>, pilih <strong>Ok.</strong>.',
                            'Pembayaran telah selesai. Simpan notifikasi sebagai bukti pembayaran.',
                        ]
                    ]
                ]
            ],
            [
                "id"    => "bni",
                "name"  => "BNI Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "bni",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Menu Lainnya</strong>.',
                            'Pilih <strong>Transfer</strong>.',
                            'Pilih <strong>Rekening Tabungan</strong>.',
                            'Pilih <strong>Ke Rekening BNI</strong>.',
                            'Masukkan nomor virtual account dan pilih <strong>Tekan Jika Benar</strong>.',
                            'Masukkan jumlah tagihan yang akan anda bayar secara lengkap. Pembayaran dengan jumlah tidak sesuai akan otomatis ditolak.',
                            'Jumlah yang dibayarkan, nomor rekening dan nama Merchant akan ditampilkan. Jika informasi telah sesuai, tekan <strong>Ya</strong>.',
                            'Transaksi Anda sudah selesai.',
                        ]
                    ],
                    [
                        "label" => "Transfer via Internet Banking",
                        "items" => [
                            'Ketik alamat <strong>"https" =>//ibank.bni.co.id</strong> kemudian klik <strong>Masuk</strong>.',
                            'Silakan masukkan <strong>User ID</strong> dan <strong>Password</strong>.',
                            'Klik menu <strong>Transfer</strong> kemudian pilih <strong>Tambah Rekening Favorit</strong>.',
                            'Masukkan nama, nomor rekening, dan email, lalu klik <strong>Lanjut</strong>.',
                            'Masukkan <strong>Kode Otentikasi</strong> dari token Anda dan klik <strong>Lanjut</strong>.',
                            'Kembali ke menu utama dan pilih <strong>Transfer</strong> lalu <strong>Transfer Antar Rekening BNI</strong>.',
                            'Pilih rekening yang telah Anda favoritkan sebelumnya di <strong>Rekening Tujuan</strong> lalu lanjutkan pengisian, dan tekan <strong>Lanjut</strong>.',
                            'Pastikan detail transaksi Anda benar, lalu masukkan <strong>Kode Otentikasi</strong> dan tekan <strong>Lanjut</strong>.',
                            'Transaksi selesai.',
                        ]
                    ],
                    [
                        "label" => "Transfer via Mobile Banking",
                        "items" => [
                            'Buka aplikasi BNI Mobile Banking dan login',
                            'Pilih menu Transfer',
                            'Pilih menu Virtual Account Billing',
                            'Pilih rekening debit yang akan digunakan',
                            'Pilih menu Input Baru dan masukkan 16 digit nomor Virtual Account',
                            'Informasi tagihan akan muncul pada halaman validasi',
                            'Jika informasi telah sesuai, masukkan Password Transaksi dan klik Lanjut',
                            'Transaksi Anda akan diproses'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "permata",
                "name"  => "Permata Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "permata",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Transaksi Lainnya</strong>.',
                            'Pilih <strong>Pembayaran</strong>.',
                            'Pilih <strong>Pembayaran Lainnya</strong>.',
                            'Pilih <strong>Virtual Account</strong>.',
                            'Masukkan 16 digit No. Virtual Account yang dituju, lalu tekan <strong>Benar</strong>.',
                            'Pada halaman konfirmasi transfer akan muncul jumlah yang dibayarkan, nomor rekening, & nama Merchant. Jika informasi telah sesuai tekan <strong>Benar</strong>.',
                            'Pilih rekening pembayaran Anda dan tekan <strong>Benar</strong>.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "cimb",
                "name"  => "CIMB Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "cimb",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Transaksi Lainnya</strong>.',
                            'Pilih <strong>Pembayaran</strong>.',
                            'Pilih <strong>Pembayaran Lainnya</strong>.',
                            'Pilih <strong>Virtual Account</strong>.',
                            'Masukkan 16 digit No. Virtual Account yang dituju, lalu tekan <strong>Benar</strong>.',
                            'Pada halaman konfirmasi transfer akan muncul jumlah yang dibayarkan, nomor rekening, & nama Merchant. Jika informasi telah sesuai tekan <strong>Benar</strong>.',
                            'Pilih rekening pembayaran Anda dan tekan <strong>Benar</strong>.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "maybank",
                "name"  => "MayBank Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "maybank",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Transaksi Lainnya</strong>.',
                            'Pilih <strong>Pembayaran</strong>.',
                            'Pilih <strong>Pembayaran Lainnya</strong>.',
                            'Pilih <strong>Virtual Account</strong>.',
                            'Masukkan 16 digit No. Virtual Account yang dituju, lalu tekan <strong>Benar</strong>.',
                            'Pada halaman konfirmasi transfer akan muncul jumlah yang dibayarkan, nomor rekening, & nama Merchant. Jika informasi telah sesuai tekan <strong>Benar</strong>.',
                            'Pilih rekening pembayaran Anda dan tekan <strong>Benar</strong>.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "danamon",
                "name"  => "Danamon Virtual Account",
                "type"  => "virtualaccount",
                "label" => "Virtual Account",
                "method"=> "bank_transfer",
                "icon"  => "danamon",
                "instructions" => [
                    [
                        "label" => "Transfer via ATM",
                        "items" => [
                            'Pada menu utama, pilih <strong>Transaksi Lainnya</strong>.',
                            'Pilih <strong>Pembayaran</strong>.',
                            'Pilih <strong>Pembayaran Lainnya</strong>.',
                            'Pilih <strong>Virtual Account</strong>.',
                            'Masukkan 16 digit No. Virtual Account yang dituju, lalu tekan <strong>Benar</strong>.',
                            'Pada halaman konfirmasi transfer akan muncul jumlah yang dibayarkan, nomor rekening, & nama Merchant. Jika informasi telah sesuai tekan <strong>Benar</strong>.',
                            'Pilih rekening pembayaran Anda dan tekan <strong>Benar</strong>.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "cc",
                "name"  => "Kartu Kredit",
                "type"  => "creditcard",
                "label" => "Credit Card",
                "method"=> "credit_card",
                "icon"  => "mastercard",
                "instructions" => [
                    [
                        "label" => "Bayar via Kartu Kredit",
                        "items" => [
                            'Masukkan nomor kartu kredit.',
                            'Pastikan nomor benar.',
                            'Klik bayar.'
                        ]
                    ]
                ]
            ],
            [
                "id"    => "gopay",
                "name"  => "GoPay",
                "type"  => "ewallet",
                "label" => "e Wallet",
                "method"=> "gopay",
                "icon"  => "gopay",
                "instructions" => [
                    [
                        "label"=> "Bayar via Gopay",
                        "items"=> [
                            "Buka aplikasi Gojek.",
                            "Pada menu Gojek klik Bayar.",
                            "Pilih Pakai qrcode.",
                            "Scan qrcode yang terlihat di layar.",
                            "Klik bayar.",
                            "Kamu akan mendapatkan notifikasi bahwa pembayaran telah berhasil.",
                        ]
                    ]
                ]
            ],
            [
                "id"    => "linkaja",
                "name"  => "LinkAJA",
                "type"  => "ewallet",
                "label" => "e Wallet",
                "method"=> "linkaja",
                "icon"  => "linkaja",
                "instructions" => [
                    [
                        "label"=> "Bayar via Linkaja",
                        "items"=> [
                            "Buka aplikasi Linkaja.",
                            "Pada menu Linkaja klik Bayar.",
                            "Pilih Pakai qrcode.",
                            "Scan qrcode yang terlihat di layar.",
                            "Klik bayar.",
                            "Kamu akan mendapatkan notifikasi bahwa pembayaran telah berhasil.",
                        ]
                    ]
                ]
            ],
            [
                "id"    => "jenius",
                "name"  => "Jenius Pay",
                "type"  => "ewallet",
                "label" => "e Wallet",
                "method"=> "jenius",
                "icon"  => "jenius",
                "instructions" => [
                    [
                        "label"=> "Bayar via Jenius",
                        "items"=> [
                            "Buka aplikasi Jenius.",
                            "Pada menu Jenius klik Bayar.",
                            "Pilih Pakai qrcode.",
                            "Scan qrcode yang terlihat di layar.",
                            "Klik bayar.",
                            "Kamu akan mendapatkan notifikasi bahwa pembayaran telah berhasil.",
                        ]
                    ]
                ]
            ],
            [
                "id"    => "kredivo",
                "name"  => "Kredivo",
                "type"  => "ewallet",
                "label" => "e Wallet",
                "method"=> "kredivo",
                "icon"  => "kredivo",
                "instructions" => [
                    [
                        "label"=> "Bayar via Kredivo",
                        "items"=> [
                            "Buka aplikasi Kredivo.",
                            "Pada menu Kredivo klik Bayar.",
                            "Pilih Pakai qrcode.",
                            "Scan qrcode yang terlihat di layar.",
                            "Klik bayar.",
                            "Kamu akan mendapatkan notifikasi bahwa pembayaran telah berhasil.",
                        ]
                    ]
                ]
            ],
            [
                "id"    => "shopeepay",
                "name"  => "Shopeepay",
                "type"  => "ewallet",
                "label" => "e Wallet",
                "method"=> "shopeepay",
                "icon"  => "shopeepay",
                "instructions" => [
                    [
                        "label"=> "Bayar via Shopeepay",
                        "items"=> [
                            "Buka aplikasi Shopee.",
                            "Pada menu Shopee klik Bayar.",
                            "Pilih Pakai qrcode.",
                            "Scan qrcode yang terlihat di layar.",
                            "Klik bayar.",
                            "Kamu akan mendapatkan notifikasi bahwa pembayaran telah berhasil.",
                        ]
                    ]
                ]
            ],
            [
                "id"    => "bcaklikpay",
                "name"  => "BCA Klikpay",
                "type"  => "instanpayment",
                "label" => "Instan Payment",
                "method"=> "bca_klikpay",
                "icon"  => "bcaklikpay",
                "instructions" => [
                    [
                        "label"=> "Bayar via klikpay",
                        "items"=> [
                            "Kamu akan di arahkan ke halaman <strong>BCA klikpay</strong> saat klik bayar.",
                            "Setelah login ke akun <strong>BCA klikpay</strong> dengan memasukkan email dan password, akan diperlihatkan informasi transaksi, pilih tipe pemayaran KlikBCA atau BCA Card untuk melanjutkan traksaksi.",
                            "Untuk memverifikasi pembayaran dengan <strong>BCA KlikPay</strong>, Klik tombol send OTP, setelah OTP didapatkan melalui SMS, masukkan kode OTP kekolom yang sudah disediakan.",
                            "Jika kode OTP benar. Pembayaran akan segera diproses.",
                            "Status transaksi akan muncul di layar dan akan dikirim melalui email.", 
                            "informasi lebih lanjut bisa hubungi  Halo BCA at 1500888 or visit http://klikbca.com/KlikPay/klikpay.html"
                        ]
                    ]
                ]
            ],
            [
                "id"    => "bcaklikbca",
                "name"  => "Klik BCA",
                "type"  => "instanpayment",
                "label" => "Instan Payment",
                "method"=> "bca_klikbca",
                "icon"  => "bcaklikbca",
                "instructions" => []
            ],
            [
                "id"    => "epaybri",
                "name"  => "ePay BRI",
                "type"  => "instanpayment",
                "label" => "Instan Payment",
                "method"=> "bri_epay",
                "icon"  => "epaybri",
                "instructions" => []
            ],
            [
                "id"    => "cimbclicks",
                "name"  => "CIMB Clicks",
                "type"  => "instanpayment",
                "label" => "Instan Payment",
                "method"=> "cimb_clicks",
                "icon"  => "cimbclicks",
                "instructions" => []
            ],
            [
                "id"    => "danamononline",
                "name"  => "Danamon Online",
                "type"  => "instanpayment",
                "label" => "Instan Payment",
                "method"=> "danamon_online",
                "icon"  => "danamononline",
                "instructions" => []
            ],
            [
                "id"    => "akulaku",
                "name"  => "Akulaku",
                "type"  => "cardless",
                "label" => "Cardless",
                "method"=> "akulaku",
                "icon"  => "akulaku",
                "instructions" => []
            ],
            [
                "id"    => "qris",
                "name"  => "Qris",
                "type"  => "cardless",
                "label" => "Cardless",
                "method"=> "qris",
                "icon"  => "qris",
                "instructions" => [
                    [
                        "label"=> "Bayar via Qris",
                        "items"=> [
                            "Buka aplikasi Ewallet.",
                            "Pada menu Ewallet klik Bayar.",
                            "Pilih Pakai qrcode.",
                            "Scan qrcode yang terlihat di layar.",
                            "Klik bayar.",
                            "Kamu akan mendapatkan notifikasi bahwa pembayaran telah berhasil.",
                        ]
                    ]
                ]
            ],
        ];
    }    

}

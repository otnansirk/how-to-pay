
<img src="https://raw.githubusercontent.com/krisnantobi/how-to-pay/master/src/assets/logo.png" alt="drawing" width="400"/>

<p align="left">
<a href="https://github.com/krisnantobi/how-to-pay"><img alt="GitHub release (latest SemVer)" src="https://img.shields.io/github/v/release/krisnantobi/how-to-pay?style=flat-square"></a>
</p>

### Features 

- [List of payment methods with icon](#list-of-payment-methods-with-icon)
- [Group the list of payment methods by type](#group-the-list-of-payment-methods-by-type)
- [Payment instructions how to pay with the selected payment method](#payment-instructions-how-to-pay)


## Installation

```bash
composer require krisn/howtopay
```
Then import asset.
```bash
php artisan vendor:publish --tag=public --force
```


## How to use

### You can use facade 
```php
use Krisn\HowToPay\Facades\HowToPay;
```

### List of payment methods with icon

```php
HowToPay::payMethods();
```
Return
```json
[
    {
        "id": "kartuprakerja",
        "name": "Kartu Prakerja",
        "method": "kartu_prakerja",
        "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Kartuprakerja.png"
    },
    {
        "id": "bca",
        "name": "BCA Virtual Account",
        "method": "bank_transfer",
        "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Bca.png"
    },
    {
        "id": "mandiri",
        "name": "Mandiri Virtual Account",
        "method": "bank_transfer",
        "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Mandiri.png"
    }
]
```

### Group the list of payment methods by type

```php
HowToPay::payMethodGroups();
```
Return
```json
{
    "kartuprakerja": {
        "label": "Kartu Prakerja",
        "items": [
            {
                "id": "kartuprakerja",
                "name": "Kartu Prakerja",
                "method": "kartu_prakerja",
                "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Kartuprakerja.png"
            }
        ]
    },
    "virtualaccount": {
        "label": "Virtual Account",
        "items": [
            {
                "id": "bca",
                "name": "BCA Virtual Account",
                "method": "bank_transfer",
                "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Bca.png"
            },
            {
                "id": "mandiri",
                "name": "Mandiri Virtual Account",
                "method": "bank_transfer",
                "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Mandiri.png"
            }
        ]
    },
    "creditcard": {
        "label": "Credit Card",
        "items": [
            {
                "id": "cc",
                "name": "Kartu Kredit",
                "method": "credit_card",
                "icon": "http://localhost:8000/vendor/howtopay/banks/icons/Mastercard.png"
            }
        ]
    }
}
```

### Payment instructions how to pay

```php
HowToPay::howToPay('id');
```
`id` is the payment method id shown in the list of returned payment methods
from `HowToPay::paymentMethods()`. 
See the [Payment methods id](#payment-methods-id) to see the supported payment methods.

Exp: 
```php
HowToPay::howToPay('bri');
```json
[
    {
        "label": "Transfer via ATM",
        "items": [
            "Pilih menu utama, pilih <strong>Transaksi Lain</strong>.",
            "Pilih <strong>Pembayaran</strong>.",
            "Pilih <strong>Lainnya</strong>.",
            "Pilih <strong>BRIVA</strong>.",
            "Masukkan <strong>Nomor BRIVA</strong> pelanggan dan pilih <strong>Benar</strong>.",
            "Jumlah pembayaran, nomor BRIVA dan nama merchant akan muncul pada halaman konfirmasi pembayaran. Jika informasi yang dicantumkan benar, pilih <strong>Ya</strong>.",
            "Pembayaran telah selesai. Simpan bukti pembayaran Anda."
        ]
    },
    {
        "label": "Transfer via Internet Banking",
        "items": [
            "Masuk pada <strong>Internet Banking BRI</strong>.",
            "Pilih menu <strong>Pembayaran & Pembelian</strong>.",
            "Pilih sub menu <strong>BRIVA</strong>.",
            "Masukkan <strong>Nomor BRIVA</strong>.",
            "Jumlah pembayaran, nomor pembayaran, dan nama merchant akan muncul pada halaman konfirmasi pembayaran. Jika informasi yang dicantumkan benar, pilih <strong>Kirim</strong>.",
            "Masukkan <strong>password</strong> dan <strong>mToken</strong>, pilih <strong>Kirim</strong>.",
            "Pembayaran telah selesai. Untuk mencetak bukti transaksi, pilih <strong>Cetak</strong>."
        ]
    },
    {
        "label": "Transfer via Mobile Banking",
        "items": [
            "Masuk ke dalam aplikasi <strong>BRI Mobile</strong>, pilih <strong>Mobile Banking BRI</strong>.",
            "Pilih <strong>Pembayaran</strong>, lalu pilih <strong>BRIVA</strong>.",
            "Masukkan <strong>nomor BRIVA</strong>.",
            "Jumlah pembayaran, nomor pembayaran, dan nama merchant akan muncul pada halaman konfirmasi pembayaran. Jika informasi yang dicantumkan benar, pilih <strong>Continue</strong>.",
            "Masukkan <strong>Mobile Banking BRI PIN</strong>, pilih <strong>Ok.</strong>.",
            "Pembayaran telah selesai. Simpan notifikasi sebagai bukti pembayaran."
        ]
    }
]
```

## Currently support.

### Payment methods id
- "kartuprakerja"
- "bca"
- "mandiri"
- "bri"
- "bni"
- "permata"
- "cimb"
- "maybank"
- "danamon"
- "cc"
- "gopay"
- "linkaja"
- "jenius"
- "kredivo"
- "shopeepay"
- "bcaklikpay"
- "bcaklikbca"
- "epaybri"
- "cimbclicks"
- "danamononline"
- "akulaku"
- "qris"

### payment methods
- "kartu_prakerja"
- "nicepay_va"
- "credit_card"
- "gopay"
- "linkaja"
- "jenius"
- "kredivo"
- "shopeepay"
- "bca_klikpay"
- "bca_klikbca"
- "bri_epay"
- "cimb_clicks"
- "danamon_online"
- "akulaku"
- "qris"

## Contributing
Thank you for considering contributing to the How To Pay.

## License
The HowToPay library is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

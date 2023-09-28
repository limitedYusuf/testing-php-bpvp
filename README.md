# Panduan Praktik Terbaik Pengujian Unit dalam PHP

Berikut adalah praktik terbaik dalam menulis pengujian unit yang efektif dan pengorganisasian struktur pengujian dalam proyek PHP:

## 1. Pengorganisasian Struktur Pengujian

- Buat direktori khusus untuk pengujian di dalam direktori proyek Anda (biasanya bernama `tests`).

- Pisahkan pengujian berdasarkan fungsionalitas atau kelas yang diuji. Misalnya, jika Anda memiliki kelas `User` dan `Product`, buat direktori `User` dan `Product` di dalam direktori `tests`.

- Gunakan konvensi penamaan untuk pengujian. Misalnya, jika Anda menguji kelas `Calculator`, nama pengujian dapat menjadi `CalculatorTest`. Ini akan membantu PHPUnit secara otomatis menemukan pengujian.

## 2. Tulis Pengujian yang Isolasi

- Pastikan setiap pengujian adalah independen dan tidak bergantung pada hasil pengujian lain. Pengujian harus dapat dijalankan dalam urutan acak.

- Isolasi pengujian berarti Anda harus menghindari ketergantungan pada sumber daya eksternal, seperti panggilan database atau layanan web. Gunakan teknik mocking untuk menggantikan sumber daya ini.

## 3. Gunakan Assertion yang Tepat

- Gunakan assertion yang sesuai dengan tipe data dan kondisi yang diuji. Contoh assertion:

```php

$this->assertEquals($expected, $actual);

$this->assertTrue($condition);

$this->assertFalse($condition);

$this->assertNull($value);

Selalu sediakan pesan kustom sebagai argumen terakhir dalam assertion. Pesan ini akan membantu Anda memahami apa yang salah jika pengujian gagal.
```

4\. Gunakan Data Provider

Gunakan annotation @dataProvider untuk menguji berbagai kasus pengujian dengan data yang berbeda. Ini membantu menghindari penulisan pengujian yang serupa secara berulang.

```php
Contoh:

/**

* @dataProvider additionDataProvider

*/

public function testAdd($a, $b, $expected) {

// Pengujian penambahan dengan data yang bervariasi

$result = $this->calculator->add($a, $b);

$this->assertEquals($expected, $result);

}

public function additionDataProvider() {

return [

[2, 3, 5],

[0, 0, 0],

[-1, 1, 0],

];

}
```

5\. Pengaturan dan Pembersihan

Gunakan metode setUp dan tearDown untuk mengatur dan membersihkan kondisi sebelum dan setelah setiap pengujian.

Tetapkan objek yang sering digunakan dalam metode setUp dan hapus atau nuliskan objek tersebut dalam metode tearDown.

Pastikan Anda menghindari perubahan status global yang dapat mempengaruhi pengujian lain. Setiap pengujian harus sepenuhnya independen.

6\. Manfaatkan Code Coverage

Gunakan alat cakupan kode, seperti Xdebug, untuk mengukur sejauh mana kode Anda ditutupi oleh pengujian. Laporan cakupan membantu Anda mengidentifikasi bagian kode yang tidak diuji.

Upayakan memiliki cakupan kode sebaik mungkin, termasuk cabang kondisional, agar Anda dapat memastikan bahwa kode Anda berfungsi dengan baik dalam berbagai skenario.

7\. Rutin Menjalankan Pengujian

Rutin menjalankan pengujian seiring dengan pengembangan Anda. Idealnya, setiap kali ada perubahan kode, pengujian harus dijalankan secara otomatis dalam alur kerja CI/CD.

Jika sebuah perubahan mempengaruhi kode yang ada, pastikan Anda menulis pengujian tambahan atau memperbarui pengujian yang ada sesuai kebutuhan.

Dengan mengikuti praktik-praktik terbaik ini, Anda dapat memastikan bahwa pengujian unit Anda efektif, mudah dipahami, dan dapat diandalkan. Pengorganisasian struktur pengujian yang baik juga akan membantu Anda menjaga kerapihan dalam kode pengujian Anda.
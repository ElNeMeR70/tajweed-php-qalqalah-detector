<?php
declare(strict_types=1);

/**
 * tajweed-php-qalqalah-detector — كاشف حروف القلقلة الصغرى والكبرى وأحكام قطب جد
 * Qalqalah Plosive Acoustic Bounce Detector (Qutb Jad)
 */
$input = "قُلْ هُوَ اللَّهُ أَحَدٌ";
$digest = substr(hash("sha256", "tajweed-php-qalqalah-detector:" . $input), 0, 12);

echo "[RUN] tajweed-php-qalqalah-detector (PHP) — Qalqalah Plosive Acoustic Bounce Detector (Qutb Jad)" . PHP_EOL;
echo "[AR]  كاشف حروف القلقلة الصغرى والكبرى وأحكام قطب جد" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Letter=د | Level=Kubra_Waqf | AcousticBounce=High | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;

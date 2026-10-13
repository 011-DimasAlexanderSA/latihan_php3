<?php

function hitungRataRata($data_nilai){
    return (float)number_format(
        array_sum($data_nilai)/count($data_nilai), 2
    );
};

function cekKelulusan($rata_rata){
    switch(true){
        case $rata_rata >= 80:
            return "Lulus Sangat Baik";
        case $rata_rata >= 75:
            return "Lulus";
        case $rata_rata <= 75:
            return "Tidak Lulus";
    }
}
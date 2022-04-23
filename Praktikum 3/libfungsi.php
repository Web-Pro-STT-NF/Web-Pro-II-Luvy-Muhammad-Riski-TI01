<?php
function Persentase($nilai_uts, $nilai_uas, $nilai_tugas)
{
    $total_nilai = (35 * (int)$nilai_uts / 100) + (35 * (int)(int)$nilai_uas / 100) + (30 * (int)$nilai_tugas / 100);
    return $total_nilai;
}


function Kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return 'LULUS';
    } else {
        return 'TIDAK LULUS';
    }
}

function Grade($_nilai)
{
    if ($_nilai >= 85) {
        return 'GRADE A';
    } elseif ($_nilai >= 70) {
        return 'GRADE B';
    } elseif ($_nilai >= 56) {
        return 'GRADE C';
    } elseif ($_nilai >= 36) {
        return 'GRADE D';
    } elseif ($_nilai >= 0) {
        return 'GRADE E';
    } else {
        return 'GRADE I';
    }
}

function Predikat($_grade)
{
    switch ($_grade) {
        case "GRADE A":
            return 'SANGAT MEMUASKAN';
            break;
        case "GRADE B":
            return 'MEMUASKAN';
            break;
        case "GRADE C":
            return 'CUKUP';
            break;
        case "GRADE D":
            return 'KURANG';
            break;
        case "GRADE E":
            return 'SANGAT KURANG';
            break;
        default:
            return 'PREDIKAT TIDAK VALID';
    }
}
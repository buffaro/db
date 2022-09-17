<?php
function avg($raw)
{
    if(!is_numeric($raw) || $raw == 0) return "-";
    $i = explode(",", $raw);
    if ($i[2] == "") {
        if ($i[1] == "") {
            $c = 1;
        } else {
            $c = 2;
        }
    } else {
        $c = 3;
    }
    return number_format((float)array_sum(explode(",", $raw)) / $c, 3, '.', '');
}

function P3($raw)
{
    if(!is_numeric($raw) || $raw == 0) return "-";
    if ($raw != 0) {
        return number_format((float)$raw, 3, '.', '');
    } else {
        return $raw;
    }
}
function P2($raw)
{
    if(!is_numeric($raw) || $raw == 0) return "-";
    if ($raw != 0) {
        return number_format((float)$raw, 2, '.', '');
    } else {
        return $raw;
    }
}
function P1($raw)
{
    if(!is_numeric($raw) || $raw == 0) return "-";
    if ($raw != 0) {
        return number_format((float)$raw, 1, '.', '');
    } else {
        return $raw;
    }
}
function P0($raw)
{
    if(!is_numeric($raw) || $raw == 0) return "-";
    if ($raw != 0) {
        return number_format((int)$raw);
    } else {
        return $raw;
    }
}

function C3($set, $cal)
{
    if(!is_numeric($set) || !is_numeric($cal) || $set == 0 || $cal == 0) return "-";
    if($cal - $set == 0) return 0;
    if ($set > $cal) {
        $bf = "";
    } else {
        $bf = "+";
    }
    return $bf . number_format((float)($cal - $set), 3, '.', '');
}
function C2($set, $cal)
{
    if(!is_numeric($set) || !is_numeric($cal) || $set == 0 || $cal == 0) return "-";
    if($cal - $set == 0) return 0;
    if ($set > $cal) {
        $bf = "";
    } else {
        $bf = "+";
    }
    return $bf . number_format((float)($cal - $set), 2, '.', '');
}
function C1($set, $cal)
{
    if(!is_numeric($set) || !is_numeric($cal) || $set == 0 || $cal == 0) return "-";
    if($cal - $set == 0) return 0;
    if ($set > $cal) {
        $bf = "";
    } else {
        $bf = "+";
    }
    return $bf . number_format((float)($cal - $set), 1, '.', '');
}
function C0($set, $cal)
{
    if(!is_numeric($set) || !is_numeric($cal) || $set == 0 || $cal == 0) return "-";
    if($cal - $set == 0) return 0;
    if ($set > $cal) {
        $bf = "";
    } else {
        $bf = "+";
    }
    return $bf . number_format((int)($cal - $set));
}

function N0($raw)
{
    if($raw == NULL) return "-";
    return $raw;
}
function Chk($raw)
{
    if($raw == "pass") return "<span style='color:green'>✓</span>";
    if($raw == "no") return "<span style='color:yellow'>-</span>";
    if($raw == "false") return "<span style='color:red'>✗</span>";
    return $raw;
}

?>

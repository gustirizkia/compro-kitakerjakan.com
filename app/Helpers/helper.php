<?php

use App\Models\Layanan;

function getLayanan()
{
    $items = Layanan::orderBy("nama", 'asc')->get();

    return $items;
}

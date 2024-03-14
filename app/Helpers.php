<?php

use Carbon\Carbon;
function currentDateTime()
{
    return Carbon::now()->timezone('Asia/Dhaka')->format('Y-m-d H:i:s');
}

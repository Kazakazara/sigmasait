<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function clientInfo()
    {
        $dto = new ClientInfoDTO(
            request()->ip(),
            request()->header('User-Agent')
        );

        return response()->json($dto);
    }

}

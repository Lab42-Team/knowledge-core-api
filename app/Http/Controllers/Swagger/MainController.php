<?php

namespace App\Http\Controllers\Swagger;

use Illuminate\Routing\Controller;

/**
 * @OA\Info(
 *     title="Knowledge Core API",
 *     version="1.0.5",
 *     description="Дата обновления: 17.11.2025"
 * ),
 *
 * @OA\PathItem(
 *     path="/api/"
 * ),
 *
 * @OA\Components(
 *     @OA\SecurityScheme(
 *         securityScheme="bearerAuth",
 *         type="http",
 *         scheme="bearer",
 *     ),
 * ),
 */
class MainController extends Controller
{
    //
}

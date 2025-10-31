<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/auth/login",
 *     summary="Вход в систему",
 *     tags={"Аутентификация"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="email", type="string", example="Some email"),
 *                     @OA\Property(property="password", type="string", example="Some password")
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="access_token", type="string", example="Generated new token"),
 *             @OA\Property(property="token_type", type="string", example="bearer"),
 *             @OA\Property(property="expires_in", type="integer", example=3600)
 *         )
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/auth/refresh",
 *     summary="Обновление токена",
 *     tags={"Аутентификация"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для обновления токена необходимо отправить старый (сгоревший) токен.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="access_token", type="string", example="Generated new token"),
 *             @OA\Property(property="token_type", type="string", example="bearer"),
 *             @OA\Property(property="expires_in", type="integer", example=3600)
 *         )
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/auth/me",
 *     summary="Получить данные по аутентифицированному пользователю",
 *     tags={"Аутентификация"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="email", type="string", example="Some email"),
 *             @OA\Property(property="email_verified_at", type="string", example=null),
 *             @OA\Property(property="remember_token", type="string", example=null),
 *             @OA\Property(property="role", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="full_name", type="string", example="Some full name"),
 *             @OA\Property(property="last_login_date", type="datetime", example="2025-09-15T01:52:11.000000Z"),
 *             @OA\Property(property="login_ip", type="string", example="Some IP"),
 *             @OA\Property(property="created_at", type="datetime", example="2025-09-15T01:52:11.000000Z"),
 *             @OA\Property(property="updated_at", type="datetime", example="2025-09-15T01:52:11.000000Z")
 *         )
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/auth/logout",
 *     summary="Выход из системы",
 *     tags={"Аутентификация"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="User successfully signed out.")
 *         )
 *     )
 * )
 */
class AuthController extends Controller
{
    //
}

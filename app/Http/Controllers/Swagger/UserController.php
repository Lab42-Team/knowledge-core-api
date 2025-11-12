<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/users",
 *     summary="Получить список всех пользователей",
 *     tags={"Пользователи"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора возвращает всех пользователей, зарегистрированных в системе.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(type="array", @OA\Items(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="email", type="string", example="Some email"),
 *             @OA\Property(property="email_verified_at", type="string", example=null),
 *             @OA\Property(property="role", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="full_name", type="string", example="Some full name"),
 *             @OA\Property(property="last_login_date", type="datetime", example="2025-11-01T01:00:00.000000Z"),
 *             @OA\Property(property="login_ip", type="string", example="Some IP")
 *         ))
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/v1/users",
 *     summary="Создание (регистрация) нового пользователя",
 *     tags={"Пользователи"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность создать нового пользователя. Администратор должен заполнить все требуемые поля, указанные в примере.",
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name"),
 *                     @OA\Property(property="email", type="string", example="Some email"),
 *                     @OA\Property(property="password", type="string", example="Some password"),
 *                     @OA\Property(property="password_confirmation", type="string", example="Password confirmation"),
 *                     @OA\Property(property="role", type="integer", example=0),
 *                     @OA\Property(property="status", type="integer", example=0)
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=201,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="New user successfully registered."),
 *             @OA\Property(property="user", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="Some name"),
 *                 @OA\Property(property="email", type="string", example="Some email"),
 *                 @OA\Property(property="email_verified_at", type="string", example=null),
 *                 @OA\Property(property="role", type="integer", example=0),
 *                 @OA\Property(property="status", type="integer", example=0),
 *                 @OA\Property(property="full_name", type="string", example="Some full name"),
 *                 @OA\Property(property="last_login_date", type="datetime", example="2025-11-01T01:00:00.000000Z"),
 *                 @OA\Property(property="login_ip", type="string", example="Some IP")
 *             )
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/users/{user}",
 *     summary="Получить данные пользователя",
 *     tags={"Пользователи"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора возвращает любого пользователя по его идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id пользователя",
 *         in="path",
 *         name="user",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="email", type="string", example="Some email"),
 *             @OA\Property(property="email_verified_at", type="string", example=null),
 *             @OA\Property(property="role", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="full_name", type="string", example="Some full name"),
 *             @OA\Property(property="last_login_date", type="datetime", example="2025-11-01T01:00:00.000000Z"),
 *             @OA\Property(property="login_ip", type="string", example="Some IP")
 *         )
 *     )
 * ),
 *
 * @OA\Put(
 *     path="/api/v1/users/{user}",
 *     summary="Обновить пользователя",
 *     tags={"Пользователи"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность редактировать любого пользователя по её идентификатору (id). Администратор должен заполнить все требуемые поля, указанные в примере.",
 *
 *     @OA\Parameter(
 *         description="id пользователя",
 *         in="path",
 *         name="user",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name for edit"),
 *                     @OA\Property(property="email", type="string", example="Some email for edit"),
 *                     @OA\Property(property="password", type="string", example="Some password for edit"),
 *                     @OA\Property(property="password_confirmation", type="string", example="Password confirmation for edit"),
 *                     @OA\Property(property="role", type="integer", example=0),
 *                     @OA\Property(property="status", type="integer", example=0),
 *                     @OA\Property(property="full_name", type="string", example="Some full name for edit")
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="email", type="string", example="Some email"),
 *             @OA\Property(property="email_verified_at", type="string", example=null),
 *             @OA\Property(property="role", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="full_name", type="string", example="Some full name"),
 *             @OA\Property(property="last_login_date", type="datetime", example="2025-11-01T01:00:00.000000Z"),
 *             @OA\Property(property="login_ip", type="string", example="Some IP")
 *         )
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/v1/users/{user}",
 *     summary="Удалить пользователя",
 *     tags={"Пользователи"},
 *     security={{ "bearerAuth": {} }},
 *     description="Администратор может удалить любого пользователя по его идентификатору (id), зарегистрированного в системе.",
 *
 *     @OA\Parameter(
 *         description="id пользователя",
 *         in="path",
 *         name="user",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1)
 *         )
 *     )
 * )
 */
class UserController extends Controller
{
    //
}

<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/news",
 *     summary="Получить список всех новостей",
 *     tags={"Новости"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для любого пользователя возвращает список всех новостей.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(type="array", @OA\Items(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="date", type="datetime", example="2025-11-01 01:00:00")
 *         ))
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/v1/news",
 *     summary="Создание новой новости",
 *     tags={"Новости"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность создать новую новость.",
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name"),
 *                     @OA\Property(property="description", type="string", example="Some description"),
 *                     @OA\Property(property="status", type="integer", example=0),
 *                     @OA\Property(property="date", type="datetime", example="2025-11-01 01:00:00")
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
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="date", type="datetime", example="2025-11-01 01:00:00")
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/news/{news}",
 *     summary="Получить единичную новость",
 *     tags={"Новости"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для любого пользователя возвращает новость по её идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id новости",
 *         in="path",
 *         name="news",
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
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="status", type="integer", example=0),
 *             @OA\Property(property="date", type="datetime", example="2025-11-01 01:00:00")
 *         )
 *     )
 * ),
 *
 * @OA\Put(
 *     path="/api/v1/news/{news}",
 *     summary="Обновить новость",
 *     tags={"Новости"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность редактировать любую новость по её идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id новости",
 *         in="path",
 *         name="news",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name for edit"),
 *                     @OA\Property(property="description", type="string", example="Some description for edit"),
 *                     @OA\Property(property="status", type="integer", example=1),
 *                     @OA\Property(property="date", type="datetime", example="2025-12-01 00:00:00")
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
 *             @OA\Property(property="name", type="string", example="Some new name"),
 *             @OA\Property(property="description", type="string", example="Some new description"),
 *             @OA\Property(property="status", type="integer", example=1),
 *             @OA\Property(property="date", type="datetime", example="2025-12-01 00:00:00")
 *         )
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/v1/news/{news}",
 *     summary="Удалить новость",
 *     tags={"Новости"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность удалить любую новость по её идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id новости",
 *         in="path",
 *         name="news",
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
class NewsController extends Controller
{
    //
}

<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/project",
 *     summary="Получить список всех проектов",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для любого пользователя возвращает список всех проектов.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(type="array", @OA\Items(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="type", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0)
 *         ))
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/v1/project",
 *     summary="Создание нового проекта",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность создать новый проект.",
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name"),
 *                     @OA\Property(property="description", type="string", example="Some description"),
 *                     @OA\Property(property="type", type="integer", example=0),
 *                     @OA\Property(property="status", type="integer", example=0)
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
 *             @OA\Property(property="type", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0)
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/project/{project}",
 *     summary="Получить единичный проект",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для любого пользователя возвращает проект по его идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id проекта",
 *         in="path",
 *         name="project",
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
 *             @OA\Property(property="type", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=0)
 *         )
 *     )
 * ),
 *
 * @OA\Put(
 *     path="/api/v1/project/{project}",
 *     summary="Обновить проект",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность редактировать любой проект по его идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id проекта",
 *         in="path",
 *         name="project",
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
 *                     @OA\Property(property="type", type="integer", example=0),
 *                     @OA\Property(property="status", type="integer", example=1)
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
 *             @OA\Property(property="type", type="integer", example=0),
 *             @OA\Property(property="status", type="integer", example=1)
 *         )
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/v1/project/{project}",
 *     summary="Удалить проект",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность удалить любой проект по его идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id проекта",
 *         in="path",
 *         name="project",
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
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/project/get-types",
 *     summary="Получить типы проектов",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора возвращает список всех возможных типов проектов.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *              @OA\Property(property="types", type="array", @OA\Items(
 *                  type="string"
 *              ))
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/project/get-statuses",
 *     summary="Получить статусы проектов",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора возвращает список всех возможных статусов проектов.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *              @OA\Property(property="statuses", type="array", @OA\Items(
 *                  type="string"
 *              ))
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/project/show-users-project/{project}",
 *     summary="Получить всех пользователей определенного проекта",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора возвращает список всех пользователей, которые входят в данный проект. Необходимо передать идентификатор (id) проекта.",
 *
 *     @OA\Parameter(
 *         description="id проекта",
 *         in="path",
 *         name="project",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(type="array", @OA\Items(
 *              @OA\Property(property="id", type="integer", example=1),
 *              @OA\Property(property="name", type="string", example="Some name"),
 *              @OA\Property(property="email", type="string", example="Some email"),
 *              @OA\Property(property="email_verified_at", type="string", example=null),
 *              @OA\Property(property="role", type="integer", example=0),
 *              @OA\Property(property="status", type="integer", example=0),
 *              @OA\Property(property="full_name", type="string", example="Some full name"),
 *              @OA\Property(property="last_login_date", type="datetime", example="2025-11-01T01:00:00.000000Z"),
 *              @OA\Property(property="login_ip", type="string", example="Some IP")
 *         ))
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/v1/project/{project}/user/{userId}",
 *     summary="Удалить пользователя из определенного проекта",
 *     tags={"Проекты"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность удалить любого пользователя, который входит в данный проект. Необходимо передать идентификаторы (id) проекта и пользователя.",
 *
 *     @OA\Parameter(
 *         description="id проекта",
 *         in="path",
 *         name="project",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Parameter(
 *         description="id пользователя",
 *         in="path",
 *         name="userId",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(type="array", @OA\Items(
 *             type="string"
 *         ))
 *     )
 * )
 */
class ProjectController extends Controller
{
    //
}

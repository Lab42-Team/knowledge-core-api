<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/developments",
 *     summary="Получить список всех разработок",
 *     tags={"Разработки"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для любого пользователя возвращает список всех разработок.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(type="array", @OA\Items(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Some name"),
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="year", type="datetime", example="2025-11-01 01:00:00"),
 *             @OA\Property(property="authors", type="string", example="Some authors"),
 *             @OA\Property(property="publications", type="string", example="Some publications"),
 *             @OA\Property(property="requirements", type="string", example="Some requirements"),
 *             @OA\Property(property="practical_application", type="string", example="Some practical application"),
 *             @OA\Property(property="version_history", type="string", example="Some version history"),
 *             @OA\Property(property="demo_videos", type="string", example="Some demo videos"),
 *             @OA\Property(property="software_link", type="string", example="Some software link"),
 *             @OA\Property(property="documentation_link", type="string", example="Some documentation link"),
 *             @OA\Property(property="github_link", type="string", example="Some github link")
 *         ))
 *     )
 * ),
 *
 * @OA\Post(
 *     path="/api/v1/developments",
 *     summary="Создание новой разработки",
 *     tags={"Разработки"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность создать новую разработку.",
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="name", type="string", example="Some name"),
 *                     @OA\Property(property="description", type="string", example="Some description"),
 *                     @OA\Property(property="year", type="datetime", example="2025-11-01 01:00:00"),
 *                     @OA\Property(property="authors", type="string", example="Some authors"),
 *                     @OA\Property(property="publications", type="string", example="Some publications"),
 *                     @OA\Property(property="requirements", type="string", example="Some requirements"),
 *                     @OA\Property(property="practical_application", type="string", example="Some practical application"),
 *                     @OA\Property(property="version_history", type="string", example="Some version history"),
 *                     @OA\Property(property="demo_videos", type="string", example="Some demo videos"),
 *                     @OA\Property(property="software_link", type="string", example="Some software link"),
 *                     @OA\Property(property="documentation_link", type="string", example="Some documentation link"),
 *                     @OA\Property(property="github_link", type="string", example="Some github link")
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
 *             @OA\Property(property="year", type="datetime", example="2025-11-01 01:00:00"),
 *             @OA\Property(property="authors", type="string", example="Some authors"),
 *             @OA\Property(property="publications", type="string", example="Some publications"),
 *             @OA\Property(property="requirements", type="string", example="Some requirements"),
 *             @OA\Property(property="practical_application", type="string", example="Some practical application"),
 *             @OA\Property(property="version_history", type="string", example="Some version history"),
 *             @OA\Property(property="demo_videos", type="string", example="Some demo videos"),
 *             @OA\Property(property="software_link", type="string", example="Some software link"),
 *             @OA\Property(property="documentation_link", type="string", example="Some documentation link"),
 *             @OA\Property(property="github_link", type="string", example="Some github link")
 *         )
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/v1/developments/{developments}",
 *     summary="Получить единичную разработку",
 *     tags={"Разработки"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для любого пользователя возвращает разработку по её идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id разработки",
 *         in="path",
 *         name="developments",
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
 *             @OA\Property(property="year", type="datetime", example="2025-11-01 01:00:00"),
 *             @OA\Property(property="authors", type="string", example="Some authors"),
 *             @OA\Property(property="publications", type="string", example="Some publications"),
 *             @OA\Property(property="requirements", type="string", example="Some requirements"),
 *             @OA\Property(property="practical_application", type="string", example="Some practical application"),
 *             @OA\Property(property="version_history", type="string", example="Some version history"),
 *             @OA\Property(property="demo_videos", type="string", example="Some demo videos"),
 *             @OA\Property(property="software_link", type="string", example="Some software link"),
 *             @OA\Property(property="documentation_link", type="string", example="Some documentation link"),
 *             @OA\Property(property="github_link", type="string", example="Some github link")
 *         )
 *     )
 * ),
 *
 * @OA\Put(
 *     path="/api/v1/developments/{developments}",
 *     summary="Обновить разработку",
 *     tags={"Разработки"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность редактировать любую разработку по её идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id разработки",
 *         in="path",
 *         name="developments",
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
 *                     @OA\Property(property="year", type="datetime", example="2025-12-01 00:00:00"),
 *                     @OA\Property(property="authors", type="string", example="Some authors for edit"),
 *                     @OA\Property(property="publications", type="string", example="Some publications for edit"),
 *                     @OA\Property(property="requirements", type="string", example="Some requirements for edit"),
 *                     @OA\Property(property="practical_application", type="string", example="Some practical application for edit"),
 *                     @OA\Property(property="version_history", type="string", example="Some version history for edit"),
 *                     @OA\Property(property="demo_videos", type="string", example="Some demo videos for edit"),
 *                     @OA\Property(property="software_link", type="string", example="Some software link for edit"),
 *                     @OA\Property(property="documentation_link", type="string", example="Some documentation link for edit"),
 *                     @OA\Property(property="github_link", type="string", example="Some github link for edit")
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
 *             @OA\Property(property="year", type="datetime", example="2025-12-01 00:00:00"),
 *             @OA\Property(property="authors", type="string", example="Some new authors"),
 *             @OA\Property(property="publications", type="string", example="Some new publications"),
 *             @OA\Property(property="requirements", type="string", example="Some new requirements"),
 *             @OA\Property(property="practical_application", type="string", example="Some new practical application"),
 *             @OA\Property(property="version_history", type="string", example="Some new version history"),
 *             @OA\Property(property="demo_videos", type="string", example="Some new demo videos"),
 *             @OA\Property(property="software_link", type="string", example="Some new software link"),
 *             @OA\Property(property="documentation_link", type="string", example="Some new documentation link"),
 *             @OA\Property(property="github_link", type="string", example="Some new github link")
 *         )
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/v1/developments/{developments}",
 *     summary="Удалить разработку",
 *     tags={"Разработки"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора дает возможность удалить любую разработку по её идентификатору (id).",
 *
 *     @OA\Parameter(
 *         description="id разработки",
 *         in="path",
 *         name="developments",
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
class DevelopmentsController extends Controller
{
    //
}

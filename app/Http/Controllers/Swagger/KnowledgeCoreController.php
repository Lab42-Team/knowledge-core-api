<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/api/v1/knowledge-core",
 *     summary="Получение основной информации о приложении",
 *     tags={"Основная информация"},
 *     security={{ "bearerAuth": {} }},
 *     description="Для администратора возвращает первую запись с базы данных, содержащую основную информацию о приложении.",
 *
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="phone", type="string", example="+999 100 10 10"),
 *             @OA\Property(property="email", type="string", example="test@knowledge-core.ru"),
 *             @OA\Property(property="address", type="string", example="Some address"),
 *             @OA\Property(property="references", type="string", example="Some references"),
 *             @OA\Property(property="lab_link", type="string", example="Some link to laboratory website"),
 *             @OA\Property(property="github_link", type="string", example="Some link to GitHub laboratory group")
 *         )
 *     )
 * ),
 *
 * @OA\Put(
 *     path="/api/v1/knowledge-core/{knowledge_core}",
 *     summary="Обновить основную информацию о приложении",
 *     tags={"Основная информация"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
 *         description="id основной информации",
 *         in="path",
 *         name="knowledge_core",
 *         required=true,
 *         example=1
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="description", type="string", example="Some description for edit"),
 *                     @OA\Property(property="phone", type="string", example="Some phone for edit"),
 *                     @OA\Property(property="email", type="string", example="Some email for edit"),
 *                     @OA\Property(property="address", type="string", example="Some address for edit"),
 *                     @OA\Property(property="references", type="string", example="Some references for edit"),
 *                     @OA\Property(property="lab_link", type="string", example="Some link to laboratory website for edit"),
 *                     @OA\Property(property="github_link", type="string", example="Some link to GitHub laboratory group for edit")
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
 *             @OA\Property(property="description", type="string", example="Some description"),
 *             @OA\Property(property="phone", type="string", example="+999 100 10 10"),
 *             @OA\Property(property="email", type="string", example="test@knowledge-core.ru"),
 *             @OA\Property(property="address", type="string", example="Some address"),
 *             @OA\Property(property="references", type="string", example="Some references"),
 *             @OA\Property(property="lab_link", type="string", example="Some link to laboratory website"),
 *             @OA\Property(property="github_link", type="string", example="Some link to GitHub laboratory group")
 *         )
 *     )
 * )
 */
class KnowledgeCoreController extends Controller
{
    //
}

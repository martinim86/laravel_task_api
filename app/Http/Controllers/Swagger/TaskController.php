<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

 /**
 * @OA\Post(
 *    path="/api/tasks",
 *    summary="Создание",
 *    tags={"Task"},
 *    security={{ "bearerAuth":{} }},
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                 @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Some title"),
 *                      @OA\Property(property="description", type="string", example="Some description"),
 *                 )
 *            }
 *        )
 *    ),
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data",type="object",
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="description", type="string", example="Some description"),
 *            ),
 *        ),
 *    ),
 * ),
 * @OA\Get(
 *    path="/api/tasks",
 *    summary="Список",
 *    tags={"Task"},
 *    security={{ "bearerAuth":{} }},
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data",type="array",@OA\Items(                           
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="description", type="string", example="Some description"),
 *            )),
 *        ),
 *    ),
 * ),
 * @OA\Get(
 *    path="/api/tasks/{task}",
 *    summary="Единичная запись",
 *    tags={"Task"},
 *    security={{ "bearerAuth":{} }},
 *    @OA\Parameter(
 *        description="ID таска",
 *        in="path",
 *        name="task",
 *        required=true,
 *        example=1,
 * 
 *    ),
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data",type="object",
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="description", type="string", example="Some description"),
 *            ),
 *        ),
 *    ),
 * ),
 * @OA\Patch(
 *    path="/api/tasks/{task}",
 *    summary="ОБновление",
 *    tags={"Task"},
 *    security={{ "bearerAuth":{} }},
 *    @OA\Parameter(
 *        description="ID таска",
 *        in="path",
 *        name="task",
 *        required=true,
 *        example=2,
 *    ),
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                 @OA\Schema(
 *                      @OA\Property(property="title", type="string", example="Some title for update"),
 *                      @OA\Property(property="description", type="string", example="Some description for update"),
 *                 )
 *            }
 *        )
 *    ),
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data",type="object",
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="description", type="string", example="Some description"),
 *            ),
 *        ),
 *    ),
 * ).
 * @OA\Delete(
 *    path="/api/tasks/{task}",
 *    summary="Удаление",
 *    tags={"Task"},
 *    security={{ "bearerAuth":{} }},
 *    @OA\Parameter(
 *        description="ID таска",
 *        in="path",
 *        name="task",
 *        required=true,
 *        example=1,
 *    ),
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="message",type="string", example="Done"),
 *        ),
 *    ),
 * ),
 * 
 */



class TaskController extends Controller
{
    
}

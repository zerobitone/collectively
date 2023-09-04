<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Routing\Annotation\Route;


class PostController extends Controller
{

    #[Route('/api/posts', methods: ['GET'])]
    /**
     * @throws \Exception
     */
    public function index(): JsonResponse
    {
        try {
            $posts = Post::query()
                ->where('active', '=', 1)
                ->where('published_at', '!=', null) // Anstatt 'NULL' verwenden wir null
                ->orderBy('published_at', 'desc')
                ->paginate();

            //  "dd" (dump and die), um die Daten zu überprüfen
            // dd($posts);

            return response()->json(['posts' => $posts]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

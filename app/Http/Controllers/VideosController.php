<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $data = [
            'videos' => Videos::all()
        ];
        return response(view('user-dashboard', $data));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Videos $videos): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videos $videos): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videos $videos): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videos $videos): RedirectResponse
    {
        //
    }



    public function like(Videos $video)
    {
        if (!$video->hasLiked()) {
            $video->like();
            $video->increment('likesCounter', 1);
            return back()->withSuccess('La vidéo a été aimée !');
        }else{
            return back()->withError('Vous avez déjà aimée cette video !');
        }
    }
}

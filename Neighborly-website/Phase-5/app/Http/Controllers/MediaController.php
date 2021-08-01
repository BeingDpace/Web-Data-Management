<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function view() {

        $media = new Media();
        $result = $media->get();

        return view('users_media', [
            'media' => $result,
            'user_role' => 'immigrant'
        ]);
    }

    public function submit(Request $request) {

        $request->validate([
          'upload_file' => 'required|mimes:png,jpg,jpeg,gif,mov,mp4|max:10048'
        ]);

        $media = new Media;

        if($request->file()) {
            $ext = strtolower(pathinfo($request->upload_file->getClientOriginalName(), PATHINFO_EXTENSION));
            $fileName = time().'_'.$request->upload_file->getClientOriginalName();
            $filePath = $request->file('upload_file')->storeAs('uploads', $fileName, 'public');

            //$media->name = time().'_'.$request->upload_file->getClientOriginalName();
            $media->content = $request['comments'];
            $media->type = ($ext == 'mp4') ? 'video' : 'photo';
            $media->path = '/storage/' . $filePath;
            $media->user_id = 1;
            $media->save();

            return back()
                ->with('success','File has been uploaded.')
                ->with('upload_file', $fileName);
        }
    }
}

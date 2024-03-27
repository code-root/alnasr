<?php

namespace App\Http\Controllers;

use App\Models\ImageItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ImageItemController extends Controller
{

    public function store(Request $request){
        $imagesData = [];
        if (!ImageItem::where('table_name' , $request->table_name)
                     ->where('token' , $request->token_image)->exists()) {

            $allowedImageTypes = ['jpg', 'jpeg', 'png', 'gif']; // صيغ الصور المسموح بها
            $allowedVideoTypes = ['mp4', 'avi', 'mov', 'wmv']; // صيغ الفيديو المسموح بها

            // $this->validate($request, [
            //     'image.*' => 'required|mimes:' . implode(',', $allowedImageTypes) . ',' . implode(',', $allowedVideoTypes),
            // ]);

            foreach ($request->file('image') as $image) {
                $original_name = $image->getClientOriginalName();
                $fileType = $image->getClientMimeType(); // نوع الملف المرفوع

                if (strpos($fileType, 'image') !== false) {
                    // إذا كان الملف صورة
                    $imagesData[] = [
                        'url' => $this->uploadImage($image, $original_name, 'en', $request->table_name, $request->token_image , 'image'),
                        'language' => 'en',
                        'status' => 'image'
                    ];
                } elseif (strpos($fileType, 'video') !== false || strpos($fileType, 'octet-stream') !== false ) {
                    // إذا كان الملف فيديو
                    $imagesData[] = [
                        'url' => $this->uploadImage($image, $original_name, 'en', $request->table_name, $request->token_image ,'video'),
                        'language' => 'en',
                        'status' => 'video'
                    ];
                }
            }
        }
        return response()->json(['images' => $imagesData]);
    }

    // public function uploadImage($image , $original_name, $language, $table_name, $token ) {
    //     $d = [] ;
    //     $imageName = trim($token .'-'.date('H:i:s').'.').$image->getClientOriginalExtension();
    //     $path = $table_name;
    //     $image->storeAs('public/' . $path, $imageName);
    //     $imageSize = $image->getSize();
    //     $d =  ImageItem::create([
    //         'url' => $path . '/' . $imageName,
    //         'original_name' => $original_name,
    //         'language' => $language,
    //         'table_name' => $table_name,
    //         'token' => $token,
    //         'status' => 'all', // على سبيل المثال
    //         'image_size' => $imageSize, // حقل لحفظ مساحة الصورة
    //     ]);
    //     return env('url_assets' ) . $path . '/' . $imageName;
    // }

    public function uploadImage($image, $original_name, $language, $table_name, $token , $status)
{

    $imageName = trim($token .'-'.now().'.'.$image->getClientOriginalExtension());
    $path = 'assets/' . $table_name;
    if (!Storage::exists($path)) {
        Storage::makeDirectory($path);
    }

    $image->move($path, $imageName);

    // if ($status =='video') {
    // $ffmpeg = FFMpeg::fromDisk('local')
    //     ->open($path . '/' . $imageName)
    //     ->export()
    //     ->toDisk('local')
    //     ->inFormat(new \FFMpeg\Format\Video\X264('aac'))
    //     ->save($path . '/' . $imageName);

    // $videoSize = Storage::size($path . '/' . $imageName);
    // }


    // $imageSize = $image->getSize();
        $d =  ImageItem::create([
        'url' => $path . '/' . $imageName,
        'original_name' => $original_name,
        'language' => $language,
        'table_name' => $table_name,
        'token' => $token,
        'status' => $status, // على سبيل المثال
        'image_size' => $videoSize ?? 1, // حقل لحفظ مساحة الصورة
    ]);

    return ('/' . $path . '/' . $imageName);
}


    public function  delete (Request $request) {
        ImageItem::where('id' , $request->image_id)->delete();
        return 200 ;
    }
}


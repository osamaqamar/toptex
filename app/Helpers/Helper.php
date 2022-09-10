<?php
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use App\Models\AuditHistory;
    use Illuminate\Support\Facades\Session;
    use Maklad\Permission\Models\Role;

    function print_test($arr){
        echo '<pre>';
        var_dump($arr);
        echo '<pre>';
    }
    if (! function_exists('singleImageUpload')) {
        function singleImageUpload($request, $input_name, $path): ?string
        {
            if ($request->hasFile($input_name)) {
                $image           = $request->file($input_name);
                $name            = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = storage_path('app/public/'.$path);
                if($image->move($destinationPath, $name)){
                    return $path.'/'.$name;
                }else{
                    return null;
                }
            }
            else{
                return null;
            }
        }
    }

    if (! function_exists('multipleImagesUpload')) {
        function multipleImagesUpload($files, $path): array
        {
            $paths = [];
            if (!is_null($files)){
                foreach ($files as $key => $file){
                    $name =  $key . "-" . time() . '.' . $file->getClientOriginalExtension();
                    $destinationPath = storage_path('app/public/'.$path);
                    $file->move($destinationPath, $name);
                    $paths[] = $path.'/'.$name;
                }
            }
            return $paths;
        }
    }

    if (! function_exists('deleteOldImage')) {
        function deleteOldImage($path)
        {
            if (File::exists(storage_path('app/public/'.$path))) {
                File::delete(storage_path('app/public/'.$path));
            }
        }
    }

    if (! function_exists('deleteMultiImages')) {
        function deleteMultiImages($path)
        {
            foreach ($path as $item){
                if (File::exists(storage_path('app/public/'.$item))) {
                    File::delete(storage_path('app/public/'.$item));
                }
            }
        }
    }



    if (! function_exists('getImage')) {
        function getImage($path): string
        {
            if (empty($path) || $path[0] == '' || !file_exists(public_path('storage/'.$path[0]))){
                return asset('no_image.png');
            }
            else{
                return asset('storage/'.$path[0]);
            }
        }
    }

    if (! function_exists('getMultipleImage')) {
        function getMultipleImage($path): string
        {
            if (empty($path) || $path == '' || !file_exists(public_path('storage/'.$path))){
                return asset('no_image.png');
            }
            else{
                return asset('storage/'.$path);
            }
        }
    }





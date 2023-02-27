<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function logo(){
        $pageTitle = 'Update Logo';
        $homeLogo = DB::table('home_logo')->first();              
        return view('admin.site-settings.update-logo', compact('pageTitle', 'homeLogo'));
    }
   
    public function updatelogo(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|dimensions:max_width=250,max_height=250',
            // 'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $homeLogo = DB::table('home_logo')->first();

        if($homeLogo){
            $image = $homeLogo->image;
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $name = 'songcl_logo.'.$image->getClientOriginalExtension();
                
                $destinationPath = public_path('admin_assets/images');
                $alreadyExist = public_path('admin_assets/images/'.$name);
                if(file_exists($alreadyExist)){
                    unlink($alreadyExist);
                }
                $image->move($destinationPath, $name);
                $image = $name;
            }
            DB::table('home_logo')->update([
                'image' => $image
            ]);
        }else{
            $image = $request->file('image');
            $name = 'songcl_logo.'.$image->getClientOriginalExtension();
            
            $destinationPath = public_path('admin_assets/images');
            $alreadyExist = public_path('admin_assets/images/'.$name);
            if(file_exists($alreadyExist)){
                unlink($alreadyExist);
            }
            $image->move($destinationPath, $name);
            $image = $name;
            DB::table('home_logo')->insert([
                'image' => $image
            ]);
        }

        return redirect()->route('update-logo')->with('success', 'Logo updated successfully.');
    }

}
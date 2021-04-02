<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
use Hash;
use App\Models\SocialProvider;
class UserController extends Controller
{
    public function redirectToProvider($social){
        return Socialite::driver($social)->redirect();
    }
  
    public function handleProviderCallback($providers){
        try{
            $socialUser = Socialite::driver($providers)->user();
            //return $user->getEmail();
        }
        catch(\Exception $e){
            //dd($e->getResponse()->getBody()->getContents());
            return redirect()->route('login')->with(['flash_level'=>'danger','flash_message'=>"Đăng nhập không thành công"]);
        }
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())
                                        ->first();
        if(!$socialProvider){
            //tạo mới
            $user = User::where('email',$socialUser->getEmail())->first();
            if($user){
              return redirect()->route('login')->with(['flash_level'=>'danger','flash_message'=>"Email đã có người sử dụng"]);
            }
            else{
              $user = new User();
              $user->email = $socialUser->getEmail();
              $user->full_name = $socialUser->getName();
              if($providers == 'google'){
                $image = explode('?',$socialUser->getAvatar());
                $user->avatar = $image[0];
              }
              $user->avatar = $socialUser->getAvatar();
              $user->save();
            }
            $provider = new SocialProvider();
            $provider->provider_id = $socialUser->getId();
            $provider->provider = $providers;
            $provider->email = $socialUser->getEmail();
            $provider->save();
        }
        else{
            $user = User::where('email',$socialUser->getEmail())->first();
        }
        Auth()->login($user);
        if(Auth::user()->admin == 1){
            return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>"Đăng nhập thành công"]);
        }
        return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>"Đăng nhập thành công"]);
    }
}

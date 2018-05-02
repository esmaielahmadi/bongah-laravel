<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Http\Requests\BannerRequest;
use App\Photo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BannersController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['show']]);
    }

    public function index()
    {

    }


    public function create()
    {


        $countries= \App\Http\Utilities\Country::all();
        return view('banners.create', compact('countries'));
    }


    public function store(BannerRequest $request)
    {

        //validation//store to db//redirect
        Banner::create($request->all());
        flash()->overly('Ok' ,'Create');
return back();


    }

    public function show($zip , $street)
    {
        $banner=  Banner::locatedAt($zip,$street);
        return view('banners.show',compact('banner'));
    }

    public function addPhotos($zip,$street,Request $request)
    {
      //  dd($request->all());
        $this->validate($request,[
            'file'=> 'required|mimes:jpg,jpeg,png'
        ]);
        $photo = $this->makePhoto($request->file('photo'));
        Banner::locatedAt($zip,$street)->addPhoto($photo);

    }
    protected function makePhoto(UploadedFile $file)
    {
        return Photo::named($file->getClientOriginalName())
            ->move($file);

    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {

    }

    public function str()
    {
        return back();
    }


}

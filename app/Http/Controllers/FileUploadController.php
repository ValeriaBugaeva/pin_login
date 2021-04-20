<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Auth;



class FileUploadController extends Controller
{
    public function createForm() {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'file-manager-application',
        ];

        return view('fileManager.file-manager', ['pageConfigs' => $pageConfigs]);
    }

  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,doc,docx,xlx,xls,pdf,png,jpeg,jpg|max:2048'
        ]);

        $fileModel = new File;
        $User = Auth::id();
       

        if($req->file()) {
            $fileName = $req->file->getClientOriginalName();
            // $fileName = time().'.'.$request->file->extension();
            $filePath = $req->file('file')->storeAs($req->user()->id, $fileName, 'public');


            $fileModel->name = $req->file->getClientOriginalName();
            $fileModel->user_id = $User;
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }

}
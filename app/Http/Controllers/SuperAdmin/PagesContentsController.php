<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\PagesContent\UpdateRequest;
use App\Models\PagesContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesContentsController extends Controller
{

    public function getPageContent($section)
    {
        $pages_contents = PagesContent::where('section', $section)->get();
        $heading = $pages_contents->first();
        return view('super_admins.pages_contents.edit')->with('pages_contents', $pages_contents)->with('heading', $heading->page_title ?? $section);
    }


    public function update(UpdateRequest $request)
    {
       // $settings = PagesContent();
        // try {
        //     DB::beginTransaction();

        foreach ($request->data as $key => $value) {
            PagesContent::where('name', $key)->update(['value' => $value]);
//            if ($request->page_content_type[$key] == 'image') {
//                $previous_value = $settings[$name];
//                if ($request->file($name)) {
//                    if (file_exists(public_path($previous_value))) {
//                        unlink(public_path($previous_value));
//                    }
//                    $image = $request->file($name);
//                    $file_name = $name . '.' . $image->getClientOriginalExtension();
//                    $image->move(public_path() . '/images/settings', $file_name);
//                    $file_name = '/images/settings/' . $file_name;
//                } else {
//                    $file_name = $previous_value;
//                }
//                PagesContent::where('name', $name)->update(['value' => $file_name]);
//            } else {
//                PagesContent::where('name', $name)->update(['value' => $request->page_content_value[$key]]);
//            }
        }
        //     DB::commit();
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return redirect()->back()->with('message', 'Something Went Wrong')->with('message_type', 'error');
        // }
        return redirect()->back()->with('message', 'PagesContent Updated Successfully')->with('message_type', 'success');
    }
}

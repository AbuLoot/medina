<?php

namespace App\Http\Controllers\Joystick;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\ImageTrait;
use App\Page;

use Storage;

class PageController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $pages = Page::orderBy('sort_id')->get();

        return view('joystick-admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('joystick-admin.pages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:80|unique:pages',
            'image' => 'required|mimes:jpeg,jpg,png,svg,svgs,bmp,gif'
        ]);

        if ($request->hasFile('image')) {

            $imageName = str_slug($request->title).'.'.$request->file('image')->getClientOriginalExtension();

            // Creating mini image
            $this->resizeImage($request->file('image'), 450, 200, 'img/services/mini-'.$imageName, 100);

            // Creating image
            $this->cropImage($request->file('image'), 1400, 600, 'img/services/'.$imageName, 100);
        }

        $page = new Page;
        $page->sort_id = ($request->sort_id > 0) ? $request->sort_id : $page->count() + 1;
        $page->slug = (empty($request->slug)) ? str_slug($request->title) : $request->slug;
        $page->title = $request->title;
        $page->icon = $request->icon;
        $page->title_description = $request->title_description;
        $page->meta_description = $request->meta_description;
        $page->content = $request->content;
        $page->image = $imageName;
        $page->lang = $request->lang;
        $page->status = ($request->status == 'on') ? 1 : 0;
        $page->save();

        return redirect('/admin/pages')->with('status', 'Запись добавлена!');
    }

    public function edit($id)
    {
        $page = Page::findOrFail($id);

        return view('joystick-admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {    	
        $this->validate($request, [
            'title' => 'required|min:2|max:80',
            'image' => 'mimes:jpeg,jpg,png,svg,svgs,bmp,gif'
        ]);

        $page = Page::findOrFail($id);

        if ($request->hasFile('image')) {

            $imageName = uniqid().'-'.str_slug($request->title).'.'.$request->file('image')->getClientOriginalExtension();

            // Creating mini image
            $this->resizeImage($request->file('image'), 450, 200, 'img/services/mini-'.$imageName, 100);

            // Creating image
            $this->cropImage($request->file('image'), 1400, 600, 'img/services/'.$imageName, 100);

            Storage::delete([
                'img/services/mini-'.$page->image,
                'img/services/'.$page->image,
            ]);
        }

        $page->sort_id = ($request->sort_id > 0) ? $request->sort_id : $page->count() + 1;
        $page->slug = (empty($request->slug)) ? str_slug($request->title) : $request->slug;
        $page->title = $request->title;
        $page->icon = $request->icon;
        $page->title_description = $request->title_description;
        $page->meta_description = $request->meta_description;
        $page->content = $request->content;
        if (isset($imageName)) $page->image = $imageName;
        $page->lang = $request->lang;
        $page->status = ($request->status == 'on') ? 1 : 0;
        $page->save();

        return redirect('/admin/pages')->with('status', 'Запись обновлена!');
    }

    public function destroy($id)
    {
        $page = Page::find($id);

        if (!empty($page->image)) {

            Storage::delete([
                'img/services/mini-'.$page->image,
                'img/services/'.$page->image,
            ]);
        }

        $page->delete();

        return redirect('/admin/pages')->with('status', 'Запись удалена!');
    }
}

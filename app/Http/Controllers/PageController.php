<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Storage;

use App\Page;
use App\Gallery;
use App\ImageTrait;

class PageController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $pages = Page::where('status', 1)->get();
        $gallery = Gallery::orderBy('created_at')->get();

        return view('index', ['pages' => $pages, 'gallery' => $gallery]);
    }

    public function brands()
    {
        $companies = Company::all();
        $page = Page::where('slug', 'brands')->firstOrFail();

        return view('pages.brands')->with(['page' => $page, 'companies' => $companies]);
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $pages = Page::where('status', 1)->get();

        return view('service')->with(['page' => $page, 'pages' => $pages]);
    }

    public function brandProducts($company_slug)
    {
        $page = Page::where('slug', 'catalog')->firstOrFail();
        $company = Company::where('slug', $company_slug)->first();

        return view('pages.catalog')->with(['page' => $page, 'products_title' => $page->title, 'products' => $company->products]);
    }

    public function product($product_id, $product_slug)
    {
        $product = Product::where('id', $product_id)->firstOrFail();
        $category = Category::where('id', $product->category_id)->firstOrFail();

        return view('pages.product')->with(['product' => $product]);
    }

    public function contacts()
    {
        return view('contacts');
    }
}

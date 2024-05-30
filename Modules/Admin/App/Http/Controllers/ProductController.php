<?php

namespace Modules\Admin\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Services\Admin\ProductService;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Undocumented function
     *
     * @return void
     */
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        try {
            return view('admin::pages.product.index', compact('products'));
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('admin::pages.product.create');
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $productId = $this->productService->store($request->all());
        try {
            return  redirect()->route('admin.product.index')->with('success', 'Product created successfully');
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
        // thong bao them thang cong
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = $this->productService->findById($id);
        try {
            return view('admin::pages.product.edit', compact('product'));
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $statusUpdate = $this->productService->update( $request->all(), $id);
        if ($statusUpdate) {
            return redirect()->back();
        } else {
            dd("Update Failed");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $statusDelete = $this->productService->delete($id);
        if ($statusDelete){
            return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully');
        } else {
            dd("Delete Failed");
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Hamcrest\Arrays\IsArray;
use Hamcrest\Type\IsArray as TypeIsArray;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class OrderController extends Controller
{
    public function index($id = null)
    {
        if ($id) {
            $orders = Order::with('products:id,product_id,name,price,color')->find($id);
        } else {
            $orders = Order::with('products:id,name,price,color')->paginate(15);
        }
        return response()->json($orders);
    }
    public function create(OrderRequest $request)
    {
        $orders = Order::create($request->toArray());
        $orders->products()->attach($request->products_id);
        return response()->json($orders);
    }
    public function edit(OrderRequest $request, $id)
    {
        $orders = Order::find($id)->update($request->toArray());
        return response()->json($orders);

    }public function detach(Request $request, $id)
    {
        $orders = new Order();
        $orders->find($id)->products()->detach($request->products_id);
        return response()->json($orders);
    }
    public function delete($id)
    {
        $orders = Order::find($id)->delete();
        return response()->json($orders);
    }
    public function create_factor_pdf(Request $request,$id)
    {
        $order = new Order();
        $order->find($id)->addMedia($request->pdf)->usingName('factor_pdf')->toMediaCollection('factor_pdf');
        return response()->json('factor_pdf add successfully');
    }
    public function delete_factor_pdf($id)
    {
        $media = new Media();
        $media->destroy('factor_pdf', $id);
        return response()->json('factor_pdf deleted successfully');
    }
}

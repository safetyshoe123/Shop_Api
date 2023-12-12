<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexShop() {
        $data = Shop::all();
        // Working relationship
        // $data = Shop::find(2)->branch;
        if(empty($data)) {
            return response()->json([
                'message' => 'No Shop is listed',
                'data' => $data,
            ]);
        }
        
        return response()->json($data);
    }

    public function showShopId(string $shopId) {
        $shop_id = Shop::where('shopId', $shopId)->first();

      

        if($shop_id == null) {
            return response()->json(['message' => 'Nothing to show!'], 401);
        }

        return response()->json([$shop_id]);
    }

    public function createShop(Request $request) {
        $request->validate([
            'shopName' => 'required|string|max:50',
            'address1' => 'required|string|max:50',
            'address2' => 'required|string|max:50',
            'notes' => 'required|string|max:255',
            'remark' => 'required|string|max:255',
        ]);

        $shop = Shop::create([
            'shopId' => Str::random(10),
            'shopName' => $request->shopName,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'notes' => $request->notes,
            'remark' => $request->remark,
        ]);

        return response()->json([
            'message' => 'Shop created successfully',
            'shop' => $shop,
        ]);
    }

    public function updateShop(Request $request, $id) {

        $shop = Shop::find($id);
        if($shop == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t update shop..'], 401);
        } else {
            $shop->update($request->all());
            return response()->json([$shop]);
        }
    }

    public function deleteShop($id) {
        $delete_shop = Shop::find($id);
        if($delete_shop == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t delete shop..'], 401);
        }
        $delete_shop->delete();
        return response()->json(['message' => 'Shop successully deleted!']);
    }
}

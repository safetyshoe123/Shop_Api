<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class ShopController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexShop(/*User $user*/)
    {
        // if (Gate::allows('isSuperAdmin', $user)) {
        $data = Shop::all();
        if (empty($data)) {
            return response()->json([
                'message' => 'No Shop is listed',
                'data' => $data,
            ]);
        }
        return response()->json($data, 200);
        // } else {
        //     return response()->json(['message' => 'Access Denied!'], 403);
        // }
    }

    public function showShopId(string $shopId)
    {
        $shop_id = Shop::where('shopId', $shopId)->first();

        if ($shop_id == null) {
            return response()->json(['message' => 'Nothing to show!'], 401);
        }

        return response()->json($shop_id, 200);
    }

    public function createShop(Request $request, User $user)
    {
        // if (Gate::allows('isSuperAdmin', $user)) {
        $request->validate(
            [
                'shopId' => 'required|string|max:10',
                'shopName' => 'required|string|max:50',
                'address1' => 'required|string|max:50',
                'address2' => 'required|string|max:50',
                'notes' => 'required|string|max:255',
                'remark' => 'required|string|max:255',
            ],
        );

        $shop = Shop::create([
            'shopId' => $request->shopId,
            'shopName' => $request->shopName,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'notes' => $request->notes,
            'remark' => $request->remark,
        ]);

        return response()->json($shop, 200);
        // } else {
        //     return response()->json(['message' => 'Access Denied!'], 403);
        // }
    }

    public function updateShop(Request $request, $id, User $user)
    {
        // if (Gate::allows('isSuperAdmin', $user)) {
        $shop = Shop::find($id);
        if ($shop == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t update shop..'], 401);
        } else {
            $shop->update($request->all());
            return response()->json($shop, 200);
        }
        // } else {
        //     return response()->json(['message' => 'Access Denied!'], 403);
        // }
    }

    public function deleteShop($id, User $user)
    {
        // if (Gate::allows('isSuperAdmin', $user)) {
        $delete_shop = Shop::find($id);
        if ($delete_shop == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t delete shop..'], 401);
        }
        $delete_shop->delete();
        return response()->json(['message' => 'Shop successully deleted!'], 200);
        // }
    }
}

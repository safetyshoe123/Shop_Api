<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['shop'] = Shop::orderBy('id', 'desc');
        //return view('show.index', $data);
        if(empty($data)) {
            return response()->json([
                'message' => 'No Shop is listed',
                'data' => $data,
            ]);
        }
        return response()->json([$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'shopName' => 'required|string|max:50',
            'address1' => 'required|string|max:50',
            'address2' => 'required|string|max:50',
            'notes' => 'required|string|max:255',
            'remark' => 'required|string|max:255',
        ]);

        $shop = Shop::create([
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shop_id = Shop::find($id);

        if($shop_id == null) {
            return response()->json(['message' => 'Nothing to show!']);
        }

        return response()->json([$shop_id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shop = Shop::find($id);
        if($shop == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t update shop..']);
        } else {
            // $shop->update($request->all());
            $shop->shopName = $request->shopName;
            $shop->address1 = $request->address1;
            $shop->address2 = $request->address2;
            $shop->notes = $request->notes;
            $shop->remark = $request->remark;
            
            $shop->save();
            return response()->json([$shop]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_shop = Shop::find($id);
        if($delete_shop == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t delete shop..']);
        }
        $delete_shop->delete();
        return response()->json(['message' => 'Shop successully deleted!', 200]);
    }
}

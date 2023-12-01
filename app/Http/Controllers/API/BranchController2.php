<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['branch'] = Branch::orderBy('id', 'desc');

        if(empty($data)) {
            return response()->json([
                'message' => 'No Branch is listed',
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
            'branchName' => 'required|string|max:50',
            'address1'  => 'required|string|max:50',
            'address2'  => 'required|string|max:50',
            'dateOpened'  => 'required|date',
            'type'  => 'required|string|max:1',
            'notes'  => 'required|string|max:255',
            'remark'  => 'required|string|max:255',
        ]);

        $branch = Branch::create([
            'branchId' => Str::random(10),
            'branchName' => $request->branchName,
            'address1' => $request->address1,
            'address2' => $request->address2,
            //YYYY/MM/DD format
            'dateOpened' => $request->dateOpened,
            'type' => $request->type,
            'notes' => $request->notes,
            'remark' => $request->remark,
        ]);

        return response()->json([
            'message' => 'Branch created successfully',
            'branch' => $branch,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $branch_id = Branch::find($id);

        if($branch_id == null) {
            return response()->json(['message' => 'Nothing is found!']);
        }

        return response()->json([$branch_id]);
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
        $branch = Branch::find($id);
        if($branch == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t update shop branch..']);
        } else {
            // $branch->update($request->all());
            $branch::where('id', $id)->update($request->all());
            // $branch->branchName = $request->branchName;
            // $branch->address1 = $request->address1;
            // $branch->address2 = $request->address2;
            // //YYYY/MM/DD format
            // $branch->dateOpened = $request->dateOpened;
            // $branch->type = $request->type;
            // $branch->notes = $request->notes;
            // $branch->remark = $request->remark;
            // $branch->save()->refresh();
            return response()-> json([$branch]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete_branch = Branch::find($id);
        if($delete_branch == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t delete shop branch..']);
        }
        $delete_branch->delete();
        return response()->json(['message'=> 'Branch successfully deleted!', 200]);
    }
}

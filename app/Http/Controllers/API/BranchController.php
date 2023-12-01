<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    public function indexBranch() {
        // $data['branch'] = Branch::orderBy('id', 'desc');
        $data = Branch::all();

        if(empty($data)) {
            return response()->json([
                'message' => 'No Branch is listed',
                'data' => $data,
            ]);
        }
        return response()->json([$data]);
    }

    public function showBranchId(string $id) {
        $branch_id = Branch::find($id);

        if($branch_id == null) {
            return response()->json(['message' => 'Nothing is found!']);
        }

        return response()->json([$branch_id]);
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * return Illuminate\Http\Response
     */

    public function createBranch(Request $request) {
        $request->validate([
            'fshop_id' => 'required',
            'shopId' => 'required',
            'branchName' => 'required|string|max:50',
            'address1'  => 'required|string|max:50',
            'address2'  => 'required|string|max:50',
            'dateOpened'  => 'required|date',
            'type'  => 'required|string|max:1',
            'notes'  => 'required|string|max:255',
            'remark'  => 'required|string|max:255',
        ]);

        $branch = Branch::create([
            'fshop_id' => $request->fshop_id,
            'shopId' => $request->shopId,
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

    public function updateBranch(Request $request, $id) {
        $request->validate([
            'branchName' => 'required|string|max:50',
            'address1'  => 'required|string|max:50',
            'address2'  => 'required|string|max:50',
            'dateOpened'  => 'required|date',
            'type'  => 'required|string|max:1',
            'notes'  => 'required|string|max:255',
            'remark'  => 'required|string|max:255',
        ]);

        $branch = Branch::find($id);
        if($branch == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t update shop branch..']);
        } else {
            $branch->update($request->all());
            return response()-> json([$branch]);
        }
    }

    public function deleteBranch($id){
        
        $delete_branch = Branch::find($id);
        if($delete_branch == null) {
            return response()->json(['message' => 'Something went wrong! Can\'t delete shop branch..']);
        }
        $delete_branch->delete();
        return response()->json(['message'=> 'Branch successfully deleted!', 200]);
    }
}

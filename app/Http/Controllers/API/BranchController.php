<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class BranchController extends Controller
{
    public function indexBranch(User $user)
    {
        // $data['branch'] = Branch::orderBy('id', 'desc');
        if (Gate::allows('isSuperAdmin', $user)) {
            $data = Branch::all();

            if (empty($data)) {
                return response()->json([
                    'message' => 'No Branch is listed',
                    'data' => $data,
                ]);
            }
            return response()->json($data, 200);
        } else {
            return response()->json(['message' => 'You are not authorize!'], 403);
        }
    }

    public function showBranchId(string $branchId, User $user)
    {
        //get() is used for getting all data with the same ID
        //first() is used for getting the first data that is the same ID
        if (Gate::allows('isAdmin', $user) || Gate::allows('isSuperAdmin', $user) || Gate::allows('isManager', $user)) {
            $branch_id = Branch::where('shopId', $branchId)->get();

            if ($branch_id == null) {
                return response()->json(['message' => 'Nothing is found!']);
            }
            return response()->json($branch_id);
        } else {
            return response()->json(['message' => 'You are not authorize!'], 403);
        }
    }

    /**
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * return Illuminate\Http\Response
     */

    public function createBranch(Request $request, User $user)
    {
        if (Gate::allows('isAdmin', $user) || Gate::allows('isSuperAdmin', $user)) {
            $request->validate(
                [
                    // 'fshop_id' => 'required',
                    'shopId' => 'required|string|max:10',
                    'branchId' => 'required|string|max:10',
                    'branchName' => 'required|string|max:50',
                    'address1'  => 'required|string|max:50',
                    'address2'  => 'required|string|max:50',
                    'dateOpened'  => 'required|date',
                    'type'  => 'required|string|max:1',
                    'notes'  => 'required|string|max:255',
                    'remark'  => 'required|string|max:255',
                ],
                // [
                //     'shopId.required' => 'Shop ID is required.',
                //     'branchName.required' => 'Branch Name is required.',
                //     'branchName.string' => 'Branch Name must be a string.',
                //     'branchName.max' => 'Branch Name must not exceed 50 characters.',
                //     'address1.required' => 'Address Line 1 is required.',
                //     'address1.string' => 'Address Line 1 must be a string.',
                //     'address1.max' => 'Address Line 1 must not exceed 50 characters.',
                //     'address2.required' => 'Address Line 2 is required.',
                //     'address2.string' => 'Address Line 2 must be a string.',
                //     'address2.max' => 'Address Line 2 must not exceed 50 characters.',
                //     'dateOpened.required' => 'Date Opened is required.',
                //     'dateOpened.date' => 'Date Opened must be a valid date.',
                //     'type.required' => 'Type is required.',
                //     'notes.required' => 'Notes are required.',
                //     'notes.max' => 'Notes must not exceed 255 characters.',
                //     'remark.required' => 'Remark is required.',
                //     'remark.string' => 'Remark must be a string.',
                //     'remark.max' => 'Remark must not exceed 255 characters.',
                // ],
            );

            $branch = Branch::create([
                // 'shop_id' => $request->shop_id,
                'shopId' => $request->shopId,
                'branchId' => $request->branchId,
                'branchName' => $request->branchName,
                'address1' => $request->address1,
                'address2' => $request->address2,
                //YYYY/MM/DD format
                'dateOpened' => $request->dateOpened,
                'type' => $request->type,
                'notes' => $request->notes,
                'remark' => $request->remark,
            ]);

            return response()->json(
                $branch,
                200
            );
        } else {
            return response()->json(['message' => 'You are not authorize!'], 403);
        }
    }

    public function updateBranch(Request $request, $id, User $user)
    {
        if (Gate::allows('isAdmin', $user) || Gate::allows('isSuperAdmin', $user)) {
            $request->validate(
                [
                    'branchName' => 'required|string|max:50',
                    'address1'  => 'required|string|max:50',
                    'address2'  => 'required|string|max:50',
                    'dateOpened'  => 'required|date',
                    'type'  => 'required|string|max:1',
                    'notes'  => 'required|string|max:255',
                    'remark'  => 'required|string|max:255',
                ],
                // [
                //     'branchName.required' => 'The branch name is required.',
                //     'branchName.string' => 'The branch name must be a string.',
                //     'branchName.max' => 'The branch name must not exceed 50 characters.',
                //     'address1.required' => 'Address line 1 is required.',
                //     'address1.string' => 'Address line 1 must be a string.',
                //     'address1.max' =>
                //     'Address line 1 must not exceed 50 characters.',
                //     'address2.required' => 'Address line 2 is required.',
                //     'address2.string' => 'Address line 2 must be a string.',
                //     'address2.max' => 'Address line 2 must not exceed 50 characters.',
                //     'dateOpened.required' => 'The date opened is required.',
                //     'dateOpened.date' => 'The date opened must be a valid date.',
                //     'type.required' => 'The type is required.',
                //     'notes.required' => 'Notes are required.',
                //     'notes.string' => 'Notes must be a string.',
                //     'notes.max' => 'Notes must not exceed 255 characters.',
                //     'remark.required' => 'Remark is required.',
                //     'remark.string' =>
                //     'Remark must be a string.',
                //     'remark.max' => 'Remark must not exceed 255 characters.',
                // ],
            );

            $branch = Branch::find($id);
            if ($branch == null) {
                return response()->json(['message' => 'Something went wrong! Can\'t update shop branch..']);
            } else {
                $branch->update($request->all());
                return response()->json([$branch]);
            }
        } else {
            return response()->json(['message' => 'You are not authorize!'], 403);
        }
    }

    public function deleteBranch($id, User $user)
    {
        if (Gate::allows('isSuperAdmin', $user)) {
            $delete_branch = Branch::find($id);
            if ($delete_branch == null) {
                return response()->json(['message' => 'Something went wrong! Can\'t delete shop branch..']);
            }
            $delete_branch->delete();
            return response()->json(['message' => 'Branch successfully deleted!', 200]);
        } else {
            return response()->json(['message' => 'You are not authorize!'], 403);
        }
    }
}

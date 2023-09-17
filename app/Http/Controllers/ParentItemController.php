<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParentItemRequest;
use App\Models\ParentItem;
use App\Models\Child;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ParentItemController extends Controller
{

    public function index()
    {
        $parentItems = ParentItem::with('children')->get();

        return view('index', ['parentItems' => $parentItems]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(ParentItemRequest $request)
    {
        Log::info($request);
        $data = $request->validated();
        Log::info($data);

        return DB::transaction(function () use ($data) {
            // ParentItemの作成
            $parentItem = ParentItem::create(['name' => $data['parent']['name']]);

            // Childの作成
            Child::create([
                'parent_item_id' => $parentItem->id,
                'name' => $data['child']['name']
            ]);

            return redirect()->back()->with('message', 'Successfully added!');
        });
    }
}

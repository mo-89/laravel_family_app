<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParentItemRequest;
use App\Models\ParentItem;
use App\Models\Child;
use Illuminate\Support\Facades\Log;

class ParentItemController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(ParentItemRequest $request)
    {
        Log::info($request);

        $data = $request->validated();

        $parentItem = ParentItem::create(['name' => $data['parent_name']]);
        $parentItem->children()->create(['name' => $data['child_name']]);

        return redirect()->back()->with('message', 'Successfully added!');
    }
}

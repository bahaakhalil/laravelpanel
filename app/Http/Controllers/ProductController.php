<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ProductStoreRequest;
use App\Http\Requests\Admin\ProductUpdateRequest;
use App\Models\AttachmentsType;
use App\Models\Program;
use App\Models\PurchaseType;
use App\Models\PurchaseTypeAttachment;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::get();
        $purchaseTypes =  PurchaseType::get();
        $purchaseTypeAttachments =   PurchaseTypeAttachment::get();
        $attachmentsTypes =   AttachmentsType::get();
        return view('pages.pages.product.index', compact('programs', 'purchaseTypeAttachments', 'purchaseTypes', 'attachmentsTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slug = $request->type;
        return view('pages.pages.product.create', compact('slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        if ($request->type == 'program') {
            Program::create($request->validated());
        } elseif ($request->type == 'attachment') {
            AttachmentsType::create($request->validated());
        } elseif ($request->type == 'purchase') {
            PurchaseType::create($request->validated());
        } elseif ($request->type == 'purchaseattach') {
            PurchaseTypeAttachment::create($request->validated());
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        if ($request->type == 'program')
            $program =  Program::where('id', $id)->first();
        if ($request->type == 'attachment')
            $program =  AttachmentsType::where('id', $id)->first();
        if ($request->type == 'purchase')
            $program =  PurchaseType::where('id', $id)->first();
        if ($request->type == 'purchaseattach')
            $program =  PurchaseTypeAttachment::where('id', $id)->first();        
        return view('pages.pages.product.edit', compact('slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        if ($request->type == 'program') {
            $program =  Program::where('id', $id)->first();
            $program->update($request->validated());
        } elseif ($request->type == 'attachment') {
            $attachment =  AttachmentsType::where('id', $id)->first();
            $attachment->update($request->validated());
        } elseif ($request->type == 'purchase') {
            $purchase = PurchaseType::where('id', $id)->first();
            $purchase->update($request->validated());
        } elseif ($request->type == 'purchaseattach') {
            $purchaseattach = PurchaseTypeAttachment::where('id', $id)->first();
            $purchaseattach->update($request->validated());
        }
        return redirect()->back()->with('sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

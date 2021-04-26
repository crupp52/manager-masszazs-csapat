<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Kris\LaravelFormBuilder\FormBuilder;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::where('status', 1)->get();

        return view('admin.staff.index', [
            'staff' => $staff
        ]);
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('\App\Forms\StaffForm', [
            'method' => 'POST',
            'url' => route('admin.staff.save')
        ]);

        return view('admin.staff.form', [
            'form' => $form
        ]);
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
        $staff = Staff::where('id', $id)->firstOrFail();

        $form = $formBuilder->create('\App\Forms\StaffForm', [
            'method' => 'POST',
            'url' => route('admin.staff.save', [
                'id' => $staff->id
            ]),
            'model' => $staff
        ]);

        return view('admin.staff.form', [
            'form' => $form
        ]);
    }

    public function delete($id)
    {
        $staff = Staff::where('id', $id)->first();

        $staff->status = 0;

        if ($staff->save()) {
            return redirect()->back()->with('success', 'A munkatárs sikeresen törölve lett.');
        } else {
            return redirect()->back()->with('error', 'A munkatárs törlése közben hiba lépett fel.');
        }
    }

    public function save(FormBuilder $formBuilder, Request $request, $id = null)
    {
        $staff = Staff::where('id', $id)->first();

        if (!$staff) {
            $staff = new Staff();
        }

        $staff->fill($request->only($staff->getFillable()));

        $form = $formBuilder->create('\App\Forms\StaffForm', [
            'method' => 'POST',
            'url' => route('admin.staff.save'),
            'model' => $staff
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        if ($request->hasFile('profile_picture')) {
            $photo = $request->file('profile_picture');

            $filename = date("Ymd_His") . '_' . $photo->getClientOriginalName();

            $staff->filename = $filename;

            Storage::disk('public')->putFileAs('images', $photo, $filename);
        }

        if ($staff->save()) {
            return redirect()->route('admin.staff.index')->with('success', 'A munkatárs sikeresen mentve lett.');
        } else {
            return redirect()->back()->with('error', 'A munkatárs mentése közben hiba lépett fel.');
        }
    }
}

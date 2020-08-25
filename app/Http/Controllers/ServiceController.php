<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Kris\LaravelFormBuilder\FormBuilder;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index', [
            'services' => $services
        ]);
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('\App\Forms\ServiceForm', [
            'method' => 'POST',
            'url' => route('admin.service.save'),
            'files' => true
        ]);

        return view('admin.services.form', [
            'form' => $form
        ]);
    }

    public function edit(FormBuilder $formBuilder, $id)
    {
        $service = Service::where('id', $id)->firstOrFail();

        $form = $formBuilder->create('\App\Forms\ServiceForm', [
            'method' => 'POST',
            'url' => route('admin.service.save', [
                'id' => $id
            ]),
            'files' => true,
            'model' => $service
        ]);

        return view('admin.services.form', [
            'form' => $form
        ]);
    }

    public function delete($id)
    {

    }

    public function save(FormBuilder $formBuilder, Request $request, $id = null)
    {
        $service = Service::where('id', $id)->first();

        if (!$service) {
            $service = new Service();
        }

        $service->fill($request->only($service->getFillable()));

        $form = $formBuilder->create('\App\Forms\ServiceForm', [
            'method' => 'POST',
            'url' => route('admin.service.save', [
                'id' => $service->id
            ]),
            'files' => true,
            'model' => $service
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $key => $photo) {
                $filename = $service->id . '_' . $key . '_' . date("Ymd_His") . '_' . $photo->getClientOriginalName();

                $servicePhoto = new ServicePhoto();
                $servicePhoto->service_id = $service->id;
                $servicePhoto->filename = $filename;
                $servicePhoto->save();

                Storage::disk('public')->putFileAs('images', $photo, $filename);
            }
        }

        if ($service->save()) {
            return redirect()->route('admin.service.index')->with('success', 'A szolgáltatás mentése sikeres volt!');
        } else {
            return redirect()->back()->with('error', 'A szolgáltatás mentése közben hiba lépett fel!');
        }
    }

    public function deletePhoto($id)
    {
        $servicePhoto = ServicePhoto::where('id', $id)->firstOrFail();

        $servicePhoto->status = 0;

        if ($servicePhoto->save()){
            return redirect()->back()->with('success', 'A kép törlése sikeres volt.');
        }else{
            return redirect()->back()->with('error', 'A kép törlése közben hiba lépett fel.');
        }
    }
}

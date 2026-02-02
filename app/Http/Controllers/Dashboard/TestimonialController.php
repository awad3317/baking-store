<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\WebResponseClass;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('dashboard.pages.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonial = new Testimonial();
        return view('dashboard.pages.testimonials.create', compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'text' => 'required|string',
            'stars' => 'required|numeric|min:1|max:5',
            'color' => 'required|string',
            'active' => 'boolean',
        ]);

        Testimonial::create($request->all());
        return WebResponseClass::sendResponse('تم إضافة التقييم بنجاح','تم إضافة التقييم بنجاح','حسناً','dashboard.testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'text' => 'required|string',
            'stars' => 'required|numeric|min:1|max:5',
            'color' => 'required|string',
            'active' => 'boolean',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        
        // Handle active boolean checkbox behavior
        $data = $request->all();
        $data['active'] = $request->has('active');

        $testimonial->update($data);
        return WebResponseClass::sendResponse('تم تحديث التقييم بنجاح','تم تحديث التقييم بنجاح','حسناً','dashboard.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return WebResponseClass::sendResponse('تم حذف التقييم بنجاح','تم حذف التقييم بنجاح','حسناً','dashboard.testimonials.index');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        return redirect()->route('dashboard.testimonials.index')->with('success', 'تم إضافة التقييم بنجاح');
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
        $testimonial = Testimonial::findOrFail($id);
        return view('dashboard.pages.testimonials.edit', compact('testimonial'));
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

        return redirect()->route('dashboard.testimonials.index')->with('success', 'تم تحديث التقييم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = \App\Models\Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('dashboard.testimonials.index')->with('success', 'تم حذف التقييم بنجاح');
    }
}

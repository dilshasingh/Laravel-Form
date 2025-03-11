<?php
// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display the product creation form
    public function create()
    {
        return view('form');
    }

    // Store the new product in the database
    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:1000',
        ]);

        // Create the product
        Product::create($validated);

        // Redirect to the form with a success message
        return redirect()->route('product.create')->with('success', 'Product created successfully!');
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formData;

class UserDataController extends Controller
{

    //Show form for entering name and lastname
    public function showForm()
    {
        return view('infoForm.index');
    }

    //Handle name and lastname submission
    public function submitForm(Request $request)
    {
        session([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
        ]);

        return redirect()->route('age');
    }

    //Show form for entering age
    public function showAgeForm()
    {
        return view('infoForm.ageInfo', [
            'name' => session('name', 'Anonymous'),
            'lastname' => session('lastname', 'User')
        ]);
    }

    //Handle age submission and display result
    public function submitAge(Request $request)
    {
        session(['age' => $request->input('age')]);

        return redirect()->route('result');
    }

    //Show result page with user's name and age
    public function showResult()
    {
        return view('infoForm.result', [
            'name' => session('name', 'Anonymous'),
            'lastname' => session('lastname', 'User'),
            'age' => session('age', 0)
        ]);
    }
}

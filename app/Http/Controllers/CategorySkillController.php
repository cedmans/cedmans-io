<?php

namespace App\Http\Controllers;

use App\CategorySkill;

class CategorySkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return CategorySkill::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return CategorySkill::findOrFail($id);
    }
}

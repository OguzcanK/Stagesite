<?php

namespace App\Http\Controllers\Web;

use App\Tool;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ToolController extends Controller
{
    public function index()
    {
        $tool = Tool::all();
        return view('tool.index', compact('tool'));
    }

    public function show($tool)
    {

        $tool = Tool::findOrFail($tool);

        return view('tool.show', compact('tool'));
    }

    public function create()
    {
        return view('tool.create');
    }

    public function edit($tool)
    {
        $tool = Tool::findOrFail($tool);

        return view('tool.edit', compact('tool'));
    }
}

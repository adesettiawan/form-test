<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Data Member',
        ];

        return view('member.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'telp' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'hobi' => 'required',
            'tahun_lahir' => 'required',
            'umur' => 'required',
        ]);

        $inputString = implode(",", $request->input('hobi'));

        $input = $request->all();
        $input['hobi'] = $inputString;
        Member::create($input);

        return redirect()->route('member')->with('success', 'Member created successfully');
    }

    public function show()
    {
        $member = Member::all();

        return view('member.show', compact('member'));
    }
}

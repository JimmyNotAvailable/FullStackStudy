<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function viewHomeAdmin ()
    {
        return view('lte_template.masterAdminPage');
    }

    public function viewDanhMuc()
    {
        return view('lte_page.danh_muc.index');
    }

    public function viewHomeCustommer() {
        return view('vito_template.masterVitoTemplate');
    }

    public function viewCustomerDetail() {
        return view('vito_page.khach_hang.index');
    }
}


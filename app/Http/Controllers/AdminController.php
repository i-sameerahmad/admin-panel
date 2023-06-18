<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
return view('admin-pages.index');
}
public function logout(Request $request) {
    Auth::logout();
    return redirect('/login');
  }
    public function productList(){
        return view('admin-pages.product-list');

            }


                    public function categoryList(){
                        return view('admin-pages.category-list');

                            }
                            public function addCategory(){
                                return view('admin-pages.add-category');

                                    }

                                    public function manageOrders(){
$orders =Order::with('User')->get();

                                        return view('admin-pages.manage-orders',compact('orders'));

                                            }
                                            public function customers(){
                                                return view('admin-pages.customers');

                                                    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
                                        return view('admin-pages.manage-orders');                         
                                        
                                            }
                                            public function customers(){
                                                return view('admin-pages.customers');                         
                                                
                                                    }
}

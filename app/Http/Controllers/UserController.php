<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\UserProfile;





use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home(){
        $products = Product::paginate(15);
       // dd($products);
        return view('userside.user_pages.home',compact('products'));
        //  return view('try',compact('products'));

    }

    // public function product_detail(){

    //     $products = Product::all();
    //     return view('userside.user_pages.product-detail', compact('product'));
    // }

    public function cart()
    {

        return view('userside.user_pages.cart');
    }
    public function product_checkouts(){
        $profile = UserProfile::with('User')->where('user_id',auth()->id())->get();
        // $cartitems = \Cart::session(auth()->id())->getContent();

        return view('userside.user_pages.checkout',compact('profile','cartitems'));
    }

    public function whishlist_page(){

        return view('userside.user_pages.whishlist');
    }

    public function about_page(){
        // $cartitems = \Cart::session(auth()->id())->getContent();
        // echo count($cartitems);
        return view('userside.user_pages.about');
    }

    public function contact_page(){

        return view('userside.user_pages.contact');
    }


    public function user_page(){

        return view('userside.user_pages.profile');
    }

    public function login_page(){

        return view('userside.user_pages.login');
    }


    public function faqs_page(){

        return view('userside.user_pages.faq_page');
    }
    public function products(){
        $categories = Category::all();
        $products = Product::all();

        return view('userside.user_pages.products',compact('categories','products'));
    }
    public function category($id){
        $products= Product::with('Category')->where('category_id',$id)->get();
      //  dd($products);
$category = Category::find($id);
        return view('userside.user_pages.category',compact('products','category'));
    }

    public function search(Request $request){
        $search = $request->get('query');

        $products = Product::where('product_name','like', '%' . $search . '%' )
        ->orWhere('product_description','like', '%' . $search . '%')->get();
         //dd($posts);
       return view('userside.user_pages.search', compact('products'));

    }


}

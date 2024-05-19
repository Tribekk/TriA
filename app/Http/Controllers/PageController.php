<?php

namespace App\Http\Controllers;

use App\Filters\ClientFilter;
use App\Filters\ProductFilter;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\Client;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function homeForm(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:255|string',
                'email' => 'required|email|max:255',
                'title' => 'max:255',
            ]
        );

        Order::create([
           'name' => $request->name,
           'email' => $request->email,
           'title' => $request->title,
           'body' => $request->body
        ]);

        return view('pages.home');
    }

    public function login()
    {
        return view('user.login');
    }

    public function signup()
    {
        return view('user.signup');
    }

    public function profile()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('pages.profile', compact('user'));
    }

    public function passwordUpdate()
    {
        return view('user.updatePassword');
    }

    public function role(){
        $roles = Role::all();
        return view('pages.role.role', compact('roles'));
    }

    public function editRole(Role $role){
        return view('pages.role.editRole', compact('role'));
    }

    public function addRole (){
        return view('pages.role.addRole');
    }

    public function client(ClientFilter $request){
        $clients = User::whereHas('roles', function($query) { $query->where('name', 'user'); })->filter($request)->get();
        return view('pages.client.client', compact('clients'));
    }

    public function editClient(User $client){
        return view('pages.client.editClient', compact('client'));
    }

    public function addClient (){
        return view('pages.client.addClient');
    }

    public function category(){
        $categories = Category::all();
        return view('pages.category.category', compact('categories'));
    }

    public function editCategory(Category $category){
        return view('pages.category.editCategory', compact('category'));
    }

    public function addCategory (){
        return view('pages.category.addCategory');
    }

    public function product(ProductFilter $request){
        $products = Product::filter($request)->get();
        $categories = Category::all();
        return view('pages.product.product', compact('products', 'categories'));
    }

    public function editProduct(Product $product){
        $categories = Category::all();
        return view('pages.product.editProduct', compact('product', 'categories'));
    }

    public function addProduct (){
        $categories = Category::all();
        return view('pages.product.addProduct', compact('categories'));
    }

    public function orders (){
        $orders = Order::all()->sortByDesc('created_at')->sortBy('isReader');
        return view('pages.order.orders', compact('orders'));
    }
    public function order (Order $order){
        $order = Order::findOrFail($order->id);
        $order->isReader = 1;
        $order->save();
        return view('pages.order.order', compact('order'));
    }

    public function worker(ClientFilter $request){
        $workers = User::filter($request)->get();
        return view('worker.worker', compact('workers'));
    }

    public function editWorker(User $worker){
        $roles = Role::all();
        return view('worker.editWroker', compact('worker', 'roles'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Client;

class PageController extends Controller
{
    public function home()
    {
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

    public function client(ProductFilter $request){
        $clients = Client::filter($request)->get();
        return view('pages.client.client', compact('clients'));
    }

    public function editClient(Client $client){
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    function index () {

        return view('Home');
    }

    //                              About US
    function AboutUs () {

        return view('AboutUs');
    }

    //                              Contact Us
      
    function ContactUs () {

        return view('ContactUs');
    }

    function contactform(Request $request){
       
        $name=$request->input('name');
        $email=$request->input('email');
        $contact=$request->input('contact');   
        $message=$request->input('message');
           
        DB::unprepared("insert IGNORE into contactus (name, email, contact, message)
         values ('$name','$email','$contact','$message')");

         return redirect('/ContactUs');
               

    }
    
    //                              Sign Up and Login

    function Signup () {

        return view('Signup');
    }
    
    function Login () {

        return view('Login');
    }
   
    function store(Request $request){
        
        $uname=$request->input('username');
        $email=$request->input('email');
        $passw=$request->input('password');       
        $contact=$request->input('contact');
        $city=$request->input('city');
        $postal=$request->input('postal');
        $address=$request->input('address');
    
        DB::unprepared("insert IGNORE into users (username, email, password, contact, city, postal	, address)
         values ('$uname','$email','$passw','$contact', '$city','$postal',' $address')");

         return redirect('/Login');
               

    }
    
    function UserLogin (Request $request) {

        $email=$request->input('email');        
        $password=$request->input('password');
       
        $user=DB::select("select * from users where email = ? ",[$email]);
        $checkpassword = "123";
        foreach ($user as $user){
        $checkpassword =  $user ->password;}
      
        if ($password == $checkpassword) {

            foreach ($user as $user){
            $request ->session()->put('user',$user );
         
                break;
            }
            
            return redirect('/Home')->with('success', 'You signed in successfully!');                
        }

        else {
            return("Incorrect Email or Password");
        }
       
    } 

    //                          Logout

    function  logout() {

     if (session() ->has('user')) {
         session() ->pull('user');
         $Products=DB::select('select * from product');
         DB::unprepared("delete from cart ");      
        
         return redirect('/Home');                
        }
     else {
         return redirect("/Login");
     }
          
    }
    
    //                              Admin

    function AdminDashboards () {
        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
                if($use->username== 'Saima'){
                    $Products= DB::select("select * from product ");
                    $users= DB::select("select * from users");
    
                    return view('Admin',['Products'=>$Products, 'users'=>$users]);

                }
                else{
                    return redirect('/Home')->with('error', 'You must be signed in as Admin');


                }
            }
        }
        else{

            return redirect('/Home')->with('error', 'You must be signed in as Admin');


        }
                

    }

    function Productstore(Request $request){
       
        $title=$request->input('Title');
        $Picture=$request->input('Picture');
        $Price=$request->input('Price');   
        $Discount=$request->input('Discount');
        $Rating=$request->input('Rating');
        $Collection=$request->input('Collection');
        $Description=$request->input('Description');
      
        DB::unprepared("insert IGNORE into product (Title, Picture, Price, Discount,Rating, Collection, Description)
         values ('$title','$Picture','$Price','$Discount', '$Rating','$Collection', '$Description')");

         return redirect('/Admin')->with('success', 'Product added!');
               

    }

    function DeleteProduct ($id) {

        DB::unprepared("delete from product where id='$id'");
        
        return redirect('/Admin')->with('error', 'Product Deleted!');;

        
    }
    function DeleteUser ($id) {

        DB::unprepared("delete from users where id='$id'");
        
        return redirect('/Admin')->with('error', 'User Deleted!');

        
    }

    
    function Displayupdate (Request $request, $id) {

        $title=$request->input('Title');
        $Picture=$request->input('Picture');        
        $Price=$request->input('Price');       
        $Discount=$request->input('Discount');
        $Description=$request->input('Description');

        DB::update("update product set Title=?, Picture=?, Price=?, Discount=?, Description=? where id=?", 
        [$title, $Picture, $Price, $Discount, $Description, $id]);
        return redirect('/Admin')->with('success', 'Product Updated!');;


    }

    function UpdateProduct ($id) {

        $Products = DB::select("select * from product where id=?",[$id]);
        return view('UpdateProduct',['Products'=>$Products]);

    }
    
    function UpdateProd () {        

        return view('UpdateProduct');
    }

        
    function SearchCustomers () {    
        
        $users= DB::select("select * from users");

        return view('SearchCustomers',[ 'users'=>$users]);

    }

    function ViewContactUs () {    
        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
            if($use->username== 'Saima'){
                $queries= DB::select("select * from contactus");

                return view('ViewContactUs',[ 'queries'=>$queries]);

            }
        }
        }
        else{
            $Products= DB::select("select * from product ");

            return redirect('Home',['Products'=>$Products]);

        }
            
    }

 
    //                              Home

    function ViewHome () {
        $Products= DB::select("select * from product where Collection='NewArrivals'");

        return view('Home',['Products'=>$Products]);

    }

    function CartNewArrivals(Request $request, $id){

        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
                $Products= DB::select("select * from product ");
                DB::unprepared("insert IGNORE into cart (id, Title, Picture, Price, Discount, Rating, Collection, Description)
                select id, Title, Picture, Price, Discount, Rating, Collection, Description 
                from product where id=$id");
              
                return redirect('/Home')->with('success', 'Added to Cart!');                
            }
        }
        else{     
     
            return redirect('/Home')->with('error', 'You must be signed in to Add to Cart');
        }
                
         
    

         //DB::update("update Product set Title=?, Picture=?, Price=?, Discount=?, Description=? where id=?", 
         //[$title, $Picture, $Price, $Discount, $Description, $id]);
         //return redirect('/Admin');

       //  $Products = DB::select("select * from Product where id=?",[$id]);
         // return view('UpdateProduct',['Products'=>$Products]);
               

    }

    //                              Browse
            
    function Browse () {

        $SummerProducts= DB::select("select * from product where Collection='SummerCollection' LIMIT 4");
        $WinterProducts= DB::select("select * from product where Collection='WinterCollection' LIMIT 4");
        $BridalProducts= DB::select("select * from product where Collection='BridalCollection' LIMIT 4");



        return view('Browse',['SummerProducts'=>$SummerProducts, 'WinterProducts'=>$WinterProducts,'BridalProducts'=>$BridalProducts ]); 

       // return view('Admin',['Products'=>$Products, 'users'=>$users]);


    }

    function BrowseCart(Request $request, $id){
         
        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
                $Products= DB::select("select * from product ");
                DB::unprepared("insert IGNORE into cart (id, Title, Picture, Price, Discount, Rating, Collection, Description)
                select id, Title, Picture, Price, Discount, Rating, Collection, Description 
                from product where id=$id");
              
                return redirect('/Browse')->with('success', 'Added to Cart!');                
            }
        }
        else{     
     
            return redirect('/Browse')->with('error', 'You must be signed in to Add to Cart');
        }
                         
    }

    //                              SummerCollection
  
    function SummerCollection () {
        
        $Products= DB::select("select * from product where Collection='SummerCollection'");

        return view('SummerCollection',['Products'=>$Products]); 
        

    }

    function SummerCollectionCart(Request $request, $id){
         
        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
                $Products= DB::select("select * from product ");
                DB::unprepared("insert IGNORE into cart (id, Title, Picture, Price, Discount, Rating, Collection, Description)
                select id, Title, Picture, Price, Discount, Rating, Collection, Description 
                from product where id=$id");
              
                return redirect('/SummerCollection')->with('success', 'Added to Cart!');                
            }
        }
        else{     
     
            return redirect('/SummerCollection')->with('error', 'You must be signed in to Add to Cart');
        }
       


    }
    
        //                              WinterCollection

    
    function WinterCollection () {
        $Products= DB::select("select * from product where Collection='WinterCollection'");
    
        return view('WinterCollection',['Products'=>$Products]);
    }

    function WinterCollectionCart(Request $request, $id){
         
        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
                $Products= DB::select("select * from product ");
                DB::unprepared("insert IGNORE into cart (id, Title, Picture, Price, Discount, Rating, Collection, Description)
                select id, Title, Picture, Price, Discount, Rating, Collection, Description 
                from product where id=$id");
              
                return redirect('/WinterCollection')->with('success', 'Added to Cart!');                
            }
        }
        else{     
     
            return redirect('/WinterCollection')->with('error', 'You must be signed in to Add to Cart');
        }
       

    }
        //                              BridalCollection


    function BridalCollection () {

        $Products= DB::select("select * from product where Collection='BridalCollection'");
    
        return view('BridalCollection',['Products'=>$Products]);
    
    }    
    

    function BridalCollectionCart(Request $request, $id){
         
        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {
                $Products= DB::select("select * from product ");
                DB::unprepared("insert IGNORE into cart (id, Title, Picture, Price, Discount, Rating, Collection, Description)
                select id, Title, Picture, Price, Discount, Rating, Collection, Description 
                from product where id=$id");
              
                return redirect('/BridalCollection')->with('success', 'Added to Cart!');                
            }
        }
        else{     
     
            return redirect('/BridalCollection')->with('error', 'You must be signed in to Add to Cart');
        }
       


    }

    //                                  Cart

    function ViewCart () {

        if (session()->has('user')) {
            $userID = session('user');
            $user = DB::select('select * from users where id = ? ', [$userID]);
            foreach ($user as $use) {

                $Products = DB::select("select * from cart ");

                return view('Cart',['Products'=>$Products]);
        
            }
        }
        else{
            return redirect('/Home')->with('error', 'You must be signed in to view the Cart');
        }
    
    }

    function DeleteProductcart ($id) {

        DB::unprepared("delete from cart where id='$id'");
        
        return redirect('/Cart')->with('error', 'Item Deleted from Cart!');
        
    }

    function  Checkoutcart () {

        DB::unprepared("delete from cart ");
        
        return redirect('/Cart')->with('success', 'Thank you for shopping!');
        
    }

  
    function UpdateQuantity (Request $request, $id) {    

        $quan = $request->get('qty');
        
        DB::update("update  cart set  Quantity=?  where id=?", 
        [$quan,  $id ]);

        return redirect('Cart');
   
    }
  
}
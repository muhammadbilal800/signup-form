<?php include_once('./apis/api.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
     <div class="w-full py-2  bg-[#f5f5f5] mb-2" >
        <div class="  max-w-[90%] m-auto " >
            <div class="flex items-center justify-between " >
                <ul class="flex items-center justify-between " >
                    <a class="" href="#"><img src="https://api.iconify.design/streamline:mail-send-envelope-envelope-email-message-unopened-sealed-close.svg?color=%23000000"></a>
                    <li class="ml-2 text-[#1c1c1c]">hello@colorlib.com</li>
                    <li class="ml-4 text-[#1c1c1c]">|</li>
                    <li class="ml-4 text-[#1c1c1c]">Free shipping for all orders of $99</li>
                </ul>
                <ul class="flex items-center justify-between " >
                    <a class="mr-3" href=""><img src="https://api.iconify.design/ion:social-facebook.svg?color=%23000000"></a>
                    <a class="mr-3" href=""><img src="https://api.iconify.design/mdi:twitter.svg?color=%23000000"></a>
                    <a class="mr-3" href=""><img src="https://api.iconify.design/ri:linkedin-fill.svg?color=%23000000"></a>
                    <a class="mr-3" href=""><img src="https://api.iconify.design/formkit:pinterest.svg?color=%23000000"></a>
                    <li class="mr-3">|</li>
                    <a  class="flex items-center ml-3 text-[#1c1c1c]" href=""><img class="flex items-center mr-3 " src="https://api.iconify.design/twemoji:flag-for-flag-united-states.svg?color=%23000000">English <img class="ml-2" src="https://api.iconify.design/ic:baseline-keyboard-arrow-down.svg?color=%23000000" ></a>
                    <li class="mr-3 text-[#1c1c1c]">|</li>
                    <a class="flex items-center text-[#1c1c1c]" href=""><img class="mr-2" src="https://api.iconify.design/iconamoon:profile-fill.svg?color=%23000000">Login</a>
                  
                </ul>
            </div>
     </div>
    </div>
    
    <?php include_once('./components/navbar.php'); ?>

    <section class="max-w-[90%] m-auto">
            <div class="flex ">
                <div class=" mr-6 mt-2 mb-2 ">
                    <ul class="flex items-center  py-1 px-6 bg-green-600 text-white ">
                        <li class="mr-2" ><a href="/"><img src="https://api.iconify.design/fa-solid:align-justify.svg?color=%23ffffff" width="25px"></a></li>
                        <h6 class="mr-2 " >All departments</h6>
                        <li class="mr-2" ><a href="/"><img src="https://api.iconify.design/material-symbols:keyboard-arrow-down-rounded.svg?color=%23ffffff" width="15px" ></a></li>
                    </ul>
                    <ul class="p-4 border-gray-300 border-2" >
                        <li class="mb-3 "><a href="/">Fresh Meat</a></li>
                        <li class="mb-3 "><a href="/">Vegetables</a></li>
                        <li class="mb-3 "> <a href="/">Fresh Bananas</a></li>
                        <li class="mb-3 "><a href="/">Fruit & Nut Gifts</a></li>
                        <li class="mb-3 "><a href="/">Fresh Berries</a></li>
                        <li class="mb-3 "><a href="/">Ocean Foods</a></li>
                        <li class="mb-3 "><a href="/">Butter & Eggs</a></li>
                        <li class="mb-3 "><a href="/">Fastfood</a></li>
                        <li class="mb-3 "><a href="/">Fresh Onion</a></li>
                        <li class="mb-3 "><a href="/">Papayaya & Crisps</a></li>
                        <li class="mb-3 "> <a href="/">Oatmeal</a></li>
                    </ul>
                </div> 
             
                <div >
                    <div class="flex items-center mb-4  " >
                        <div class="flex items-center border-[#ebebeb] border-2 w-[700px] h-[50px] p-4 mb-2 relative mt-2 " >
                          <h1 class="ml-2 font-bold text-lg ">All Categories</h1>
                          <span class="flex ml-2 " ><img class="mr-4" src="https://api.iconify.design/material-symbols:keyboard-arrow-down.svg?color=%23000000">|</span>
                          <form action="">
                              <input class="border-none ml-2 mr-56 " type="text" placeholder="What do you neend?" >
                              <button class="font-semibold text-lg px-6 py-[10px] bottom-[1px] inline-block border-none absolute bg-green-600 text-white" type="submit" >Search</button>
                          </form>
                        </div>
              
                       
                      
                             <div class="flex items-center  " >
                              <a class="ml-2 mb-2 mr-4 p-2 bg-[#f5f5f5] rounded-full " href=""><img src="https://api.iconify.design/material-symbols:call-outline.svg?color=%23000000 " width="30px"  ></a>
                            <div class="flex flex-col " >
                              <h5 class="font-bold text-base " >+65 11.188.888</h5>
                              <span class="text-sm ">support 24/7 time</span>
                            </div>
                             </div>

                        </div>

                        <div class="overflow-hidden bg-cover w-[100%] h-[431px] mb-2 bg-no-repeat right-0 " style="background-image: url('./image6.jpg') " >
                            <div class="mt-28 ml-8" >
                                <span class="text-[#7fad39] font-semibold text-lg " >FRUIT FRESH</span>
                                <h2 class="text-5xl font-extrabold mb-2" >Vegetable </h2>
                                <h2 class="text-5xl font-extrabold">100% Organic</h2>
                                <p class=" text-[#6f6f6f] text-base font-normal mb-8 mt-2 ">Free Pickup and Delivery Available</p>
                                <a class="bg-[#7fad39] px-4 py-2 text-white font-bold text-lg " href="/">Shop Now</a>
                            </div>
                        </div>
                </div>
              
            
            </div>
            <div>
                <h1 class="text-center text-4xl font-bold mt-8 mb-8">Featured Products</h1>
               
                <ul class="flex items-center justify-center mb-12" >
                    <li class="mr-6"><u>All</u></li>
                    <li class="mr-6">Vegetable</li>
                    <li class="mr-6">Fresh Meat</li>
                    <li class="mr-6">Oranges</li>
                    <li class="mr-6">Fast Food</li>
                </ul>
                <div class="grid grid-cols-4 gap-10 mb-12 750:grid-cols-3" >
                    
                <?php 
                    $sql = "SELECT * from products WHERE is_active = true";
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $image = $row['image'];
                            $price = $row['price'];
                            $slug = $row['slug'];
                            $name = $row['name'];
                            echo "
                            <div class='w-full bg-gray-100 p-3 rounded-lg flex flex-col'>
                                <div class='bg-white rounded-lg overflow-hidden h-[300px] flex items-center justify-center'>
                                    <img src='./assets/product_images/$image' class='w-[95%]' alt='$name image'>
                                </div>
                                <div class='p-3'>
                                    <h3 class='font-semibold text-lg'>$name</h3>
                                    <div class='w-full text-end'>
                                        <span class='text-lg justify-end'>$$price</span>
                                    </div>
                                </div>
                                <a class='bg-blue-600 text-center text-white w-full py-2 rounded-lg font-semibold' href='./product.php?product=$slug'>Buy Now</a>
                            </div>
                            ";
                        }
                    }
                
                
                ?>
                </div>
            </div>
        </section>
       
            <footer class=" w-full bg-[#F3F6FA] pt-[70px] pb-3" >
                <div class="max-w-[90%] m-auto" >
                   
                    <div class="flex items-center justify-between " >
                       
                   
                    <ul class="mr-4">
                        <a class="mt-4 mb-8 inline-block" href="/"><img src="https://preview.colorlib.com/theme/ogani/img/logo.png.webp"></a>
                        <li class="mb-3">Address: 60-49 Road 11378 New York</li>
                        <li class="mb-3">Phone: +65 11.188.888</li>
                        <li class="mb-3">Email: hello@colorlib.com</li>
                    </ul>
               
                    <div class="mr-4 " >
                        <h2 class="mb-3 font-bold">Useful Links</h2>
                       <ul>
                        <li class="mb-3"><a href="/">About Us</a></li>
                        <li class="mb-3"><a href="/">About Our Shop</a>
                        </li class="mb-3">
                        <li class="mb-3"><a href="/">Delivery infomation</a></li>
                        <li class="mb-3"><a href="/">Privacy Policy</a>
                        </li>
                        <li class="mb-3"><a href="/">Our Sitemap</a></li>
                       </ul>
                    </div>
                    <div class="mr-4 " >
                        <ul >
                            
                            <li class="mt-8 "><a href="/">Who We Are</a></li>
                        <li class="mt-2"><a href="/">Our Services</a></li>
                        <li class="mt-2"><a href="/">Projects</a></li>
                        <li class="mt-2"><a href="/">Contact</a></li>
                        <li class="mt-2"><a href="/">Innovation</a></li>
                        <li class="mt-2"><a href="/">Testimonials
                        </a></li>
                        </ul>
                    </div>
                    <div class="mr-6" >
                        <h2 class="mb-3 font-bold" >Join Our Newsletter Now</h2>
                        <p class="mb-12" >Get E-mail updates about our latest shop and special offers.</p>
                        <form  class="mb-3 border-gray-400 " action="#">
                            <input class="w-[70%] p-3 "  type="text" placeholder="Enter your mail" >
                            <button class="p-3 bg-green-600 text-white" type="submit" >SUBSCRIBE</button>
                        </form>
                        <ul class="mt-8 flex items-center" >
                            <li class="p-2 bg-[#ffffff] rounded-full mr-4 hover:bg-green-500 hover:text-color-white"><a href="/"><img src="https://api.iconify.design/ion:social-facebook.svg?color=%23000000" width="25px"></a></li>
                            <li class="p-2 bg-[#ffffff] rounded-full mr-4 hover:bg-green-500"><a href="/"><img src="https://api.iconify.design/mdi:twitter.svg?color=%23000000" width="25px"></a></li>
                            <li class="p-2 bg-[#ffffff] rounded-full mr-4 hover:bg-green-500"><a href="/"><img src="https://api.iconify.design/ri:linkedin-fill.svg?color=%23000000" width="25px"></a></li>
                            <li class="p-2 bg-[#ffffff] rounded-full mr-4 hover:bg-green-500"><a href="/"><img src="https://api.iconify.design/formkit:pinterest.svg?color=%23000000" width="25px"></a></li>
                        </ul>
                    </div>
                </div>
            
                <div class="flex items-center justify-between mt-8" >
                    <ul class="flex items-center  " >
                        
                     <li>Copyright ©2023 All rights reserved | This template is made with</li>
                       <li><a class="flex items-center" href=""><img src="https://api.iconify.design/ic:round-favorite.svg?color=%23000000" width="20px" ></a></li>
                       <li class="mr-1">by</li>
                       <li class="text-blue-500 hover:text-transparent "><a href="/">Colorlib</a></li>
                    </ul>
                    <ul class=" flex items-center justify-between">
                        <li class="mr-3"><a href="/"><img src="https://services.youngicee.com/wp-content/uploads/2022/11/Skrill-Payments-in-Nigeria.jpg" width="70px"></a></li>
                        <li class="mr-3"><a href="/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bitcoin_logo.svg/2560px-Bitcoin_logo.svg.png" width="70px"></a></li>
                        <li class="mr-3"><a href="/"><img src="https://1000logos.net/wp-content/uploads/2017/05/PayPal-Logo-1999.png" width="70px"></a></li>
                    </ul>
            
                 
                </div>
            
        
                </div>
               
            </footer>
</body>
</html>
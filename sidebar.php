<?php
//require_once dirname(__FILE__)."/item/head.php";
require_once dirname(__FILE__)."/views/login_nav.php";
//require_once dirname(__FILE__)."/animations/svg.php";

//   unset($_SESSION['login']);
//   unset($_SESSION['id']);
//   unset($_SESSION['username']);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gridy Blog</title>

    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- swiper slider css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css" integrity="sha512-m3pAvNriL711NMlhkZHK6K4Tu2/RjtrzyjxZU8mlAbxxoDoURy27KajN1LGTLeEEPvaN12mKAgSCrYEwF9y0jA==" crossorigin="anonymous" />

    <!-- custom style.css file -->
    <link rel="stylesheet" href="css/style_blog.css">

</head>
<body>
    
    <!-- Header -->
    <!-- <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://127.0.0.1/safefood/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/safefood/sidebar.html">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1/safefood/views/registration.php">signup</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1/safefood/views/login.php">login</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header> -->
                  <!-- collapse on toggle button click -->
                  <div class="collapse">
                      <ul class="navbar-nav">
                            <div class="search-box">
                                <a href="#" class="nav-link"><i class="fas fa-search"></i></a>
                            </div>
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="nav-link"><i class="fab fa-dribbble"></i></a>
                      </ul>
                  </div>
           </nav>
       </header>
    <!-- .Header -->

    <!-- Main Site -->
       <main id="site-main">

            <!-- Post Content -->
                <section class="container">
                    <div class="layout-2 row">
                        <div class="col-8">
                            <article id="post">
                                <!-- article heading -->
                                <div class="headings text-center">
                                    <div class="category">
                                        <a href="#" class="nav-link">Travel</a>
                                    </div>
        
                                    <div class="title">
                                        <h2 class="text-title text-dark display-1">Looking for some feedback for this rejected track technology</h2>
                                    </div>
        
                                    <div class="meta">
                                        <a href="#" class="link display-2 text-secondary px-1">
                                            <i class="fas fa-user text-primary"></i> John Stephens
                                        </a>
                                        <a href="#" class="link display-2 text-secondary px-1">
                                            <i class="fas fa-clock text-primary"></i>  Clock Wed 02, 2019
                                        </a>
                                        <a href="#" class="link display-2 text-secondary px-1">
                                            <i class="fas fa-comments text-primary"></i> 12
                                        </a>
                                    </div>
        
                                </div>
        
                                <!-- thumbnail  -->
                                <div class="thumbnail mt-3">
                                    <img src="./assets/img6.png" class="thumbnail" alt="">
                                </div>
        
                                <!-- content -->
                                <div class="content text-dark display-2 secondary-title mt-3">
                                    <p>可頌超人曾經是被竹塹城的麵包店剩下來最後一塊的可頌麵包，由於麵包店只賣當日的新鮮麵包，可頌超人即將面臨被丟棄的命運，然而突然間，一道閃光打下來擊中了可頌超人，讓可頌超人從再也平凡不過的可頌，搖身一變成為「披著帥氣披風，具有意識和超能力的可愛可頌」！
可頌超人有了意識以後，不僅逃離了被丟掉的命運，也由於本身的特殊超能力，讓他成為竹塹城無人不知無人不曉，人見人愛的超級英雄！
然而縱使可頌超人有著厲害的超能力，他卻對因為麵包浪費一事束手無策。由於麵包店必須提供當日新鮮麵包，導致每天總是有很多麵包被浪費掉，可頌超人只好每次都去麵包店把麵包都買走，並交給有需要的人。有一天，可頌超人要去麵包店把自己的同伴要回去時，這才發現，竟然有人比他搶先一步要走所有的過賞味期的麵包。
經過追查，可頌超人發現到，原來是新竹一個悄悄成立的協會做的事，他們叫做食來運轉，是一群重視「惜食扶弱」精神的愛心志工······

                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque 
                                        blanditiis adipisci aliquam dolore consequuntur fuga sed consectetur quas perspiciatis?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque 
                                        blanditiis adipisci aliquam dolore consequuntur fuga sed consectetur quas perspiciatis?
                                    </p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque 
                                        blanditiis adipisci aliquam dolore consequuntur fuga sed consectetur quas perspiciatis?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque 
                                        blanditiis adipisci aliquam dolore consequuntur fuga sed consectetur quas perspiciatis?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum itaque 
                                        blanditiis adipisci aliquam dolore consequuntur fuga sed consectetur quas perspiciatis?
                                    </p>
                                </div>
                            </article>
        
                            <!-- post footer -->
                            <div class="post-footer mb-3">
                                <div class="post-tags d-flex flex-wrap justify-content-center">
                                    <a href="#" class="nav-link btn bg-light">Travel</a>
                                    <a href="#" class="nav-link btn bg-light">Food</a>
                                    <a href="#" class="nav-link btn bg-light">Lifestyle</a>
                                    <a href="#" class="nav-link btn bg-light">Techonogy</a>
                                    <a href="#" class="nav-link btn bg-light">Fashion</a>
                                </div>
        
                                <div class="post-author text-center">
                                    <div class="author-avatar">
                                        <img src="./assets/face/face4.png" class="rounded" alt="">
                                    </div>
        
                                    <div class="author-info py-2">
                                        <h3 class="text-dark">John Stephens</h3>
        
                                        <p class="text-secondary secondary-title">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                            Recusandae, sequi! In harum laborum ipsa voluptatibus doloremque nulla, tempore aut veritatis.
                                        </p>
        
                                        <div class="post-tags d-flex flex-wrap justify-content-center">
                                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="nav-link"><i class="fab fa-dribbble"></i></a>
                                        </div>
                                    </div>
        
                                </div>
        
                                <!-- post related -->
                                <div class="post-realted py-2">
                                    <div class="row justify-content-center">
                                        <div class="prev">
                                            <div class="py-2">
                                                <a href="#" class="display-2 text-dark">
                                                    <i class="fas fa-chevron-left"></i> 
                                                    Previous Post
                                                </a>
                                            </div>
                                            <article class="article text-center">
                                                <div class="d-flex">
                                                    <a href="#">
                                                        <img src="./assets/img9.jpg" class="object-fit" alt="">
                                                    </a>
                                                    <div class="cart-body px-1">
                                                        <div class="category">
                                                            <a href="#" class="link text-primary text-secondary">Fashion</a>
                                                        </div>
                                                        <a href="#" class="text-title display-1 text-dark">
                                                            Looking for some feedback for this rejected track
                                                            technology
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="next text-right">
                                            <div class="py-2">
                                                <a href="#" class="display-2 text-dark">
                                                    Next Post 
                                                    <i class="fas fa-chevron-right"></i> 
                                                </a>
                                            </div>
                                            <article class="article text-center">
                                                <div class="d-flex">
                                                    <a href="#">
                                                        <img src="./assets/img8.jpg" class="object-fit" alt="">
                                                    </a>
                                                    <div class="cart-body px-1">
                                                        <div class="category">
                                                            <a href="#" class="link text-primary text-secondary">Fashion</a>
                                                        </div>
                                                        <a href="#" class="text-title display-1 text-dark">
                                                            Looking for some feedback for this rejected track
                                                            technology
                                                        </a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
        
                                <!-- comments -->
                                <div class="post-comments py-2">
                                    <h3 class="text-center display-1 secondary-title py-2">5 Comments</h3>
        
                                    <div class="comment-details">
                                        <div class="comment-item py-2">
                                            <div class="d-flex">
                                                <div class="avatar px-2">
                                                    <img src="./assets/face/face1.jpg" class="rounded" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <h5 class="display-2 m-0">Brandon Kelly</h5>
                                                    <p class="title-secondary text-dark">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Quis ipsum suspendisse ultrices gravida lacus vel facilisis.
                                                    </p>
                                                </div>
                                            </div>
        
                                            <!-- comment reply -->
                                            <div class="reply py-2">
                                                <div class="d-flex">
                                                    <div class="avatar px-2">
                                                        <img src="./assets/face/face2.jpg" class="rounded" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <h5 class="display-2 m-0">Brandon Kelly</h5>
                                                        <p class="title-secondary text-dark">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Quis ipsum suspendisse ultrices gravida lacus vel facilisis.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="comment-item py-2">
                                            <div class="d-flex">
                                                <div class="avatar px-2">
                                                    <img src="./assets/face/face3.jpg" class="rounded" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <h5 class="display-2 m-0">Brandon Kelly</h5>
                                                    <p class="title-secondary text-dark">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Quis ipsum suspendisse ultrices gravida lacus vel facilisis.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    
                                    <!-- comment form -->
                                    <div class="comment-form">
        
                                        <h3 class="text-center display-1 secondary-title py-2">Leave Comment</h3>
        
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <input type="text" class="form-control" placeholder="Name">
                                            <input type="email" class="form-control" placeholder="Email">
                                            <input type="text" class="form-control" placeholder="Website">
                                        </div>
        
                                        <textarea class="form-control mt-3" placeholder="Message" rows="10"></textarea>
                                        <div class="text-center">
                                            <button class="btn btn-primary display-2 text-light mt-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                            <!-- .post footer -->
                        </div>
                        <div class="col-4">
                            <aside id="sidebar" class="px-1">

                                <!-- categories -->
                                <section class="categories">
                                    <h2 class="text-center text-dark">Categories</h2>

                                    <a href="#" class="d-flex justify-content-between text-dark">
                                        <span>Design</span>
                                        <span>5</span>
                                    </a>
                                    <a href="#" class="d-flex justify-content-between text-dark">
                                        <span>Graphic</span>
                                        <span>8</span>
                                    </a>
                                    <a href="#" class="d-flex justify-content-between text-dark">
                                        <span>Illistration</span>
                                        <span>3</span>
                                    </a>
                                    <a href="#" class="d-flex justify-content-between text-dark">
                                        <span>Fashion</span>
                                        <span>2</span>
                                    </a>
                                </section>

                                <!-- Trending post -->
                                <section class="trending-post mt-3">

                                    <h2 class="text-center text-dark py-2">Trending Post</h2>

                                    <!-- post-items -->
                                    <div class="post-item py-1">
                                        <article class="article">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <img src="./assets/img1.jpg" class="rounded px-1" alt="">
                                                </a>
                                                <div class="cart-body">
                                                    <div class="trending-category">
                                                        <a href="#" class="link text-primary">
                                                            Fashion
                                                        </a>
                                                    </div>
                                                    <a href="#" class="text-title display-2 text-dark">
                                                        Looking for some feedback for this rejected track technology
                                                    </a>
                                                    <p class="secondary-title text-secondary display-3">
                                                        <span>
                                                            <i class="far fa-clock text-primary"></i>
                                                             Clock Wed 02, 2019
                                                        </span>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                       <!-- post-items -->
                                       <div class="post-item py-1">
                                        <article class="article">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <img src="./assets/img2.jpg" class="rounded px-1" alt="">
                                                </a>
                                                <div class="cart-body">
                                                    <div class="trending-category">
                                                        <a href="#" class="link text-primary">
                                                            Fashion
                                                        </a>
                                                    </div>
                                                    <a href="#" class="text-title display-2 text-dark">
                                                        Looking for some feedback for this rejected track technology
                                                    </a>
                                                    <p class="secondary-title text-secondary display-3">
                                                        <span>
                                                            <i class="far fa-clock text-primary"></i>
                                                             Clock Wed 02, 2019
                                                        </span>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </article>
                                        </div>

                                           <!-- post-items -->
                                    <div class="post-item py-1">
                                        <article class="article">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <img src="./assets/img6.png" class="rounded px-1" alt="">
                                                </a>
                                                <div class="cart-body">
                                                    <div class="trending-category">
                                                        <a href="#" class="link text-primary">
                                                            Fashion
                                                        </a>
                                                    </div>
                                                    <a href="#" class="text-title display-2 text-dark">
                                                        Looking for some feedback for this rejected track technology
                                                    </a>
                                                    <p class="secondary-title text-secondary display-3">
                                                        <span>
                                                            <i class="far fa-clock text-primary"></i>
                                                             Clock Wed 02, 2019
                                                        </span>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                       <!-- post-items -->
                                       <div class="post-item py-1">
                                        <article class="article">
                                            <div class="d-flex">
                                                <a href="#">
                                                    <img src="./assets/img4.jpg" class="rounded px-1" alt="">
                                                </a>
                                                <div class="cart-body">
                                                    <div class="trending-category">
                                                        <a href="#" class="link text-primary">
                                                            Fashion
                                                        </a>
                                                    </div>
                                                    <a href="#" class="text-title display-2 text-dark">
                                                        Looking for some feedback for this rejected track technology
                                                    </a>
                                                    <p class="secondary-title text-secondary display-3">
                                                        <span>
                                                            <i class="far fa-clock text-primary"></i>
                                                             Clock Wed 02, 2019
                                                        </span>
                                                    </p>                                                    
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                </section>

                            </aside>
                        </div>
                    </div>


                </section>
            <!-- .Post Content -->

            <!-- Swiper slider -->
                <section class="slider">
                    <div class="container">

                        <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img1.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                     <!-- Slides -->
                                      <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img2.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                     <!-- Slides -->
                                      <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img3.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                        <!-- Slides -->
                                             <!-- Slides -->
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <img src="./assets/slider/img4.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <a href="#">
                                                <img src="./assets/slider/img5.jpg" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                            <!-- Slides -->
                                            <div class="swiper-slide">
                                                <a href="#">
                                                    <img src="./assets/slider/img7.jpg" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                                <!-- Slides -->
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img src="./assets/slider/img7.jpg" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                                    <!-- Slides -->

                                </div>
                            </div>

                    </div>
                </section>
             <!-- .Swiper slider -->

       </main>
    <!-- .Main Site -->

    <!-- footer -->
       <footer id="footer">
           <div class="container">
               <div class="row mb-3">
                   <div class="col-3">
                       <h2 class="footer-title secondary-title">About Us</h2>

                       <div class="secondary-title text-secondary">
                            <p class="mt-2 ">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                Deserunt quis voluptate alias illum modi tenetur, iste voluptatem illo. Accusantium, corrupti!
                            </p>
                            
                            <address>
                                <i class="fas fa-map-marker-alt text-primary"></i> 
                                5 South Main Street Los Angeles, ZZ-96110 USA
                            </address>

                            <div class="phone">
                                <i class="fas fa-mobile text-primary"></i> 
                                125-896-485
                            </div>

                            <div class="email">
                                <i class="fas fa-envelope text-primary"></i> 
                                dailysupport@gmail.com
                            </div>

                       </div>
                   </div>
                   <div class="col-3">
                       <h2 class="footer-title secondary-title">Feature Post</h2>

                       <div class="feature-post">
                           <div class="flex-item">
                               <article class="article">
                                   <div class="d-flex">
                                       <a href="#">
                                           <img src="./assets/img9.jpg" class="object-fit px-1" alt="">
                                           <div class="px-1">
                                               <a href="#" class="text-title display-2 text-dark">
                                                Looking for some feedback for this rejected track
                                                technology
                                               </a>
                                               <p class="secondary-title text-secondary display-3">
                                                    <span><i class="far fa-clock text-primary"></i> Clock Wed 02, 2021 </span>
                                               </p>
                                           </div>
                                       </a>
                                   </div>
                               </article>
                           </div>
                           <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="#">
                                        <img src="./assets/img1.jpg" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                             Looking for some feedback for this rejected track
                                             technology
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                 <span><i class="far fa-clock text-primary"></i> Clock Wed 02, 2021 </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                             </div>
                             <div class="flex-item">
                                <article class="article">
                                    <div class="d-flex">
                                        <a href="#">
                                            <img src="./assets/img2.jpg" class="object-fit px-1" alt="">
                                            <div class="px-1">
                                                <a href="#" class="text-title display-2 text-dark">
                                                 Looking for some feedback for this rejected track
                                                 technology
                                                </a>
                                                <p class="secondary-title text-secondary display-3">
                                                     <span><i class="far fa-clock text-primary"></i> Clock Wed 02, 2021 </span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </article>
                            </div>
                       </div>
                   </div>
                   <div class="col-3">
                        <h2 class="footer-title secondary-title">Tags</h2>

                        <div class="tags">
                            <div class="d-flex flex-wrap">
                                <a href="#" class="nav-link btn bg-light">Travel</a>
                                <a href="#" class="nav-link btn bg-light">Food</a>
                                <a href="#" class="nav-link btn bg-light">Lifestyle</a>
                                <a href="#" class="nav-link btn bg-light">Techonogy</a>
                                <a href="#" class="nav-link btn bg-light">Fashion</a>
                            </div>
                        </div>

                        <h2 class="footer-title secondary-title mt-2">Social</h2>

                        <div class="tags social">
                            <div class="d-flex flex-wrap">
                                <a href="#" class="nav-link btn bg-light"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="nav-link btn bg-light"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="nav-link btn bg-light"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="nav-link btn bg-light"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>

                   </div>
               </div>

               <!-- copyrights  -->
               <div class="copyrights">
                   <p class="text-center text-secondary display-2">
                        © 2021 <a href="#" class="text-primary">Dailytuition</a> - Personal Blog Theme. All rights reserved.
                   </p>
               </div>
           </div>
       </footer>
    <!-- .footer -->


    <!-- masonry libray for horizontal grid -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ==" crossorigin="anonymous"></script>

    <!-- swiper slider cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js" integrity="sha512-1LlEYE0qExJ/GUfAJ0k2K2fB5sIvMv/q6ueo3syohvQ3ElWDQVSMUOf39cxaDWHtNu7M6lF6ZC1H6A1m3SvheA==" crossorigin="anonymous"></script>

    <!-- custom javascript main.js file -->
    <script src="main.js"></script>
</body>
</html>
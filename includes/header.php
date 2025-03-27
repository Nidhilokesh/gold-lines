<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="includes/assets/css/header.css">

   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container1">
            <div class="nav__data">
               <a href="index.php" class="nav__logo">
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="index.php" class="nav__link <?= ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>

                  <li><a href="aboutus.php" class="nav__link <?= ($current_page == 'aboutus.php') ? 'active' : ''; ?>">About Us</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                       Data Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">

                        <!--=============== DROPDOWN SUBMENU ===============-->
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                               IT & Telecom Services <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Documents
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Payments
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> Refunds
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                               Cloud Services  <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                     Documents
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                     Payments
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    Refunds
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  
                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        General Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                            <a href="construction.php" class="dropdown__link <?= ($current_page == 'construction.php') ? 'active' : ''; ?>">
                                Construction
                           </a>                          
                        </li>

                        <li>
                            <a href="infrasturcture.php" class="dropdown__link <?= ($current_page == 'infrasturcture.php') ? 'active' : ''; ?>">
                                Infrastructure 
                           </a>
                        </li>

                        <li>
                            <a href="baselife.php" class="dropdown__link <?= ($current_page == 'baselife.php') ? 'active' : ''; ?>">
                                Base Life Support Services
                           </a>
                        </li>
                        <li>
                            <a href="refregiration.php" class="dropdown__link <?= ($current_page == 'refregiration.php') ? 'active' : ''; ?>">
                                Refrigeration & HVAC 
                           </a>
                        </li>
                        <li>
                            <a href="transport.php" class="dropdown__link <?= ($current_page == 'transport.php') ? 'active' : ''; ?>">
                                Logistic & Transportation  
                           </a>
                        </li>
                        <li>
                            <a href="osp.php" class="dropdown__link <?= ($current_page == 'osp.php') ? 'active' : ''; ?>">
                                OSP Infrastructure Installation & Maintenance   
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li><a href="contact.php" class="nav__link <?= ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Us</a></li>

               </ul>
            </div>
         </nav>
      </header>

      <!--=============== MAIN JS ===============-->
      <script src="includes/assets/js/header.js"></script>
   </body>
</html>
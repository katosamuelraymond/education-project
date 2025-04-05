 <nav id="navmenu" class="navmenu">
 
        <ul>

        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div>


        <li><a href="<?=ROOT?>" class="active">Home</a></li>
       
        <li><a href="about">About</a></li>
        <li><a href="<?= ROOT ?>/trainers">trainers</a></li>
        <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="category">Category 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= ROOT ?>/category/science">Science</a></li>
                        <li><a href="<?= ROOT ?>/category/arts">Arts</a></li>
                        <li><a href="<?= ROOT ?>/category/business">Business</a></li>
                <li class="dropdown">
                    <a href="#"><span>More Subjects</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= ROOT ?>/category/mathematics">Mathematics</a></li>
                        <li><a href="<?= ROOT ?>/category/computing">Computing</a></li>
                        <li><a href="<?= ROOT ?>/category/languages">Languages</a></li>
                    </ul>
                </li>
               
            </ul>
          </li>
            </ul>
                </li>
               
            </ul>
        </li>
      
    </ul>

    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav> 







      
    
       
    
         
     
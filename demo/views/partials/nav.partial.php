
     <nav id="nav">
        <ul>
            <?php foreach($nav_links as $nav):?>
            <li>
                <a href="<?= $nav['link'];?>" target="_parent">  <?= $nav['name'];?></a>
            </li>
            <?php endforeach;?>
       

       
            <?php if($_SESSION['user']?? false) :?>
              <form action="#" method="$_POST">
                <input type="hidden" name="__method" value="PATCH">
                <input type="button" value="logout">
              </form>
            <?php else : ?>
                <li><a href="/register"> Register</a></li>

                    <li><a href="/login">Login</a></li>
             <?php endif; ?>
        </ul>
    </nav>

